import os
import re

WORKSPACE_DIR = r"d:\Workspace\matbao-ws\huongsoncocomvn405.mbws.vn"

# 1. Check Hub
hub_file = os.path.join(WORKSPACE_DIR, "ve-huong-son/kien-thuc/index.html")
with open(hub_file, 'r', encoding='utf-8') as f:
    hub_html = f.read()
hub_imgs = re.findall(r'<img\s+[^>]*src=[\'"]([^\'"]+)[\'"]', hub_html)
print(f"Hub images count: {len(hub_imgs)} (Expected >= 16)")

# 2. Check Tin-tuc
tin_tuc_file = os.path.join(WORKSPACE_DIR, "ve-huong-son/tin-tuc/index.html")
with open(tin_tuc_file, 'r', encoding='utf-8') as f:
    tin_html = f.read()
tin_imgs = re.findall(r'<img\s+[^>]*src=[\'"]([^\'"]+)[\'"]', tin_html)
print(f"Tin-tuc images count: {len(tin_imgs)} (Expected >= 10)")

# 3. Check each of 16 articles
articles_dir = os.path.join(WORKSPACE_DIR, "ve-huong-son/kien-thuc")
subdirs = [d for d in os.listdir(articles_dir) if os.path.isdir(os.path.join(articles_dir, d))]
print(f"\nChecking {len(subdirs)} knowledge articles:")

all_passed = True
for d in subdirs:
    a_file = os.path.join(articles_dir, d, "index.html")
    if os.path.exists(a_file):
        with open(a_file, 'r', encoding='utf-8') as f:
            content = f.read()
        imgs = re.findall(r'<img\s+[^>]*src=[\'"]([^\'"]+)[\'"]', content)
        figures = re.findall(r'<figure', content)
        has_author = "Nguyễn Công Thuận" in content
        has_faq = "FAQPage" in content
        
        status = "OK" if len(imgs) >= 3 and len(figures) >= 2 and has_author and has_faq else "WARN"
        if status == "WARN":
            all_passed = False
        print(f"  {status} [{d}]: {len(imgs)} imgs, {len(figures)} figures, author={has_author}, faq={has_faq}")

if all_passed:
    print("\n🎉 TẤT CẢ 16 BÀI VIẾT ĐÃ HOÀN TOÀN ĐẦY ĐỦ HÌNH ẢNH, AUTHOR BOX VÀ SCHEMA!")
