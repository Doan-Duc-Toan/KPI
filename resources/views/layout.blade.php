<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">
    <title>KPI 28</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.js') }}"></script>
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
                    <div id="dark-mode" class="header-item"><span><i class="fa-regular fa-lightbulb"></i></span></div>
                    <div id="notice" class="header-item"><span><i class="fa-regular fa-bell"></i></span></div>
                    <div id="avatar"><img src="{{ asset('img/images.jpg') }}" alt=""></div>
                </div>
            </div>
            <div id="notice-board">
                <div id="top-notice-board">
                    <div id="title-notice-board">
                        <span>Thông báo</span>
                    </div>
                    <dv id="notice-mark">
                        <span>Đánh dấu tất cả là đã đọc <i class="fa-regular fa-circle-check"></i></span>
                    </dv>
                </div>
                <div id="list-notice-board">
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Công việc “Thi cuối kỳ” đã hoàn thành. </span>
                            <span>Thứ 7 19:12 AM</span>
                        </div>
                        <div id="icon-unread"></div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Bài tập lớn UIUX”</span>
                            <span>Thứ 2 tuần trước 9:42 AM</span>
                        </div>
                        <div id="icon-unread"></div>

                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo cập nhật phiên bản 4.23</span>
                            <span>Thứ 5 tuần trước 11:02 AM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Xem anime”</span>
                            <span>11/04/2024 9:42 AM</span>
                        </div>
                        <div id="icon-unread"></div>

                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Đi ngủ”</span>
                            <span>07/04/2023 11:55 PM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo cập nhật phiên bản 3.1.1</span>
                            <span>03/04/2024 07:00 AM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Công việc "Đi tắm" đã hoàn thành</span>
                            <span>22/03/2024 07:44 PM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Bài tập lớn UIUX”</span>
                            <span>Thứ 2 tuần trước 9:42 AM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Bài tập lớn UIUX”</span>
                            <span>Thứ 2 tuần trước 9:42 AM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Bài tập lớn UIUX”</span>
                            <span>Thứ 2 tuần trước 9:42 AM</span>
                        </div>
                    </div>
                    <div class="notice-board-item">
                        <div class="notice-board-icon">
                            <span><i class="fa-brands fa-spotify"></i></span>
                        </div>
                        <div class="notice-board-content">
                            <span>Thông báo công việc chưa hoàn thành “Bài tập lớn UIUX”</span>
                            <span>Thứ 2 tuần trước 9:42 AM</span>
                        </div>
                    </div>

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
                    <a href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng
                            xuất</span></a>
                </div>
            </div>
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
