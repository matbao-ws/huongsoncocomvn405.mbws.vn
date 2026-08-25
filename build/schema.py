# -*- coding: utf-8 -*-
"""Sinh JSON-LD để AI và Google hiểu Hương Sơn là ai, bán gì, giải quyết vấn đề gì.

Yêu cầu gốc của khách: "WWW phải được thiết kế cho AI".
Chiến lược §XXXII + KPI "AI visibility" (§XLI).
"""
from render import SITE

BASE = SITE["website"].rstrip("/")
ORG_ID = BASE + "/#organization"


def abs_url(path):
    return BASE + path


def organization():
    return {
        "@context": "https://schema.org",
        "@type": ["Organization", "LocalBusiness"],
        "@id": ORG_ID,
        "name": SITE["name"],
        "legalName": SITE["legal_name"],
        "alternateName": "Huong Son Co., Ltd",
        "url": BASE + "/",
        "logo": abs_url(SITE["logo"]),
        "image": abs_url(SITE["og_image"]),
        "slogan": SITE["slogan"],
        "description": (
            f"{SITE['legal_name']} thành lập {SITE['founded']}, cung cấp máy photocopy, "
            "máy in nhân bản siêu tốc, máy scan, máy phối trang, máy in laser, thiết bị văn phòng, "
            "vật tư – linh kiện, dịch vụ cho thuê thiết bị, bảo trì – sửa chữa và giải pháp "
            "số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, trường học, ngân hàng và doanh nghiệp."
        ),
        "taxID": SITE["mst"],
        "vatID": SITE["mst"],
        "foundingDate": "2008-06-01",
        "founder": {"@type": "Person", "name": "Nguyễn Công Thuận"},
        "address": {
            "@type": "PostalAddress",
            "streetAddress": SITE["address"],
            "addressLocality": "Hà Nội",
            "addressCountry": "VN",
        },
        "telephone": [h["label"] for h in SITE["hotlines"]],
        "email": SITE["email"],
        "openingHours": "Mo-Sa 08:00-17:30",
        "areaServed": {"@type": "Country", "name": "Việt Nam"},
        "sameAs": [s["url"] for s in SITE["socials"] if s["url"] != "#"],
        "knowsAbout": [
            "máy photocopy", "máy in nhân bản siêu tốc", "in sao đề thi", "máy scan tốc độ cao",
            "số hóa tài liệu", "OCR", "cho thuê máy photocopy", "managed print service",
            "vật tư in ấn", "máy phối trang", "bảo trì máy photocopy",
        ],
        "brand": [{"@type": "Brand", "name": b} for b in SITE["brands"]],
    }


def website():
    return {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": BASE + "/#website",
        "url": BASE + "/",
        "name": SITE["name"],
        "inLanguage": "vi-VN",
        "publisher": {"@id": ORG_ID},
        "potentialAction": {
            "@type": "SearchAction",
            "target": {"@type": "EntryPoint",
                       "urlTemplate": BASE + "/ve-huong-son/kien-thuc/?s={search_term_string}"},
            "query-input": "required name=search_term_string",
        },
    }


def breadcrumb(trail):
    """trail = [(label, url), ...] — url của phần tử cuối vẫn truyền để đủ dữ liệu."""
    return {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": i + 1, "name": label, "item": abs_url(url)}
            for i, (label, url) in enumerate(trail)
        ],
    }


def faqpage(faqs):
    """faqs = [(question, answer_text), ...]"""
    return {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {"@type": "Question", "name": q,
             "acceptedAnswer": {"@type": "Answer", "text": a}}
            for q, a in faqs
        ],
    }


def product(p, url):
    """p theo schema dữ liệu 12 trường trong products.json."""
    props = [{"@type": "PropertyValue", "name": k, "value": v}
             for k, v in p.get("specifications", {}).items()]
    if p.get("compatible_model"):
        props.append({"@type": "PropertyValue", "name": "Model tương thích",
                      "value": ", ".join(p["compatible_model"])})
    if p.get("source"):
        props.append({"@type": "PropertyValue", "name": "Xuất xứ / Nguồn", "value": p["source"]})
    obj = {
        "@context": "https://schema.org",
        "@type": "Product",
        "@id": abs_url(url) + "#product",
        "name": p["name"],
        "model": p["model"],
        "sku": p.get("sku", p["model"]),
        "category": p["category_label"],
        "description": p["summary"],
        "brand": {"@type": "Brand", "name": p["manufacturer"]},
        "manufacturer": {"@type": "Organization", "name": p["manufacturer"]},
        "url": abs_url(url),
        "additionalProperty": props,
        "audience": [{"@type": "Audience", "audienceType": a} for a in p.get("industry", [])],
        "seller": {"@id": ORG_ID},
        "offers": {
            "@type": "Offer",
            "availability": "https://schema.org/InStock",
            "priceCurrency": "VND",
            "url": abs_url(url),
            "seller": {"@id": ORG_ID},
            "priceSpecification": {
                "@type": "PriceSpecification",
                "description": "Giá theo cấu hình và số lượng — liên hệ nhận báo giá.",
            },
        },
    }
    if p.get("document"):
        obj["subjectOf"] = [{"@type": "DigitalDocument", "name": d["label"], "url": abs_url(d["url"])}
                            for d in p["document"]]
    return obj


def service(s, url):
    """s theo schema dữ liệu 6 khối trong solutions.json / services.json."""
    obj = {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": abs_url(url) + "#service",
        "name": s["name"],
        "serviceType": s.get("service_type", s["name"]),
        "description": s["summary"],
        "provider": {"@id": ORG_ID},
        "areaServed": {"@type": "Country", "name": "Việt Nam"},
        "url": abs_url(url),
    }
    if s.get("audience"):
        obj["audience"] = [{"@type": "Audience", "audienceType": a} for a in s["audience"]]
    if s.get("equipment"):
        obj["hasOfferCatalog"] = {
            "@type": "OfferCatalog",
            "name": "Thiết bị trong giải pháp",
            "itemListElement": [
                {"@type": "Offer", "itemOffered": {"@type": "Product", "name": e["name"]}}
                for e in s["equipment"]
            ],
        }
    return obj


def howto(name, steps, description=""):
    """steps = [(step_name, step_text), ...] — dùng cho khối Implementation."""
    return {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": name,
        "description": description or name,
        "step": [
            {"@type": "HowToStep", "position": i + 1, "name": n, "text": t}
            for i, (n, t) in enumerate(steps)
        ],
    }


def itemlist(name, items):
    """items = [(label, url), ...] — dùng cho trang danh mục."""
    return {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": name,
        "numberOfItems": len(items),
        "itemListElement": [
            {"@type": "ListItem", "position": i + 1, "name": label, "url": abs_url(url)}
            for i, (label, url) in enumerate(items)
        ],
    }


def article(a, url):
    return {
        "@context": "https://schema.org",
        "@type": a.get("schema_type", "Article"),
        "headline": a["title"],
        "description": a["summary"],
        "datePublished": a["date"],
        "dateModified": a.get("modified", a["date"]),
        "author": {"@id": ORG_ID},
        "publisher": {"@id": ORG_ID},
        "mainEntityOfPage": abs_url(url),
        "inLanguage": "vi-VN",
    }
