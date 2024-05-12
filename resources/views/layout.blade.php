<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <title>KPI 28</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img src="{{ asset('img/personal-kpi.png') }}" alt="">
                <span>KPI 28</span>
            </div>
            <div id="header-content">
                <div id="hc-left">
                    <span>{{ $list_page[$page] }}</span>
                </div>
                <div id="hc-right">
                    <form action="" class="search">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" placeholder="Tìm kiếm">
                    </form>
                    <div id="instruct" class="header-item"><span><i class="fa-solid fa-chalkboard-user"></i></span>
                    </div>
                    <div id="notify" class="header-item"><span><i class="fa-regular fa-bell"></i></span></div>
                    <div id="avatar"><img src="{{ asset('img/images.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
        <div id="wr-content">
            <div id="sidebar">
                <div id="nav">
                    <div class="nav-item {{ $page == 'home' ? 'nav-active' : '' }}">
                        <a href="{{ route('page', ['home']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="nav-name">Trang chủ</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'manage' ? 'nav-active' : '' }}">
                        <a href="{{ route('page', ['manage']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-table-list"></i></span>
                            <span class="nav-name">Quản lý KPI</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'statistical' ? 'nav-active' : '' }}">
                        <a href="{{ route('page', ['statistical']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-chart-column"></i></span>
                            <span class="nav-name">Thống kê</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'calendar' ? 'nav-active' : '' }}">
                        <a href="{{ route('page', ['calendar']) }}">
                            <span class="nav-icon"><i class="fa-regular fa-calendar-days"></i></span>
                            <span class="nav-name">Lịch</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'setting' ? 'nav-active' : '' }}">
                        <a href="{{ route('page', ['setting']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-gear"></i></span>
                            <span class="nav-name">Cài đặt</span>
                        </a>
                    </div>
                </div>
                <div id="logout">
                    <a href="{{route('login')}}"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng xuất</span></a>
                </div>
            </div>
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
