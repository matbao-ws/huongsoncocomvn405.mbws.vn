import { spawn } from 'node:child_process';
import fs from 'node:fs';
import path from 'node:path';

const DOCS_SCREENSHOTS_DIR = path.resolve('/home/binhphan/matbao-ws/clients/huongsoncocomvn405.mbws.vn/docs/assets/screenshots');
const PUBLIC_SCREENSHOTS_DIR = path.resolve('/home/binhphan/matbao-ws/clients/huongsoncocomvn405.mbws.vn/public/docs/assets/screenshots');
fs.mkdirSync(DOCS_SCREENSHOTS_DIR, { recursive: true });
fs.mkdirSync(PUBLIC_SCREENSHOTS_DIR, { recursive: true });

async function getAuthCookies() {
    console.log('1. Đang đăng nhập lấy session cookie từ https://huongsonco.com.vn ...');
    const loginUrl = 'https://huongsonco.com.vn/vi/admin/login';
    const initResp = await fetch(loginUrl, { headers: { 'User-Agent': 'Mozilla/5.0' } });
    const initHtml = await initResp.text();
    const setCookieHeaders = initResp.headers.getSetCookie ? initResp.headers.getSetCookie() : [initResp.headers.get('set-cookie')];

    let xsrfToken = '';
    let sessionToken = '';

    for (const c of setCookieHeaders) {
        if (c && c.includes('XSRF-TOKEN=')) {
            xsrfToken = c.split('XSRF-TOKEN=')[1].split(';')[0];
        }
        if (c && c.includes('huong-son-session=')) {
            sessionToken = c.split('huong-son-session=')[1].split(';')[0];
        }
    }

    const csrfMatch = initHtml.match(/name="_token"\s+value="([^"]+)"/) || initHtml.match(/value="([^"]+)"\s+name="_token"/);
    const csrf = csrfMatch ? csrfMatch[1] : '';

    const params = new URLSearchParams();
    params.append('_token', csrf);
    params.append('email', 'admin@huongsonco.com.vn');
    params.append('password', 'YjNzz?d04L8o?pdz');

    const postResp = await fetch(loginUrl, {
        method: 'POST',
        headers: {
            'User-Agent': 'Mozilla/5.0',
            'Content-Type': 'application/x-www-form-urlencoded',
            'Cookie': `XSRF-TOKEN=${xsrfToken}; huong-son-session=${sessionToken}`
        },
        body: params.toString(),
        redirect: 'manual'
    });

    const postSetCookies = postResp.headers.getSetCookie ? postResp.headers.getSetCookie() : [postResp.headers.get('set-cookie')];
    for (const c of postSetCookies) {
        if (c && c.includes('huong-son-session=')) {
            sessionToken = c.split('huong-son-session=')[1].split(';')[0];
        }
        if (c && c.includes('XSRF-TOKEN=')) {
            xsrfToken = c.split('XSRF-TOKEN=')[1].split(';')[0];
        }
    }

    console.log('✔ Đã lấy session cookie thành công:', sessionToken ? sessionToken.substring(0, 15) + '...' : 'none');
    return { xsrfToken, sessionToken };
}

async function run() {
    const { xsrfToken, sessionToken } = await getAuthCookies();

    console.log('2. Đang khởi chạy Google Chrome headless...');
    const chrome = spawn('google-chrome', [
        '--headless=new',
        '--remote-debugging-port=9222',
        '--user-data-dir=/tmp/chrome_capture_profile',
        '--window-size=1440,900',
        '--no-sandbox',
        '--disable-gpu',
        '--hide-scrollbars'
    ]);

    await new Promise(r => setTimeout(r, 2000));

    const targetsResp = await fetch('http://127.0.0.1:9222/json/list');
    const targets = await targetsResp.json();
    const pageTarget = targets.find(t => t.type === 'page') || targets[0];
    const wsUrl = pageTarget.webSocketDebuggerUrl;
    console.log('Target Page WS:', wsUrl);

    const ws = new WebSocket(wsUrl);
    let msgId = 1;
    const callbacks = new Map();

    ws.onmessage = (event) => {
        const msg = JSON.parse(event.data);
        if (msg.id && callbacks.has(msg.id)) {
            const cb = callbacks.get(msg.id);
            callbacks.delete(msg.id);
            cb(msg);
        }
    };

    await new Promise((resolve) => {
        ws.onopen = resolve;
    });

    function sendCommand(method, params = {}) {
        return new Promise((resolve) => {
            const id = msgId++;
            callbacks.set(id, resolve);
            ws.send(JSON.stringify({ id, method, params }));
        });
    }

    await sendCommand('Page.enable');
    await sendCommand('Network.enable');

    // Set Cookies
    await sendCommand('Network.setCookie', {
        name: 'huong-son-session',
        value: decodeURIComponent(sessionToken),
        domain: 'huongsonco.com.vn',
        path: '/',
        httpOnly: true,
        secure: true
    });
    await sendCommand('Network.setCookie', {
        name: 'XSRF-TOKEN',
        value: decodeURIComponent(xsrfToken),
        domain: 'huongsonco.com.vn',
        path: '/',
        secure: true
    });

    const PAGES_TO_CAPTURE = [
        { name: '01_login', url: 'https://huongsonco.com.vn/vi/admin/login' },
        { name: '02_dashboard', url: 'https://huongsonco.com.vn/vi/admin' },
        { name: '03_users_list', url: 'https://huongsonco.com.vn/vi/admin/users' },
        { name: '03_roles', url: 'https://huongsonco.com.vn/vi/admin/roles' },
        { name: '04_products_list', url: 'https://huongsonco.com.vn/vi/admin/products' },
        { name: '04_categories', url: 'https://huongsonco.com.vn/vi/admin/categories' },
        { name: '04_brands', url: 'https://huongsonco.com.vn/vi/admin/brands' },
        { name: '05_product_options', url: 'https://huongsonco.com.vn/vi/admin/products/1/options' },
        { name: '06_orders_list', url: 'https://huongsonco.com.vn/vi/admin/orders' },
        { name: '07_rfq_contacts', url: 'https://huongsonco.com.vn/vi/admin/contact-submissions' },
        { name: '08_posts_list', url: 'https://huongsonco.com.vn/vi/admin/posts' },
        { name: '08_post_categories', url: 'https://huongsonco.com.vn/vi/admin/post-categories' },
        { name: '09_vouchers', url: 'https://huongsonco.com.vn/vi/admin/vouchers' },
        { name: '09_promotions', url: 'https://huongsonco.com.vn/vi/admin/promotions' },
        { name: '10_reviews', url: 'https://huongsonco.com.vn/vi/admin/reviews' },
        { name: '11_banners', url: 'https://huongsonco.com.vn/vi/admin/banners' },
        { name: '12_menus', url: 'https://huongsonco.com.vn/vi/admin/menus' },
        { name: '13_media', url: 'https://huongsonco.com.vn/vi/admin/media' },
        { name: '14_pages', url: 'https://huongsonco.com.vn/vi/admin/pages' },
        { name: '15_settings', url: 'https://huongsonco.com.vn/vi/admin/settings' },
        { name: '15_shipping', url: 'https://huongsonco.com.vn/vi/admin/shipping-partners' },
        { name: '15_payment', url: 'https://huongsonco.com.vn/vi/admin/payment-methods' },
        { name: '16_languages', url: 'https://huongsonco.com.vn/vi/admin/languages' },
        { name: '17_activity_logs', url: 'https://huongsonco.com.vn/vi/admin/activity-logs' },
        { name: '18_rental_calculator', url: 'https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may-photocopy' }
    ];

    console.log(`3. Bắt đầu chụp ${PAGES_TO_CAPTURE.length} màn hình thực tế...`);

    for (const page of PAGES_TO_CAPTURE) {
        process.stdout.write(`  * Đang chụp: [${page.name}] ${page.url} ... `);
        try {
            await sendCommand('Page.navigate', { url: page.url });
            await new Promise(r => setTimeout(r, 2500));

            const screenshotResp = await sendCommand('Page.captureScreenshot', {
                format: 'png',
                fromSurface: true
            });

            if (screenshotResp && screenshotResp.result && screenshotResp.result.data) {
                const buffer = Buffer.from(screenshotResp.result.data, 'base64');
                const p1 = path.join(DOCS_SCREENSHOTS_DIR, `${page.name}.png`);
                const p2 = path.join(PUBLIC_SCREENSHOTS_DIR, `${page.name}.png`);
                fs.writeFileSync(p1, buffer);
                fs.writeFileSync(p2, buffer);
                console.log(`OK (${(buffer.length / 1024).toFixed(1)} KB)`);
            } else {
                console.log('FAILED (no data)');
            }
        } catch (err) {
            console.log('ERROR:', err.message);
        }
    }

    ws.close();
    chrome.kill();
    console.log('✔ Đã hoàn tất chụp toàn bộ màn hình thực tế!');
}

run().catch(console.error);
