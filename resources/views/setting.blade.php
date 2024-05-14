@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
    <div id="setting-content">
        <form action="">
            <div id="setting-profile">
                <div id="setting-status">
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
                <div id="setting-info">
                    @include('profile_user')
                </div>
            </div>
            <div id="setting-save">
                <button>Lưu</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/setting.js') }}"></script>
@endsection
