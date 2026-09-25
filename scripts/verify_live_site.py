import urllib.request
import urllib.error
import sys

sys.stdout.reconfigure(encoding='utf-8')

test_urls = [
    ("Knowledge Hub", "https://huongsonco.com.vn/ve-huong-son/kien-thuc/"),
    ("Pillar Article 1", "https://huongsonco.com.vn/ve-huong-son/kien-thuc/dinh-muc-muc-in-cuon-master-duplo-in-de-thi/"),
    ("Pillar Article 2", "https://huongsonco.com.vn/ve-huong-son/kien-thuc/so-hoa-hoc-ba-dien-tu-thpt-chuan-moet/"),
    ("Pillar Article 3", "https://huongsonco.com.vn/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/"),
    ("Duplo DP-X550 Specs", "https://huongsonco.com.vn/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/"),
    ("Toshiba e-STUDIO 2528A Specs", "https://huongsonco.com.vn/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2528a/"),
    ("Sitemap XML", "https://huongsonco.com.vn/sitemap.xml"),
    ("Robots TXT", "https://huongsonco.com.vn/robots.txt"),
    ("LLMs TXT", "https://huongsonco.com.vn/llms.txt"),
]

print("=== KIỂM TRA TRẠNG THÁI WEBSITE LIVE (huongsonco.com.vn) ===\n")
all_ok = True

for label, url in test_urls:
    req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'})
    try:
        with urllib.request.urlopen(req, timeout=15) as resp:
            status = resp.status
            content = resp.read()
            text = content.decode('utf-8', errors='ignore')
            
            # Specific checks
            extra_info = []
            if "kien-thuc" in url and "dinh-muc" in url:
                if "Định Mức Mực In & Cuộn Master Duplo" in text or "Định mức tiêu hao" in text:
                    extra_info.append("Title OK")
                if "schema.org" in text:
                    extra_info.append("Schema JSON-LD OK")
            elif "kien-thuc/" in url and not url.endswith("de-thi/"):
                count_16 = text.count("ve-huong-son/kien-thuc/")
                extra_info.append(f"Internal links count: {count_16}")
            elif "duplo-dp-x550" in url:
                if "Thông số kỹ thuật" in text:
                    extra_info.append("Bảng thông số kỹ thuật OK")
            elif "toshiba-e-studio-2528a" in url:
                if "Thông số kỹ thuật" in text:
                    extra_info.append("Bảng thông số kỹ thuật OK")
            elif "sitemap.xml" in url:
                if "kien-thuc" in text and "urlset" in text:
                    url_count = text.count("<loc>")
                    extra_info.append(f"URLs in sitemap: {url_count}")

            extra_str = f" | {', '.join(extra_info)}" if extra_info else ""
            print(f"✔ [{status}] {label}: {url} ({len(content):,} bytes){extra_str}")
    except urllib.error.HTTPError as e:
        all_ok = False
        print(f"❌ [HTTP {e.code}] {label}: {url}")
    except Exception as e:
        all_ok = False
        print(f"❌ [ERROR] {label}: {url} -> {e}")

if all_ok:
    print("\n🎉 TẤT CẢ 9 ĐƯỜNG DẪN KIỂM TRA ĐỀU TRẢ VỀ HTTP 200 HOÀN TOÀN CHUẨN CHỈNH!")
else:
    print("\n⚠️ Có một số đường dẫn chưa đạt 200, vui lòng kiểm tra lại.")
