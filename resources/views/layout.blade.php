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
    <link href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/personal-kpi.png') }}" type="image/x-icon">

    <title>KPI 28</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/7.2.0/intro.min.js"></script>
    <div id="wrapper" >
        <div id="header" data-intro='Chào mừng đến với KPI 28. Sau đây tôi sẽ hướng dẫn bạn sử dụng KPI 28 hiệu quả.' data-step ="1">
            <div id="logo">
                <img src="{{ asset('img/personal-kpi.png') }}" alt="">
                <span>KPI HTPH</span>
            </div>
            <div id="header-content" >
                <div id="hc-left">
                    <span>{{ $list_page[$page] }}</span>
                </div>
                <div id="hc-right">
                    <form action="" class="search" data-intro='Tìm kiếm bất cứ điều gì ở KPI 28 tại đây.' data-step ="2">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" placeholder="Tìm kiếm">
                    </form>
                    <div id="instruct" data-intro='Click vào đây để xem hướng dẫn sử dụng chi tiết.' data-step ="3" class="header-item"><span><i class="fa-solid fa-chalkboard-user"></i></span>
                    </div>
                    <div id="dark-mode" data-intro='Điều chỉnh luân phiên chế độ Sáng Tối.' data-step ="4" class="header-item"><span><i class="fa-regular fa-lightbulb"></i></span></div>
                    <div id="notice" data-intro='Xem các thông báo gửi từ hệ thống tại đây nhé!' data-step ="5" class="header-item"><span><i class="fa-regular fa-bell"></i></span></div>
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
            <div id="sidebar" data-intro='Tiếp theo chúng ta sẽ đi đến từng chức năng trong hệ thống.' data-step ="6">
                <div id="nav">
                    <div class="nav-item {{ $page == 'home' ? 'nav-active' : '' }}" data-intro='Trang chủ, chứa thông tin tổng quan về người dùng, thống kê tháng, lịch làm việc,...' data-step ="7">
                        <a href="{{ route('page', ['home']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="nav-name">Trang chủ</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'manage' ? 'nav-active' : '' }}" data-intro='Thiết lập, chỉnh sửa, xóa và xem danh sách các KPI tại đây' data-step ="8">
                        <a href="{{ route('page', ['manage']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-table-list"></i></span>
                            <span class="nav-name">Quản lý KPI</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'statistical' ? 'nav-active' : '' }}" data-intro='Tại đây chúng tôi thống kê chi tiết về hiệu suất KPI của bạn, cũng như đưa ra những gợi ý để bạn cải thiện hiệu suất của mình' data-step ="9">
                        <a href="{{ route('page', ['statistical']) }}">
                            <span class="nav-icon"><i class="fa-solid fa-chart-column"></i></span>
                            <span class="nav-name">Thống kê</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'calendar' ? 'nav-active' : '' }}" data-intro='Theo dõi, điều chỉnh lịch làm việc chi tiết tại đây nhé!' data-step ="10">
                        <a href="{{ route('page', ['calendar']) }}">
                            <span class="nav-icon"><i class="fa-regular fa-calendar-days"></i></span>
                            <span class="nav-name">Lịch</span>
                        </a>
                    </div>
                    <div class="nav-item {{ $page == 'setting' ? 'nav-active' : '' }}" data-intro='Và chức năng cuối cùng là cài đặt, nơi bạn có thể chỉnh sửa thông tin cá nhân, bật tắt thông báo và bảo mật tài khoản.' data-step ="11">
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
