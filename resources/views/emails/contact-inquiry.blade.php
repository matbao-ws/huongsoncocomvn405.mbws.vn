@extends('emails.layout')

@section('title', 'Yêu cầu báo giá / tư vấn mới')
@section('header-subtitle', 'Thông báo từ website Hương Sơn')

@section('content')
    <div style="background-color: #e8f5e9; border: 1px solid #c8e6c9; border-radius: 8px; padding: 14px 18px; margin-bottom: 24px; color: #1b5e20; font-size: 14px;">
        <strong>Thông báo:</strong> Khách hàng vừa gửi yêu cầu liên hệ / báo giá từ website <a href="https://huongsonco.com.vn/" style="color: #1b5e20; font-weight: bold; text-decoration: underline;">huongsonco.com.vn</a>.
    </div>

    <div class="section-title">Thông tin khách hàng</div>
    <table class="info-table">
        <tr>
            <td class="label">Họ và tên:</td>
            <td class="value">{{ $inquiry['name'] ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td class="label">Số điện thoại:</td>
            <td class="value">
                @if(!empty($inquiry['phone']))
                    <a href="tel:{{ preg_replace('/\s+/', '', $inquiry['phone']) }}" style="color: #1f7c45; font-weight: bold; text-decoration: none;">{{ $inquiry['phone'] }}</a>
                @else
                    N/A
                @endif
            </td>
        </tr>
        <tr>
            <td class="label">Email:</td>
            <td class="value">
                @if(!empty($inquiry['email']))
                    <a href="mailto:{{ $inquiry['email'] }}" style="color: #1f7c45; text-decoration: none;">{{ $inquiry['email'] }}</a>
                @else
                    <span style="color: #94a3b8; font-style: italic;">Chưa cung cấp</span>
                @endif
            </td>
        </tr>
        @if(!empty($inquiry['meta']['don_vi']))
        <tr>
            <td class="label">Tên đơn vị:</td>
            <td class="value">{{ $inquiry['meta']['don_vi'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['chuc_vu']))
        <tr>
            <td class="label">Chức vụ:</td>
            <td class="value">{{ $inquiry['meta']['chuc_vu'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['loai_don_vi']))
        <tr>
            <td class="label">Loại đơn vị:</td>
            <td class="value">{{ $inquiry['meta']['loai_don_vi'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['tinh_thanh']))
        <tr>
            <td class="label">Tỉnh / Thành phố:</td>
            <td class="value">{{ $inquiry['meta']['tinh_thanh'] }}</td>
        </tr>
        @endif
        <tr>
            <td class="label">Thời gian gửi:</td>
            <td class="value">{{ now()->format('H:i - d/m/Y') }}</td>
        </tr>
    </table>

    @if(!empty($inquiry['meta']['nhu_cau']) || !empty($inquiry['meta']['so_luong_thiet_bi']) || !empty($inquiry['meta']['thoi_diem_can']) || !empty($inquiry['meta']['product_model']))
    <div class="section-title">Chi tiết nhu cầu & thiết bị</div>
    <table class="info-table">
        @if(!empty($inquiry['meta']['nhu_cau']))
        <tr>
            <td class="label">Nhu cầu chính:</td>
            <td class="value" style="color: #1f7c45;">{{ $inquiry['meta']['nhu_cau'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['product_model']))
        <tr>
            <td class="label">Model quan tâm:</td>
            <td class="value">{{ $inquiry['meta']['product_model'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['so_luong_thiet_bi']))
        <tr>
            <td class="label">Số lượng dự kiến:</td>
            <td class="value">{{ $inquiry['meta']['so_luong_thiet_bi'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['thoi_diem_can']))
        <tr>
            <td class="label">Thời điểm cần:</td>
            <td class="value">{{ $inquiry['meta']['thoi_diem_can'] }}</td>
        </tr>
        @endif
        @if(!empty($inquiry['meta']['source_url']))
        <tr>
            <td class="label">Trang gửi yêu cầu:</td>
            <td class="value" style="font-size: 12px; word-break: break-all;"><a href="{{ $inquiry['meta']['source_url'] }}" target="_blank" style="color: #64748b;">{{ $inquiry['meta']['source_url'] }}</a></td>
        </tr>
        @endif
    </table>
    @endif

    <div class="section-title">Nội dung tin nhắn / ghi chú</div>
    <div class="message-box">{{ $inquiry['message'] ?? 'Khách hàng không để lại ghi chú thêm.' }}</div>

    <div style="margin-top: 30px; text-align: center;">
        @if(!empty($inquiry['phone']))
        <a href="tel:{{ preg_replace('/\s+/', '', $inquiry['phone']) }}" style="display: inline-block; background-color: #1f7c45; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: 700; font-size: 14px; margin-right: 10px;">
            📞 Gọi khách ngay: {{ $inquiry['phone'] }}
        </a>
        @endif
        @if(!empty($inquiry['email']))
        <a href="mailto:{{ $inquiry['email'] }}" style="display: inline-block; background-color: #10203C; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: 700; font-size: 14px;">
            ✉️ Gửi email phản hồi
        </a>
        @endif
    </div>

    <div style="margin-top: 25px; padding-top: 15px; border-top: 1px dashed #cbd5e1; font-size: 12px; color: #64748b; text-align: center;">
        Email nhận báo giá: <strong>info@huongsonco.com.vn</strong> &bull; Cc: <strong>thuannc72@gmail.com</strong>
    </div>
@endsection
