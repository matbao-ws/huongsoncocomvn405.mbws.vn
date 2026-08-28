@extends('client.layouts.app')

@section('title', "Công cụ tính TCO mua và thuê máy photocopy | Hương Sơn")
@section('meta_description', "So sánh tổng chi phí sở hữu (TCO) giữa mua và thuê máy photocopy trong cùng thời gian sử dụng.")
@section('canonical', url('/cong-cu/tinh-tco/'))
@section('jsonld')
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": [
      "Organization",
      "LocalBusiness"
    ],
    "@id": "https://huongsonco.com.vn/#organization",
    "name": "Hương Sơn",
    "legalName": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN",
    "alternateName": "Huong Son Co., Ltd",
    "url": "https://huongsonco.com.vn/",
    "logo": "https://huongsonco.com.vn/assets/images/brand/HUONG_SON_logo.svg",
    "image": "https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg",
    "slogan": "THIẾT BỊ CHO HIỆN TẠI, GIẢI PHÁP CHO TƯƠNG LAI",
    "description": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN thành lập 01/06/2008, cung cấp máy photocopy, máy in nhân bản siêu tốc, máy scan, máy phối trang, máy in laser, thiết bị văn phòng, vật tư – linh kiện, dịch vụ cho thuê thiết bị, bảo trì – sửa chữa và giải pháp số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, trường học, ngân hàng và doanh nghiệp.",
    "taxID": "0102759269",
    "vatID": "0102759269",
    "foundingDate": "2008-06-01",
    "founder": {
      "@type": "Person",
      "name": "Nguyễn Công Thuận"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội",
      "addressLocality": "Hà Nội",
      "addressCountry": "VN"
    },
    "telephone": [
      "024 3972 9484",
      "0913 237 302",
      "091 113 8583"
    ],
    "email": "info@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
    "areaServed": {
      "@type": "Country",
      "name": "Việt Nam"
    },
    "sameAs": [
      "https://www.facebook.com/huonsonco/",
      "https://zalo.me/0913237302",
      "https://www.messenger.com/t/thuan.nguyencong.330"
    ],
    "knowsAbout": [
      "máy photocopy",
      "máy in nhân bản siêu tốc",
      "in sao đề thi",
      "máy scan tốc độ cao",
      "số hóa tài liệu",
      "OCR",
      "cho thuê máy photocopy",
      "managed print service",
      "vật tư in ấn",
      "máy phối trang",
      "bảo trì máy photocopy"
    ],
    "brand": [
      {
        "@type": "Brand",
        "name": "DUPLO"
      },
      {
        "@type": "Brand",
        "name": "TOSHIBA"
      },
      {
        "@type": "Brand",
        "name": "RICOH"
      },
      {
        "@type": "Brand",
        "name": "KONICA MINOLTA"
      },
      {
        "@type": "Brand",
        "name": "HP"
      },
      {
        "@type": "Brand",
        "name": "FANSIPAN"
      }
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Trang chủ",
        "item": "https://huongsonco.com.vn/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Tính TCO",
        "item": "https://huongsonco.com.vn/cong-cu/tinh-tco/"
      }
    ]
  }
]
  </script>
@endsection

@section('content')
<!doctype html>
<html lang="vi" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Công cụ tính TCO mua và thuê máy photocopy | Hương Sơn</title>
  <meta name="description" content="So sánh tổng chi phí sở hữu (TCO) giữa mua và thuê máy photocopy trong cùng thời gian sử dụng." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://huongsonco.com.vn/cong-cu/tinh-tco/" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Công cụ tính TCO mua và thuê máy photocopy | Hương Sơn" />
  <meta property="og:description" content="So sánh tổng chi phí sở hữu (TCO) giữa mua và thuê máy photocopy trong cùng thời gian sử dụng." />
  <meta property="og:url" content="https://huongsonco.com.vn/cong-cu/tinh-tco/" />
  <meta property="og:image" content="https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg" />

  <link rel="icon" href="/assets/images/brand/favicon.svg" type="image/svg+xml" />
  <link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />

  <!-- Google Fonts: Plus Jakarta Sans + Dancing Script -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              green: '#1A9900',
              greenHover: '#147700',
              greenAccent: '#35a05e',
              dark: '#181924',
              deepDark: '#12131c',
              text: '#5b5d62',
              heading: '#181923',
              beige: 'rgb(247, 243, 238)',
              lightBg: '#f8fafc',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            handwriting: ['"Dancing Script"', 'cursive'],
          }
        }
      }
    }
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/custom.css?v=2.0.1" />
@php
    $inlineBlocksAllowed = (bool) auth()->user()?->canEditClientContent();
@endphp

@if($inlineBlocksAllowed)
    @include('client.partials.media-picker')

    {{--
        Formatting toolbar for the static regions of the storefront.

        Edit mode is not owned here. `client.partials.admin-bar` decides when a
        region opens and holds the pending changes; this file is a view onto that
        state, reached through `window.clientBlocks`. Two owners over the same
        [data-block-key] elements would each believe they knew whether a region
        was open, and the one that guessed wrong would write the other's DOM.

        Consequently nothing typed or formatted here saves on its own: a command
        mutates the region and reports it dirty, exactly as a keystroke does, and
        the change waits for Lưu. Only the three structural actions — restoring a
        region to the theme default, and adding or removing a box — call the
        server immediately, because none of them can be expressed as "the HTML
        this region will have after Lưu".

        Regions opt in from Blade via <x-client::editable> and friends, which emit
        data-block-* only for an authorized admin. Anything rendered from the
        database has no such hook and is edited on its own admin screen.
    --}}
    <style>


        /* Repeatable sections: the remove control rides on the item, the add
           control sits under the list. Both only exist for an authorized admin
           and only show once edit mode is on, so a visitor's page is unchanged
           and an admin browsing their own site cannot delete by mis-click. */
        .client-list-remove,
        .client-list-add {
            display: none;
        }

        body.client-edit-active .client-list-item {
            position: relative !important;
            outline: 1px dashed rgba(8, 127, 91, .5) !important;
            outline-offset: 6px !important;
        }

        body.client-edit-active .client-list-remove {
            align-items: center !important;
            background: #d9480f !important;
            border: 0 !important;
            border-radius: 999px !important;
            box-shadow: 0 6px 16px rgba(15, 23, 42, .3) !important;
            color: #fff !important;
            cursor: pointer !important;
            display: inline-flex !important;
            font-size: 12px !important;
            height: 30px !important;
            justify-content: center !important;
            position: absolute !important;
            right: -10px !important;
            top: -10px !important;
            width: 30px !important;
            z-index: 2147483643 !important;
        }

        body.client-edit-active .client-list-remove:hover {
            background: #b23c0c !important;
        }

        body.client-edit-active .client-list-add {
            align-items: center !important;
            background: #087f5b !important;
            border: 0 !important;
            border-radius: 999px !important;
            box-shadow: 0 8px 20px rgba(15, 23, 42, .25) !important;
            color: #fff !important;
            cursor: pointer !important;
            display: inline-flex !important;
            font: 700 13px/1 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            gap: 8px !important;
            padding: 11px 20px !important;
        }

        body.client-edit-active .client-list-add:hover {
            background: #099268 !important;
        }

        body.client-edit-active .client-list-add:disabled {
            cursor: not-allowed !important;
            opacity: .6 !important;
        }

        /* Marked for deletion, not yet written. Cancel brings it back. */
        body.client-edit-active [data-list-remove-pending] {
            opacity: .4 !important;
            outline: 2px dashed #d9480f !important;
            position: relative !important;
        }

        /* A region an editor took off the page. Gone means gone, including while
           editing — an empty dashed box in every hidden slot is noise. The admin
           bar's "Vùng đã ẩn" toggle brings them back into view when one needs
           restoring, which is the only reason the markup is emitted at all. */
        /* A cleared block is absent for visitors. Keep that same absence while
           an admin merely browses; edit mode's hidden-regions switch can reveal
           it for restoration. */
        .client-block-cleared,
        body.client-edit-active .client-block-cleared {
            display: none !important;
        }

        body.client-edit-active.client-blocks-show-hidden .client-block-cleared {
            display: inline-block !important;
            min-height: 22px !important;
            min-width: 64px !important;
            outline: 1px dashed rgba(217, 72, 15, .5) !important;
        }

        #client-block-toolbar {
            align-items: center !important;
            background: #fff !important;
            border: 1px solid #dbe4ef !important;
            border-radius: 10px !important;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .22) !important;
            color: #243447 !important;
            display: none;
            font: 600 13px/1 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            gap: 2px !important;
            max-width: calc(100vw - 24px) !important;
            padding: 6px !important;
            position: fixed !important;
            z-index: 2147483646 !important;
        }

        #client-block-toolbar.is-visible {
            display: flex !important;
        }

        #client-block-toolbar button {
            align-items: center !important;
            background: transparent !important;
            border: 0 !important;
            border-radius: 6px !important;
            color: #334155 !important;
            cursor: pointer !important;
            display: inline-flex !important;
            font: inherit !important;
            height: 32px !important;
            justify-content: center !important;
            margin: 0 !important;
            min-width: 32px !important;
            padding: 0 8px !important;
        }

        #client-block-toolbar button:hover,
        #client-block-toolbar button.is-active {
            background: #e8efff !important;
            color: #315fd4 !important;
        }

        #client-block-toolbar button:disabled {
            cursor: not-allowed !important;
            opacity: .38 !important;
        }

        #client-block-toolbar button:disabled:hover {
            background: transparent !important;
            color: #334155 !important;
        }

        #client-block-toolbar button:focus-visible {
            outline: 2px solid #5d87ff !important;
            outline-offset: 1px !important;
        }

        #client-block-toolbar .client-block-toolbar__heading {
            position: relative !important;
        }

        #client-block-toolbar .client-block-toolbar__heading-trigger {
            min-width: 58px !important;
        }

        #client-block-toolbar .client-block-toolbar__heading-menu {
            background: #fff !important;
            border: 1px solid #dbe4ef !important;
            border-radius: 8px !important;
            box-shadow: 0 12px 24px rgba(15, 23, 42, .2) !important;
            display: none;
            left: 0 !important;
            min-width: 138px !important;
            padding: 5px !important;
            position: absolute !important;
            top: calc(100% + 7px) !important;
        }

        #client-block-toolbar .client-block-toolbar__heading.is-open .client-block-toolbar__heading-menu {
            display: block !important;
        }

        #client-block-toolbar .client-block-toolbar__heading-menu button {
            justify-content: flex-start !important;
            padding: 0 9px !important;
            width: 100% !important;
        }

        #client-block-toolbar .client-block-toolbar__divider {
            background: #dbe4ef !important;
            height: 22px !important;
            margin: 0 4px !important;
            width: 1px !important;
        }

        @media (max-width: 520px) {
            #client-block-toolbar {
                gap: 0 !important;
            }

            #client-block-toolbar button {
                min-width: 30px !important;
                padding: 0 7px !important;
            }

            #client-block-toolbar [data-client-block-command="undo"],
            #client-block-toolbar [data-client-block-command="redo"] {
                display: none !important;
            }
        }

        #client-block-hint {
            align-items: center !important;
            background: #1f2937 !important;
            border-radius: 8px !important;
            color: #fff !important;
            display: none;
            font: 600 12px/1 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            gap: 6px !important;
            padding: 6px 10px !important;
            pointer-events: none !important;
            position: absolute !important;
            white-space: nowrap !important;
            z-index: 2147483644 !important;
        }

        #client-block-hint.is-visible {
            display: flex !important;
        }

        #client-block-append {
            align-items: center !important;
            background: #087f5b !important;
            border: 2px solid #fff !important;
            border-radius: 999px !important;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .35) !important;
            color: #fff !important;
            cursor: pointer !important;
            display: none;
            font: 700 14px/1 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            height: 22px !important;
            justify-content: center !important;
            padding: 0 !important;
            position: absolute !important;
            width: 22px !important;
            z-index: 2147483645 !important;
        }

        #client-block-append.is-visible,
        #client-block-remove.is-visible {
            display: inline-flex !important;
        }

        #client-block-append:hover,
        #client-block-remove:hover {
            transform: scale(1.15) !important;
        }

        #client-block-append:hover {
            background: #099268 !important;
        }

        #client-block-remove {
            align-items: center !important;
            background: #d9480f !important;
            border: 2px solid #fff !important;
            border-radius: 999px !important;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .35) !important;
            color: #fff !important;
            cursor: pointer !important;
            display: none;
            font: 700 15px/1 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            height: 22px !important;
            justify-content: center !important;
            padding: 0 !important;
            position: absolute !important;
            width: 22px !important;
            z-index: 2147483645 !important;
        }

        #client-block-remove:hover {
            background: #b23c0c !important;
        }

        #client-block-toast {
            background: #1f2937 !important;
            border-radius: 8px !important;
            bottom: 76px !important;
            color: #fff !important;
            display: none;
            font: 600 13px/1.2 'Quicksand', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif !important;
            left: 50% !important;
            padding: 9px 14px !important;
            position: fixed !important;
            transform: translateX(-50%) !important;
            z-index: 2147483645 !important;
        }

        #client-block-toast.is-visible {
            display: block !important;
        }

        #client-block-toast.is-error {
            background: #c92a2a !important;
        }
    </style>

    <div id="client-block-hint" aria-hidden="true"></div>
    {{-- One floating control for the whole page rather than a button per region:
         several hundred extra children would reflow flex and grid containers
         the moment edit mode came on. --}}
    <button type="button" id="client-block-append" title="Thêm ô nội dung ngay dưới" aria-label="Thêm ô nội dung ngay dưới">+</button>
    {{-- Only appears over a box an editor added. An authored region belongs to
         the template and can be hidden, never deleted. --}}
    <button type="button" id="client-block-remove" title="Xóa ô đã thêm" aria-label="Xóa ô đã thêm">×</button>
    <div id="client-block-toast" role="status" aria-live="polite"></div>
    <div id="client-block-toolbar" role="toolbar" aria-label="Định dạng nội dung" aria-hidden="true">
        <button type="button" data-client-block-command="bold" title="Đậm" aria-label="Đậm"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true"><path d="M7 4h6.2a4.3 4.3 0 0 1 1.2 8.4A4.6 4.6 0 0 1 13.6 21H7zm3 2.6v4.6h3.1a2.3 2.3 0 0 0 0-4.6zm0 7.2v4.6h3.5a2.3 2.3 0 0 0 0-4.6z"/></svg></button>
        <button type="button" data-client-block-command="italic" title="Nghiêng" aria-label="Nghiêng"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true"><path d="M10 4h8v2.3h-2.7l-3.1 11.4H15V20H7v-2.3h2.7l3.1-11.4H10z"/></svg></button>
        <button type="button" data-client-block-command="underline" title="Gạch chân" aria-label="Gạch chân"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true"><path d="M7 3h2.4v8.2a2.6 2.6 0 0 0 5.2 0V3H17v8.2a5 5 0 0 1-10 0zM6 20h12v1.8H6z"/></svg></button>
        <button type="button" data-client-block-command="strikeThrough" title="Gạch ngang" aria-label="Gạch ngang"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true"><path d="M3 11h18v1.9H3z"/><path d="M12.4 4c3 0 4.9 1.3 5.4 3.6l-2.3.5c-.3-1.2-1.4-1.9-3.1-1.9-1.8 0-2.9.7-2.9 1.9 0 .7.4 1.2 1.3 1.6H7.4A3.5 3.5 0 0 1 7 8c0-2.4 2.1-4 5.4-4zm-.2 16c-3.3 0-5.4-1.5-5.7-4.1l2.3-.4c.2 1.5 1.5 2.4 3.5 2.4 2 0 3.2-.8 3.2-2.1 0-.8-.4-1.4-1.4-1.8h3.3c.3.5.4 1.1.4 1.8 0 2.6-2.2 4.2-5.6 4.2z"/></svg></button>
        <span class="client-block-toolbar__divider" aria-hidden="true"></span>
        <div class="client-block-toolbar__heading" id="client-block-heading-control">
            <button type="button" class="client-block-toolbar__heading-trigger" id="client-block-heading-trigger" title="Cấp tiêu đề" aria-haspopup="menu" aria-expanded="false">
                <span id="client-block-heading-label">P</span><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="client-block-toolbar__heading-menu" id="client-block-heading-menu" role="menu" aria-label="Chọn cấp tiêu đề">
                <button type="button" data-client-block-format="default" role="menuitem">Mặc định (giao diện)</button>
                <button type="button" data-client-block-format="p" role="menuitem">Đoạn văn</button>
                <button type="button" data-client-block-format="h1" role="menuitem">Tiêu đề 1</button>
                <button type="button" data-client-block-format="h2" role="menuitem">Tiêu đề 2</button>
                <button type="button" data-client-block-format="h3" role="menuitem">Tiêu đề 3</button>
                <button type="button" data-client-block-format="h4" role="menuitem">Tiêu đề 4</button>
                <button type="button" data-client-block-format="h5" role="menuitem">Tiêu đề 5</button>
                <button type="button" data-client-block-format="h6" role="menuitem">Tiêu đề 6</button>
            </div>
        </div>
        <span class="client-block-toolbar__divider" aria-hidden="true"></span>
        <button type="button" data-client-block-command="insertUnorderedList" title="Danh sách chấm" aria-label="Danh sách chấm"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6h12M9 12h12M9 18h12"/><circle cx="4.5" cy="6" r="1.4" fill="currentColor" stroke="none"/><circle cx="4.5" cy="12" r="1.4" fill="currentColor" stroke="none"/><circle cx="4.5" cy="18" r="1.4" fill="currentColor" stroke="none"/></svg></button>
        <button type="button" data-client-block-command="insertOrderedList" title="Danh sách số" aria-label="Danh sách số"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 6h11M10 12h11M10 18h11"/><path d="M4 4h1v4M3 12h2.5L3 15.5h2.5M3 17.5h2.2v1.4H3.6v.9h1.6V21H3" stroke-width="1.5"/></svg></button>
        <span class="client-block-toolbar__divider" aria-hidden="true"></span>
        <button type="button" data-client-block-command="createLink" title="Chèn liên kết" aria-label="Chèn liên kết"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.5.5l3-3a5 5 0 0 0-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.5-.5l-3 3a5 5 0 0 0 7 7L12.2 19"/></svg></button>
        <button type="button" data-client-block-command="unlink" title="Bỏ liên kết" aria-label="Bỏ liên kết"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 17H7A5 5 0 0 1 7 7h2"/><path d="M15 7h2a5 5 0 0 1 4 8"/><path d="M8 12h3"/><path d="m2 2 20 20"/></svg></button>
        <button type="button" data-client-block-command="removeFormat" title="Xóa định dạng" aria-label="Xóa định dạng"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5.5 14.5 6-6a2 2 0 0 1 2.8 0l4.2 4.2a2 2 0 0 1 0 2.8l-4 4H8l-2.5-2.5a2 2 0 0 1 0-2.5z"/><path d="M21 20H10"/></svg></button>
        <span class="client-block-toolbar__divider" aria-hidden="true"></span>
        <button type="button" data-client-block-command="undo" title="Hoàn tác" aria-label="Hoàn tác"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 2v6h6"/><path d="M3.5 13a9 9 0 1 0 2.6-6.4L3 9"/></svg></button>
        <button type="button" data-client-block-command="redo" title="Làm lại" aria-label="Làm lại"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 2v6h-6"/><path d="M20.5 13a9 9 0 1 1-2.6-6.4L21 9"/></svg></button>
        <span class="client-block-toolbar__divider" aria-hidden="true"></span>
        {{-- Taking a region off the page and putting the theme's own text back
             are the two things an editor could not do before: an emptied region
             used to be indistinguishable from one that was never touched. --}}
        <button type="button" data-client-block-action="clear" title="Ẩn vùng này khỏi trang" aria-label="Ẩn vùng này khỏi trang"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9.9 5.2A10.4 10.4 0 0 1 12 5c6.4 0 10 7 10 7a18.5 18.5 0 0 1-3.2 4.2M6.6 6.6A18.4 18.4 0 0 0 2 12s3.6 7 10 7a10 10 0 0 0 4.3-.9"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/><path d="m2 2 20 20"/></svg></button>
        <button type="button" data-client-block-action="restore" title="Khôi phục nội dung gốc của giao diện" aria-label="Khôi phục nội dung gốc của giao diện"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 2v6h6"/><path d="M3.5 13a9 9 0 1 0 2.6-6.4L3 9"/><path d="M12 8v4l3 2"/></svg></button>
        {{-- Only for a box an editor added: an authored region belongs to the
             template and can be hidden, never deleted. --}}
        <button type="button" data-client-block-action="delete" title="Xóa hẳn ô đã thêm" aria-label="Xóa hẳn ô đã thêm"><svg class="client-ico" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h18M8 6V4h8v2M6 6l1 14h10l1-14M10 11v6M14 11v6"/></svg></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const api = window.clientBlocks;
            const toolbar = document.getElementById('client-block-toolbar');
            const toast = document.getElementById('client-block-toast');
            const appendButton = document.getElementById('client-block-append');
            const removeButton = document.getElementById('client-block-remove');
            const headingControl = document.getElementById('client-block-heading-control');
            const headingTrigger = document.getElementById('client-block-heading-trigger');
            const headingLabel = document.getElementById('client-block-heading-label');
            const headingMenu = document.getElementById('client-block-heading-menu');

            // The bar owns edit mode. Without it there is nothing to attach to,
            // and failing loudly here would take the media picker down too.
            if (!api || !toolbar) return;

            let active = null;
            let hovered = null;
            let toastTimer = null;
            let savedSelection = null;

            // --- feedback -----------------------------------------------------
            function showToast(message, isError) {
                toast.textContent = message;
                toast.classList.toggle('is-error', Boolean(isError));
                toast.classList.add('is-visible');
                if (toastTimer) window.clearTimeout(toastTimer);
                toastTimer = window.setTimeout(function () {
                    toast.classList.remove('is-visible');
                }, isError ? 4000 : 1600);
            }

            // --- placement ----------------------------------------------------
            /**
             * Park a floating control against a region.
             *
             * The controls do not agree on a coordinate space: the toolbar is
             * `fixed` and therefore already viewport-relative, while the hint and
             * the add/remove buttons are `absolute` and need page coordinates. One
             * helper added the scroll offset to all of them, which put the toolbar
             * one full scroll distance below where it belonged — invisible on any
             * page long enough to scroll, and perfectly fine on a short one.
             */
            function place(element, node, offset) {
                if (!element) return;

                const rect = element.getBoundingClientRect();
                const isFixed = window.getComputedStyle(node).position === 'fixed';
                const offsetY = isFixed ? 0 : window.scrollY;
                const offsetX = isFixed ? 0 : window.scrollX;

                node.style.top = Math.max(8, rect.top + offsetY - offset) + 'px';
                node.style.left = Math.max(8, rect.left + offsetX) + 'px';
            }

            function positionToolbar() {
                if (!active || !toolbar.classList.contains('is-visible')) return;
                place(active, toolbar, toolbar.offsetHeight + 10);
            }

            function showToolbar(element) {
                active = element;
                toolbar.classList.add('is-visible');
                toolbar.setAttribute('aria-hidden', 'false');
                syncToolbar();
                positionToolbar();
            }

            function hideToolbar() {
                active = null;
                toolbar.classList.remove('is-visible');
                toolbar.setAttribute('aria-hidden', 'true');
                closeHeadingMenu();
            }

            // --- selection ----------------------------------------------------
            // execCommand works on the live selection, and clicking a toolbar
            // button moves focus out of the region. The range is captured before
            // that happens and put back before the command runs.
            function rememberSelection() {
                const selection = window.getSelection();
                if (!selection || selection.rangeCount === 0) return;
                const range = selection.getRangeAt(0);
                if (active && active.contains(range.commonAncestorContainer)) {
                    savedSelection = range.cloneRange();
                }
            }

            function restoreSelection() {
                if (!savedSelection || !active) return false;
                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(savedSelection);

                return true;
            }

            // --- state --------------------------------------------------------
            function currentFormat() {
                if (!active) return 'default';
                const format = active.getAttribute('data-block-format');

                return format || 'default';
            }

            function syncToolbar() {
                if (!active) return;

                const isImage = active.getAttribute('data-block-type') === 'image';
                toolbar.querySelectorAll('[data-client-block-command]').forEach(function (button) {
                    // Formatting means nothing on an image region.
                    button.disabled = isImage;
                    const command = button.dataset.clientBlockCommand;
                    let on = false;
                    try {
                        on = !isImage && document.queryCommandState(command);
                    } catch (error) {
                        on = false;
                    }
                    button.classList.toggle('is-active', on);
                });

                if (headingControl) headingControl.hidden = isImage;

                const format = currentFormat();
                if (headingLabel) {
                    headingLabel.textContent = format === 'default' ? 'P' : format.toUpperCase();
                }

                // Deleting a box only applies to one an editor added; an authored
                // region belongs to the template and can be hidden, never removed.
                const deletable = Boolean(active.getAttribute('data-list-item'));
                const deleteButton = toolbar.querySelector('[data-client-block-action="delete"]');
                if (deleteButton) deleteButton.hidden = !deletable;
            }

            function closeHeadingMenu() {
                if (!headingControl) return;
                headingControl.classList.remove('is-open');
                if (headingTrigger) headingTrigger.setAttribute('aria-expanded', 'false');
            }

            // --- commands -----------------------------------------------------
            function runCommand(command) {
                if (!active) return;
                restoreSelection();

                if (command === 'createLink') {
                    const url = window.prompt('Nhập liên kết (http/https hoặc đường dẫn bắt đầu bằng /):', 'https://');
                    if (!url) return;
                    // Same rule the menu builder enforces server-side: never let an
                    // editor plant javascript: or data: behind a link.
                    if (!/^(https?:\/\/|\/)/i.test(url.trim())) {
                        showToast('Liên kết phải bắt đầu bằng http://, https:// hoặc /.', true);
                        return;
                    }
                    document.execCommand('createLink', false, url.trim());
                } else {
                    try {
                        document.execCommand(command, false, null);
                    } catch (error) {
                        showToast('Trình duyệt không hỗ trợ thao tác này.', true);
                        return;
                    }
                }

                // Formatting turns a plain region into markup, so it has to be
                // saved as HTML rather than escaped text.
                active.setAttribute('data-block-type', 'html');
                api.markDirty(active);
                rememberSelection();
                syncToolbar();
            }

            /**
             * Swap the region's wrapper tag.
             *
             * The element is replaced rather than restyled: the saved format has to
             * survive a reload, and the server stores a tag name, not a class.
             */
            function applyFormat(format) {
                if (!active) return;

                const baseTag = active.getAttribute('data-block-base-tag') || 'div';
                const nextTag = format === 'default' ? baseTag : format;
                const replacement = document.createElement(nextTag);

                Array.from(active.attributes).forEach(function (attribute) {
                    replacement.setAttribute(attribute.name, attribute.value);
                });
                replacement.innerHTML = active.innerHTML;

                if (format === 'default') {
                    replacement.removeAttribute('data-block-format');
                } else {
                    replacement.setAttribute('data-block-format', format);
                }
                replacement.setAttribute('data-block-type', 'html');

                ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'].forEach(function (level) {
                    replacement.classList.remove('client-content-heading-' + level);
                });
                if (format !== 'default' && format !== 'p') {
                    replacement.classList.add('client-content-heading-' + format);
                }

                active.replaceWith(replacement);
                replacement.setAttribute('contenteditable', 'true');
                replacement.focus();

                // Hand the pending entry over to the new node before marking it
                // dirty, or the bar keeps the detached original queued for save.
                if (api.replaceRegion) api.replaceRegion(active, replacement);
                active = replacement;
                api.markDirty(replacement);
                closeHeadingMenu();
                syncToolbar();
                positionToolbar();
            }

            // --- structural actions -------------------------------------------
            async function request(url, method, payload) {
                const response = await fetch(url, {
                    method: method,
                    credentials: 'same-origin',
                    headers: {
                        Accept: 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': api.csrf,
                    },
                    body: JSON.stringify(payload),
                });
                const data = await response.json().catch(function () { return {}; });

                if (!response.ok || !data.success) {
                    const errors = data.errors ? Object.values(data.errors).flat().join(' ') : '';
                    throw new Error(errors || data.message || 'Không thể thực hiện thao tác.');
                }

                return data;
            }

            async function runAction(action) {
                if (!active) return;
                const key = active.getAttribute('data-block-key');

                if (action === 'clear') {
                    // Emptying is an ordinary content change: an empty value is what
                    // "hidden" means, so it rides the normal Lưu flow.
                    active.innerHTML = '';
                    api.markDirty(active);
                    showToast('Vùng sẽ bị ẩn sau khi bấm Lưu.');
                    return;
                }

                if (action === 'restore') {
                    try {
                        await request(api.urls.restore, 'DELETE', { key: key, content_locale: api.locale });
                        /*
                         * Reload rather than patch the node. Restoring means "show
                         * what the template says", and that text exists only in the
                         * Blade file — neither this script nor the server response
                         * holds it, so re-rendering the page is the only way to put
                         * it back on screen. Without this the region stayed blank
                         * and the action looked like it had failed.
                         */
                        showToast('Đã khôi phục nội dung gốc.');
                        window.location.reload();
                    } catch (error) {
                        showToast(error.message, true);
                    }
                    return;
                }

                if (action === 'delete') {
                    const listKey = active.getAttribute('data-list-key');
                    const itemId = active.getAttribute('data-list-item');
                    if (!listKey || !itemId) return;
                    if (!window.confirm('Xóa hẳn ô nội dung này?')) return;

                    try {
                        await request(api.urls.listItems, 'DELETE', { key: listKey, item: itemId });
                        const removed = active;
                        hideToolbar();
                        removed.remove();
                        showToast('Đã xóa ô nội dung.');
                    } catch (error) {
                        showToast(error.message, true);
                    }
                }
            }

            async function appendBox(element) {
                const listKey = element.getAttribute('data-append-list');
                if (!listKey) return;

                try {
                    await request(api.urls.listItems, 'POST', { key: listKey });
                    // Same reason: the new box's markup comes from the Blade that
                    // owns the region, so only a re-render can produce it.
                    showToast('Đã thêm ô.');
                    window.location.reload();
                } catch (error) {
                    showToast(error.message, true);
                }
            }

            // --- hover controls -----------------------------------------------
            function showHoverControls(element) {
                hovered = element;
                const appendable = Boolean(element.getAttribute('data-append-list'));
                const removable = Boolean(element.getAttribute('data-list-item'));

                appendButton.classList.toggle('is-visible', appendable);
                removeButton.classList.toggle('is-visible', removable);
                if (appendable) place(element, appendButton, -8);
                if (removable) place(element, removeButton, 26);
            }

            function hideHoverControls() {
                hovered = null;
                appendButton.classList.remove('is-visible');
                removeButton.classList.remove('is-visible');
            }

            // --- wiring --------------------------------------------------------
            api.on('open', function (element) {
                if (element.getAttribute('data-block-type') === 'image') {
                    hideToolbar();
                    return;
                }
                showToolbar(element);
            });
            api.on('close', function (element) {
                if (active === element) hideToolbar();
            });
            api.on('mode', function (on) {
                if (!on) {
                    hideToolbar();
                    hideHoverControls();
                }
            });

            // mousedown, not click: the selection still exists at this point.
            toolbar.addEventListener('mousedown', function (event) {
                event.preventDefault();
            });

            toolbar.addEventListener('click', function (event) {
                const command = event.target.closest('[data-client-block-command]');
                if (command) {
                    event.preventDefault();
                    runCommand(command.dataset.clientBlockCommand);
                    return;
                }

                const action = event.target.closest('[data-client-block-action]');
                if (action) {
                    event.preventDefault();
                    runAction(action.dataset.clientBlockAction);
                    return;
                }

                const format = event.target.closest('[data-client-block-format]');
                if (format) {
                    event.preventDefault();
                    applyFormat(format.dataset.clientBlockFormat);
                }
            });

            if (headingTrigger && headingControl) {
                headingTrigger.addEventListener('click', function (event) {
                    event.preventDefault();
                    // The stylesheet reveals the menu via
                    // `.client-block-toolbar__heading.is-open .…__heading-menu`,
                    // so the class belongs on the wrapper. Putting it on the menu
                    // itself matched no rule and the menu never opened.
                    const open = headingControl.classList.toggle('is-open');
                    headingTrigger.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            }

            document.addEventListener('selectionchange', function () {
                if (!active) return;
                rememberSelection();
                syncToolbar();
            });

            document.addEventListener('mouseover', function (event) {
                if (!api.isEditing()) return;
                const region = event.target.closest ? event.target.closest('[data-block-key]') : null;
                region ? showHoverControls(region) : hideHoverControls();
            });

            appendButton.addEventListener('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (hovered) appendBox(hovered);
            });

            removeButton.addEventListener('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (!hovered) return;
                active = hovered;
                runAction('delete');
            });

            document.addEventListener('click', function (event) {
                if (headingMenu && !event.target.closest('#client-block-heading-control')) {
                    closeHeadingMenu();
                }
            });

            window.addEventListener('scroll', positionToolbar, { passive: true });
            window.addEventListener('resize', positionToolbar);
        });
    </script>
@endif
  <script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": [
      "Organization",
      "LocalBusiness"
    ],
    "@id": "https://huongsonco.com.vn/#organization",
    "name": "Hương Sơn",
    "legalName": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN",
    "alternateName": "Huong Son Co., Ltd",
    "url": "https://huongsonco.com.vn/",
    "logo": "https://huongsonco.com.vn/assets/images/brand/HUONG_SON_logo.svg",
    "image": "https://huongsonco.com.vn/assets/images/products/duplo-dp-x550.jpg",
    "slogan": "THIẾT BỊ CHO HIỆN TẠI, GIẢI PHÁP CHO TƯƠNG LAI",
    "description": "CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN thành lập 01/06/2008, cung cấp máy photocopy, máy in nhân bản siêu tốc, máy scan, máy phối trang, máy in laser, thiết bị văn phòng, vật tư – linh kiện, dịch vụ cho thuê thiết bị, bảo trì – sửa chữa và giải pháp số hóa tài liệu cho Cơ quan Nhà nước, Sở GD&ĐT, trường học, ngân hàng và doanh nghiệp.",
    "taxID": "0102759269",
    "vatID": "0102759269",
    "foundingDate": "2008-06-01",
    "founder": {
      "@type": "Person",
      "name": "Nguyễn Công Thuận"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội",
      "addressLocality": "Hà Nội",
      "addressCountry": "VN"
    },
    "telephone": [
      "024 3972 9484",
      "0913 237 302",
      "091 113 8583"
    ],
    "email": "info@huongsonco.com.vn",
    "openingHours": "Mo-Sa 08:00-17:30",
    "areaServed": {
      "@type": "Country",
      "name": "Việt Nam"
    },
    "sameAs": [
      "https://www.facebook.com/huonsonco/",
      "https://zalo.me/0913237302",
      "https://www.messenger.com/t/thuan.nguyencong.330"
    ],
    "knowsAbout": [
      "máy photocopy",
      "máy in nhân bản siêu tốc",
      "in sao đề thi",
      "máy scan tốc độ cao",
      "số hóa tài liệu",
      "OCR",
      "cho thuê máy photocopy",
      "managed print service",
      "vật tư in ấn",
      "máy phối trang",
      "bảo trì máy photocopy"
    ],
    "brand": [
      {
        "@type": "Brand",
        "name": "DUPLO"
      },
      {
        "@type": "Brand",
        "name": "TOSHIBA"
      },
      {
        "@type": "Brand",
        "name": "RICOH"
      },
      {
        "@type": "Brand",
        "name": "KONICA MINOLTA"
      },
      {
        "@type": "Brand",
        "name": "HP"
      },
      {
        "@type": "Brand",
        "name": "FANSIPAN"
      }
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Trang chủ",
        "item": "https://huongsonco.com.vn/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Công cụ",
        "item": "https://huongsonco.com.vn/cong-cu/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Tính TCO",
        "item": "https://huongsonco.com.vn/cong-cu/tinh-tco/"
      }
    ]
  }
]
  </script>
</head>

<body class="bg-white text-[#5b5d62] antialiased selection:bg-[#1A9900] selection:text-white">

  <!-- TOP BAR -->
  <div id="top-bar" class="bg-[#181924] border-b border-gray-800 text-gray-300 text-xs hidden lg:block">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-12 flex items-center justify-between">
      <div class="flex items-center space-x-6">
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-solid fa-location-dot text-[#1A9900]"></i>
          <span>Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-regular fa-clock text-[#1A9900]"></i>
          <span>T2 – T6: sáng 8h00–11h30, chiều 13h30–17h00</span>
        </div>
        <div class="flex items-center space-x-2 hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900]"></i>
          <a href="tel:02439729484" data-ga="click_hotline">024 3972 9484</a>
        </div>
      </div>
      <div class="flex items-center space-x-6">
        <a href="/ve-huong-son/tai-nguyen/" class="hover:text-[#1A9900] transition">
          <i class="fa-solid fa-download text-[#1A9900] mr-1.5"></i>Hồ sơ năng lực
        </a>
        <div class="flex items-center space-x-3"><a href="https://www.facebook.com/huonsonco/" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Facebook"><i class="fa-brands fa-facebook-f text-xs"></i></a><a href="https://zalo.me/0913237302" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Zalo"><i class="fa-solid fa-comment-dots text-xs"></i></a><a href="https://www.messenger.com/t/thuan.nguyencong.330" class="w-7 h-7 bg-gray-800 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" title="Messenger"><i class="fa-brands fa-facebook-messenger text-xs"></i></a></div>
      </div>
    </div>
  </div>

  <!-- MAIN HEADER -->
  <header class="site-header bg-white w-full z-40 transition-all duration-300 border-b border-gray-100 shadow-sm sticky top-0">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

      <a href="/" class="flex items-center" aria-label="Hương Sơn – Trang chủ"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-11 sm:h-12 w-auto object-contain" /></a>

      <nav class="hidden xl:flex items-center space-x-6" aria-label="Điều hướng chính">
        <div class="relative has-dropdown group py-2">
          <a href="/san-pham/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>SẢN PHẨM</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy in nhân bản tốc độ cao</a><a href="/san-pham/may-scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy Scan – Số hóa</a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy phối trang – Hoàn thiện sau in</a><a href="/san-pham/may-in-laser/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">FANSIPAN – Vật tư tương thích</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/giai-phap/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>GIẢI PHÁP</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/giai-phap/giao-duc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Quản lý – Vận hành</a>
          </div>
        </div>
        <div class="relative has-dropdown group py-2">
          <a href="/dich-vu/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>DỊCH VỤ</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/dich-vu/bao-tri-sua-chua/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Thu mua máy cũ – Đổi máy mới</a>
          </div>
        </div>
        <a href="/du-an/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm transition py-2">DỰ ÁN</a>
        <div class="relative has-dropdown group py-2">
          <a href="/ve-huong-son/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm flex items-center space-x-1 group-hover:text-[#1A9900] transition">
            <span>VỀ HƯƠNG SƠN</span>
            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
          </a>
          <div class="dropdown-menu absolute top-full left-0 w-80 bg-white border border-gray-100 shadow-xl py-2 z-50 rounded-b-md"><a href="/ve-huong-son/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 hover:text-[#1A9900] transition font-medium">Tin tức</a>
          </div>
        </div>
        <a href="/nhan-tu-van/" class="nav-link text-gray-800 hover:text-[#1A9900] font-semibold text-sm transition py-2">NHẬN TƯ VẤN</a>
      </nav>

      <div class="hidden xl:flex items-center space-x-5">
        <button class="search-toggle text-gray-700 hover:text-[#1A9900] transition text-base" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <a href="/nhan-tu-van/bao-gia/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-6 py-3 transition">
          YÊU CẦU BÁO GIÁ
        </a>
      </div>

      <div class="flex xl:hidden items-center space-x-3">
        <button class="search-toggle w-9 h-9 bg-gray-100 text-gray-700 flex items-center justify-center hover:bg-[#1A9900] hover:text-white transition" aria-label="Tìm kiếm">
          <i class="fa-solid fa-magnifying-glass text-xs"></i>
        </button>
        <button id="mobile-menu-toggle" class="text-gray-800 hover:text-[#1A9900] p-2 focus:outline-none" aria-label="Mở menu">
          <i class="fa-solid fa-bars-staggered text-2xl"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- PAGE HERO -->
  <section class="relative bg-[#181924] min-h-[340px] sm:min-h-[400px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="/assets/images/xxx_about-hero_xxx.jpg" alt="Công cụ tính TCO – Tổng chi phí sở hữu" class="w-full h-full object-cover object-center" loading="eager" />
      <div class="absolute inset-0 bg-[#181924]/88"></div>
    </div>
    <div class="relative z-10 max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full text-center">
      <span class="font-handwriting text-3xl text-[#5eb74c] font-bold block mb-2">Công cụ ước tính</span>
      <h1 class="text-3xl sm:text-[42px] font-bold text-white mb-4 leading-tight">Công cụ tính TCO – Tổng chi phí sở hữu</h1>
      <p class="max-w-3xl mx-auto text-gray-300 text-[15px] leading-relaxed">So sánh tổng chi phí sở hữu giữa phương án mua và thuê máy trong cùng một khoảng thời gian sử dụng.</p>
      <nav class="mt-7 text-[12.5px] text-gray-400 flex items-center justify-center flex-wrap" aria-label="Breadcrumb">
        <a href="/" class="hover:text-white transition">Trang chủ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <a href="/cong-cu/" class="hover:text-white transition">Công cụ</a> <i class="fa-solid fa-angle-right text-[9px] mx-2 text-gray-500"></i> <span class="text-[#1A9900]" aria-current="page">Tính TCO</span>
      </nav>
    </div>
  </section>

  <section class="py-16 bg-white ">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án mua</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Giá mua thiết bị (đồng)</label>
            <input type="number" id="tco-buy-price" value="56500000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Vật tư + bảo trì mỗi tháng (đồng)</label>
            <input type="number" id="tco-buy-monthly" value="600000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
        <div class="bg-white border border-gray-200 p-7 space-y-5">
          <h3 class="font-bold text-[#181923] uppercase text-sm tracking-wider mb-2">Phương án thuê</h3>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Phí thuê trọn gói mỗi tháng (đồng)</label>
            <input type="number" id="tco-rent-monthly" value="1800000" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
          <div><label class="block text-[13px] font-semibold text-[#181923] mb-2">Thời gian sử dụng để so sánh (tháng)</label>
            <input type="number" id="tco-months" value="36" class="w-full border border-gray-300 px-4 py-3 text-[14.5px] focus:outline-none focus:border-[#1A9900]" /></div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án mua</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-buy-total">—</p>
        </div>
        <div class="p-7" style="background-color: rgb(247,243,238);">
          <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#1A9900] mb-2">Tổng chi phí phương án thuê</p>
          <p class="text-3xl font-bold text-[#181923]" id="tco-rent-total">—</p>
        </div>
      </div>
      <p class="text-[13px] text-gray-500 mt-6 max-w-3xl">
        Công cụ ước tính tham khảo dựa trên số liệu Quý khách nhập, không thay thế cho Cost Sheet nội bộ mà Hương Sơn
        lập trước khi báo giá chính thức. Vui lòng <a class="text-[#1A9900] font-medium hover:underline" href="/nhan-tu-van/bao-gia/">yêu cầu báo giá</a>
        để có con số chính xác theo cấu hình cụ thể.
      </p>
      <script>
        (function () {
          const bp = document.getElementById('tco-buy-price'), bm = document.getElementById('tco-buy-monthly'),
                rm = document.getElementById('tco-rent-monthly'), mo = document.getElementById('tco-months'),
                bt = document.getElementById('tco-buy-total'), rt = document.getElementById('tco-rent-total');
          const fmt = (n) => n.toLocaleString('vi-VN') + ' đ';
          function calc() {
            const months = parseFloat(mo.value) || 0;
            const buyTotal = (parseFloat(bp.value) || 0) + (parseFloat(bm.value) || 0) * months;
            const rentTotal = (parseFloat(rm.value) || 0) * months;
            bt.textContent = fmt(Math.round(buyTotal));
            rt.textContent = fmt(Math.round(rentTotal));
          }
          [bp, bm, rm, mo].forEach((el) => el.addEventListener('input', calc));
          calc();
        })();
      </script>
    
    </div>
  </section>

  <section class="py-14 bg-[#181924] bg-cover bg-center" style="background-image: linear-gradient(rgba(24,25,36,0.92), rgba(24,25,36,0.96)), url('/assets/images/xxx_home-bg_xxx.jpg');">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="max-w-2xl text-center lg:text-left">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">Muốn Hương Sơn tính TCO chính xác cho đơn vị?</h2>
        <p class="text-gray-300 text-[15px] leading-relaxed">Gửi cấu hình và sản lượng thực tế — Hương Sơn lập Cost Sheet chi tiết trước khi báo giá.</p>
      </div>
      <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
        <a href="/nhan-tu-van/bao-gia/" data-ga="cta_click" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Yêu cầu báo giá</a>
        
        <a href="tel:02439729484" data-ga="click_hotline" class="text-white font-bold text-sm hover:text-[#1A9900] transition">
          <i class="fa-solid fa-phone text-[#1A9900] mr-2"></i>024 3972 9484
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#f8fafc] text-gray-600 pt-20 pb-10 border-t border-gray-200 relative">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-14 border-b border-gray-200">

        <div class="lg:col-span-4 space-y-5">
          <a href="/" class="inline-block"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-12 sm:h-14 w-auto object-contain" /></a>
          <p class="text-[15px] text-gray-600 leading-relaxed max-w-md">
            CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN — Giải pháp thiết bị, in ấn, số hóa và dịch vụ cho Cơ quan Nhà nước – Giáo dục – Ngân hàng – Doanh nghiệp.
          </p>
          <p class="text-[13.5px] text-gray-500">Mã số thuế: 0102759269 · Thành lập 01/06/2008</p>
          <div class="flex flex-wrap gap-2 pt-1">
            <span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">DUPLO</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">TOSHIBA</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">RICOH</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">KONICA MINOLTA</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">HP</span><span class="text-[11px] font-bold tracking-wider text-gray-700 border border-gray-300 bg-white px-2.5 py-1">FANSIPAN</span>
          </div>
        </div>

        <div class="lg:col-span-2">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Sản phẩm</h4>
          <ul class="space-y-3 text-[14.5px] font-normal"><li><a href="/san-pham/photocopy-may-da-chuc-nang/" class="hover:text-[#1A9900] transition block text-gray-600">Photocopy – Máy đa chức năng</a></li><li><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="hover:text-[#1A9900] transition block text-gray-600">Máy in nhân bản tốc độ cao</a></li><li><a href="/san-pham/may-scan-so-hoa/" class="hover:text-[#1A9900] transition block text-gray-600">Máy Scan – Số hóa</a></li><li><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="hover:text-[#1A9900] transition block text-gray-600">Máy phối trang – Hoàn thiện sau in</a></li><li><a href="/san-pham/may-in-laser/" class="hover:text-[#1A9900] transition block text-gray-600">Máy in Laser – Thiết bị in</a></li><li><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="hover:text-[#1A9900] transition block text-gray-600">Thiết bị phòng học – Giáo dục</a></li></ul>
        </div>

        <div class="lg:col-span-3">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Giải pháp</h4>
          <ul class="space-y-3 text-[14.5px] font-normal"><li><a href="/giai-phap/giao-duc/" class="hover:text-[#1A9900] transition block text-gray-600">Giáo dục</a></li><li><a href="/giai-phap/co-quan-nha-nuoc/" class="hover:text-[#1A9900] transition block text-gray-600">Cơ quan Nhà nước</a></li><li><a href="/giai-phap/ngan-hang-tai-chinh/" class="hover:text-[#1A9900] transition block text-gray-600">Ngân hàng – Tài chính</a></li><li><a href="/giai-phap/tap-doan-tong-cong-ty/" class="hover:text-[#1A9900] transition block text-gray-600">Tập đoàn – Tổng công ty</a></li><li><a href="/giai-phap/in-de-thi-tai-lieu/" class="hover:text-[#1A9900] transition block text-gray-600">In đề thi – Tài liệu</a></li><li><a href="/giai-phap/scan-so-hoa/" class="hover:text-[#1A9900] transition block text-gray-600">Scan – Số hóa</a></li></ul>
        </div>
        <div class="lg:col-span-3">
          <h4 class="text-gray-900 text-[16px] font-bold mb-5 uppercase tracking-wider">Thông tin liên hệ</h4>
          <ul class="space-y-3.5 text-[14.5px] font-normal text-gray-600">
            <li class="flex items-start space-x-3">
              <i class="fa-solid fa-location-dot text-[#1A9900] mt-1 text-sm flex-shrink-0"></i>
              <span class="leading-relaxed">Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, TP. Hà Nội</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:02439729484" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">024 3972 9484</a>
              <span class="text-gray-500 text-[13px]">(Văn phòng)</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0913237302" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">0913 237 302</a>
              <span class="text-gray-500 text-[13px]">(Kinh doanh)</span>
            </li><li class="flex items-center space-x-3">
              <i class="fa-solid fa-phone text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="tel:0911138583" data-ga="click_hotline" class="hover:text-[#1A9900] transition font-semibold text-gray-800">091 113 8583</a>
              <span class="text-gray-500 text-[13px]">(Kỹ thuật)</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-regular fa-clock text-[#1A9900] text-sm flex-shrink-0"></i>
              <span>T2 – T6: sáng 8h00–11h30, chiều 13h30–17h00</span>
            </li>
            <li class="flex items-center space-x-3">
              <i class="fa-solid fa-envelope text-[#1A9900] text-sm flex-shrink-0"></i>
              <a href="mailto:info@huongsonco.com.vn" class="hover:text-[#1A9900] transition">info@huongsonco.com.vn</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[14px] text-gray-500">
        <p>© Copyright 2026 CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN · Thiết kế web bởi <a href="https://www.matbao.ws/" target="_blank" rel="noopener" class="text-[#1A9900] font-medium hover:underline">Mắt Bão WS</a></p>
        <div class="flex items-center space-x-6 mt-4 sm:mt-0">
          <a href="/dich-vu/" class="hover:text-[#1A9900] transition">Dịch vụ</a>
          <span class="text-gray-400">•</span>
          <a href="/nhan-tu-van/" class="hover:text-[#1A9900] transition">Nhận tư vấn</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- MOBILE DRAWER -->
  <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <div id="mobile-drawer" class="fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-white z-50 shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
      <a href="/"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-10 w-auto object-contain" /></a>
      <button id="mobile-menu-close" class="text-gray-500 hover:text-gray-900 p-2" aria-label="Đóng menu">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    <div class="p-6 flex-1 overflow-y-auto space-y-3">
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>SẢN PHẨM</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/san-pham/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block py-1 hover:text-[#1A9900]">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block py-1 hover:text-[#1A9900]">Máy in nhân bản tốc độ cao</a><a href="/san-pham/may-scan-so-hoa/" class="block py-1 hover:text-[#1A9900]">Máy Scan – Số hóa</a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="block py-1 hover:text-[#1A9900]">Máy phối trang – Hoàn thiện sau in</a><a href="/san-pham/may-in-laser/" class="block py-1 hover:text-[#1A9900]">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block py-1 hover:text-[#1A9900]">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block py-1 hover:text-[#1A9900]">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block py-1 hover:text-[#1A9900]">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block py-1 hover:text-[#1A9900]">FANSIPAN – Vật tư tương thích</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>GIẢI PHÁP</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/giai-phap/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/giai-phap/giao-duc/" class="block py-1 hover:text-[#1A9900]">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block py-1 hover:text-[#1A9900]">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block py-1 hover:text-[#1A9900]">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block py-1 hover:text-[#1A9900]">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block py-1 hover:text-[#1A9900]">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block py-1 hover:text-[#1A9900]">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block py-1 hover:text-[#1A9900]">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block py-1 hover:text-[#1A9900]">Quản lý – Vận hành</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>DỊCH VỤ</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/dich-vu/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/dich-vu/bao-tri-sua-chua/" class="block py-1 hover:text-[#1A9900]">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block py-1 hover:text-[#1A9900]">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block py-1 hover:text-[#1A9900]">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block py-1 hover:text-[#1A9900]">Thu mua máy cũ – Đổi máy mới</a>
        </div>
      </div>
      <a href="/du-an/" class="block text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">DỰ ÁN</a>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">
          <span>VỀ HƯƠNG SƠN</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-600">
          <a href="/ve-huong-son/" class="block py-1 text-[#1A9900] font-semibold">Tổng quan</a><a href="/ve-huong-son/" class="block py-1 hover:text-[#1A9900]">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block py-1 hover:text-[#1A9900]">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block py-1 hover:text-[#1A9900]">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block py-1 hover:text-[#1A9900]">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block py-1 hover:text-[#1A9900]">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block py-1 hover:text-[#1A9900]">Tin tức</a>
        </div>
      </div>
      <a href="/nhan-tu-van/" class="block text-gray-800 font-semibold py-2 border-b border-gray-100 hover:text-[#1A9900]">NHẬN TƯ VẤN</a>
    </div>
    <div class="p-6 border-t border-gray-100 bg-gray-50">
      <a href="tel:02439729484" data-ga="click_hotline" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 w-full text-center block">
        <i class="fa-solid fa-phone mr-2"></i> 024 3972 9484
      </a>
    </div>
  </div>

  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-white border border-gray-200 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative rounded">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-gray-900 mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-50 border border-gray-300 text-gray-900 px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[#1A9900]" />
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1A9900]" aria-label="Tìm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- FLOATING BUTTONS -->
  <a href="tel:02439729484" data-ga="click_hotline" class="fixed bottom-24 right-6 z-40 w-12 h-12 bg-[#1A9900] text-white flex items-center justify-center shadow-xl animate-pulse-phone" title="Gọi ngay">
    <i class="fa-solid fa-phone text-lg"></i>
  </a>
  <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" data-ga="click_zalo" class="fixed bottom-8 right-6 z-40 w-12 h-12 bg-[#0068FF] text-white flex items-center justify-center shadow-xl" title="Chat Zalo">
    <span class="font-bold text-xs">Zalo</span>
  </a>
  <button id="back-to-top" class="fixed bottom-8 right-6 z-40 w-10 h-10 bg-gray-900 text-white flex items-center justify-center shadow-xl hover:bg-[#1A9900] transition-all duration-300 opacity-0 invisible translate-y-4" aria-label="Lên đầu trang">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <script src="/assets/js/main.js?v=2.0.1"></script>
</body>
</html>
@endsection
