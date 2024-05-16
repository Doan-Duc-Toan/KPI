@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <div id="home-content" data-intro='Tiếp theo, chúng ta sẽ cùng xem chi tiết trang chủ có những gì nhé!' data-step ="12">
        <div id="left-content">
            <div id="welcome" data-intro='Lời chào mừng bạn sử dụng ứng dụng của chúng tôi và tóm tắt tiến độ trong tuần của bạn.' data-step ="13">
                <div class="welcome-text">
                    <h3>Chào mừng trở lại!</h3>
                    <span>Tiến độ tuần: 25%</span><br>
                    <span>Hãy tiếp tục cố gắng đạt mục tiêu đề ra</span>
                </div>
                <div class="welcome-icon">
                    <span><i class="fa-solid fa-calendar-week"></i></span>
                </div>
            </div>
            <div id="profile" data-intro='Những thông tin cá nhân chính của bạn. Có thể điều chỉnh chúng trong phần cài đặt.' data-step ="14">
                <div class="top-profile">
                    <div class="tp-item">
                        <span>Họ và tên</span><br>
                        <span><b>Đoàn Đức Toàn</b></span>
                    </div>
                    <div class="tp-item">
                        <span>Cơ quan</span><br>
                        <span><b>Sun*</b></span>
                    </div>
                </div>
                <div class="bot-profile">
                    <span>MSSV</span><br>
                    <span><b>20215148</b></span>
                </div>
            </div>
            <div id="week_statistic" data-intro='Đồ thị thống kê số lượng KPI bạn đã đạt trong tháng này! Hãy tiếp tục cố gắng nhé!' data-step ="15">
                <canvas id="weekChart"></canvas>
            </div>
        </div>
        <div id="right-content">
            <div id="calendarContent" data-intro='Lịch trình tuần này của bạn ở đây. Hãy click vào các ô có ngày màu xanh để xem chi tiết công việc!' data-step ="16">
                <div id="calendar-home"></div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
