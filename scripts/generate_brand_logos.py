import os

logos = {
    "toshiba.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="54" font-family="'Helvetica Neue', Arial, sans-serif" font-weight="900" font-size="42" fill="#E60012" text-anchor="middle" letter-spacing="2">TOSHIBA</text>
</svg>''',

    "duplo.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="55" font-family="'Arial Black', Impact, sans-serif" font-weight="900" font-size="46" fill="#005BAC" text-anchor="middle" letter-spacing="1">Duplo</text>
</svg>''',

    "fansipan.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <g transform="translate(15, 16)">
    <polygon points="25,48 42,12 59,48" fill="#1A9900"/>
    <polygon points="38,48 50,22 62,48" fill="#10203C"/>
  </g>
  <text x="180" y="47" font-family="'Montserrat', 'Arial Black', sans-serif" font-weight="900" font-size="34" fill="#10203C" text-anchor="middle" letter-spacing="3">FANSIPAN</text>
  <text x="180" y="64" font-family="Arial, sans-serif" font-weight="700" font-size="10" fill="#1A9900" text-anchor="middle" letter-spacing="2">TONER &amp; CONSUMABLES</text>
</svg>''',

    "ricoh.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="54" font-family="'Helvetica Neue', Arial, sans-serif" font-weight="900" font-size="44" fill="#CF000E" text-anchor="middle" letter-spacing="3">RICOH</text>
</svg>''',

    "konica-minolta.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 80" width="320" height="80">
  <rect width="320" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <circle cx="48" cy="40" r="24" fill="#0099DA"/>
  <circle cx="48" cy="40" r="15" fill="#ffffff" fill-opacity="0.3"/>
  <path d="M28 40 Q48 24 68 40 Q48 56 28 40" fill="#004B87"/>
  <text x="195" y="38" font-family="'Trebuchet MS', Arial, sans-serif" font-weight="800" font-size="20" fill="#004B87" text-anchor="middle" letter-spacing="1">KONICA MINOLTA</text>
  <text x="195" y="56" font-family="Arial, sans-serif" font-weight="600" font-size="10" fill="#666666" text-anchor="middle" letter-spacing="2">GIVING SHAPE TO IDEAS</text>
</svg>''',

    "hp.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <circle cx="95" cy="40" r="26" fill="#0096D6"/>
  <text x="95" y="51" font-family="'Arial Black', sans-serif" font-style="italic" font-weight="900" font-size="34" fill="#ffffff" text-anchor="middle">hp</text>
  <text x="185" y="49" font-family="'Helvetica Neue', Arial, sans-serif" font-weight="800" font-size="28" fill="#181923" text-anchor="middle" letter-spacing="2">HEWLETT</text>
</svg>''',

    "viewsonic.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <g transform="translate(20, 20)">
    <circle cx="15" cy="18" r="7" fill="#E60012"/>
    <circle cx="28" cy="22" r="6" fill="#0099DA"/>
    <circle cx="38" cy="18" r="5" fill="#84BD00"/>
  </g>
  <text x="175" y="52" font-family="'Century Gothic', Arial, sans-serif" font-weight="800" font-size="32" fill="#BA121A" text-anchor="middle" letter-spacing="1">ViewSonic</text>
</svg>''',

    "panasonic.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="53" font-family="'Helvetica Neue', Arial, sans-serif" font-weight="800" font-size="36" fill="#003896" text-anchor="middle" letter-spacing="1.5">Panasonic</text>
</svg>''',

    "logitech.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="53" font-family="'Century Gothic', Arial, sans-serif" font-weight="800" font-size="36" fill="#181923" text-anchor="middle" letter-spacing="2">logitech</text>
</svg>''',

    "aver.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="54" font-family="'Arial Black', sans-serif" font-weight="900" font-size="42" fill="#FF5E00" text-anchor="middle" letter-spacing="2">AVer</text>
</svg>''',

    "xinda.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" width="300" height="80">
  <rect width="300" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <text x="50%" y="54" font-family="'Arial Black', Impact, sans-serif" font-weight="900" font-size="40" fill="#004DA0" text-anchor="middle" letter-spacing="2">XINDA</text>
</svg>''',

    "huong-son.svg": '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 80" width="320" height="80">
  <rect width="320" height="80" rx="10" fill="#ffffff" fill-opacity="0.05"/>
  <g transform="translate(15, 12)">
    <polygon points="25,48 45,12 65,48" fill="#1A9900"/>
    <polygon points="40,48 55,20 70,48" fill="#10203C"/>
  </g>
  <text x="195" y="42" font-family="'Montserrat', Arial, sans-serif" font-weight="900" font-size="24" fill="#10203C" text-anchor="middle" letter-spacing="2">HƯƠNG SƠN</text>
  <text x="195" y="60" font-family="Arial, sans-serif" font-weight="700" font-size="10" fill="#1A9900" text-anchor="middle" letter-spacing="3">OFFICE SOLUTIONS</text>
</svg>'''
}

dirs = [
    "public/assets/images/brands",
    "assets/images/brands",
    "storage/app/public/brands"
]

for d in dirs:
    os.makedirs(d, exist_ok=True)
    for fname, content in logos.items():
        path = os.path.join(d, fname)
        with open(path, "w", encoding="utf-8") as f:
            f.write(content.strip())
        print(f"Created {path}")

print("All brand logos created successfully!")
