@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}" >
    <div id="setting-content" data-intro='Tiếp theo, chúng ta sẽ đi đến phần cài đặt hệ thống.' data-step ="12">
        <form action="">
            <div id="setting-profile">
                <div id="setting-status" data-intro='Chúng tôi chia phần cài đặt thành 3 trạng thái. Luân chuyển các trạng thái bằng cách click vào chúng.' data-step ="13">
                    <div id="profile_user" class="setting-status-item setting-status-item-active">
                        <span>Hồ sơ</span>
                    </div>
                    <div id="notify" class="setting-status-item">
                        <span>Thông báo</span>
                    </div>
                    <div id="security" class="setting-status-item">
                        <span >Bảo mật</span>
                    </div>
                </div>
                <div id="setting-info" data-intro='Chi tiết nội dung cài đặt hiển thị tại đây. Hãy điều chỉnh chúng phù hợp theo mong muốn của bạn.' data-step ="14">
                    @include('profile_user')
                </div>
            </div>
            <div id="setting-save" >
                <button data-intro='Sau khi đã điều chỉnh những thông tin cần thiết, hãy bấm "Lưu".' data-step ="15">Lưu</button>
            </div>
        </form>
        @include("modal_change_pass")
        @include("modal_create_verify_code")
        @include("modal_list_device")
    </div>
    <script src="{{ asset('js/setting.js') }}"></script>
@endsection
