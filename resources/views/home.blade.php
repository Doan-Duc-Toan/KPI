@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <div id="home-content">
        <div id="left-content">
            <div id="welcome">
                <div class="welcome-text">
                    <h3>Chào mừng trở lại!</h3>
                    <span>Tiến độ tuần: 25%</span><br>
                    <span>Hãy tiếp tục cố gắng đạt mục tiêu đề ra</span>
                </div>
                <div class="welcome-icon">
                    <span><i class="fa-solid fa-calendar-week"></i></span>
                </div>
            </div>
            <div id="profile">
                <div class="top-profile">
                    <div class="tp-item">
                        <span>Họ và tên</span><br>
                        <span><b>Đoàn Đức Toàn</b></span>
                    </div>
                    <div class="tp-item">
                        <span>Cơ quan</span><br>
                        <span><b>SOICT</b></span>
                    </div>
                </div>
                <div class="bot-profile">
                    <span>MSSV</span><br>
                    <span><b>20215148</b></span>
                </div>
            </div>
            <div id="week_statistic">
                <canvas id="weekChart"></canvas>
            </div>
        </div>
        <div id="right-content">
            <div id="calendarContent">
                <div class="calendar"></div>
            </div>
            <div id="deadline">
                <div id="dl-content">
                    <span class="dl-title">Gần hạn</span>
                    <div class="list-dl">
                        <div class="dl-item">
                            <div class="dl-item-name">
                                <a href=""><i class="fa-solid fa-link"></i></a>
                                <span>Học bài</span>
                            </div>
                            <div class="dl-item-time">
                                <span>40:00</span>
                            </div>
                            <div class="dl-item-bar">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="dl-item">
                            <div class="dl-item-name">
                                <a href=""><i class="fa-solid fa-link"></i></a>
                                <span>Chuẩn bị đề tài</span>
                            </div>
                            <div class="dl-item-time">
                                <span>40:00</span>
                            </div>
                            <div class="dl-item-bar">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="dl-item">
                            <div class="dl-item-name">
                                <a href=""><i class="fa-solid fa-link"></i></a>
                                <span>Báo cáo đồ án</span>
                            </div>
                            <div class="dl-item-time">
                                <span>40:00</span>
                            </div>
                            <div class="dl-item-bar">
                                <div class="bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
