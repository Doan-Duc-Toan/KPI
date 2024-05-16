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
                {{-- <div class="route" id="index"></div>
                <div class="route" id="oct-week-3"></div>
                <div class="route" id="oct-week-4"></div>
                <div class="route" id="nov-week-1"></div>
                <div class="route" id="schedule"></div>
                <main class="cal-device">
                    <header class="cal-header">
                        <div class="cal-subheader"></div>
                        <div class="cal-bar">
                            <div class="cal-button -left">
                                <i class="fa fa-bars -calendar"></i>
                                <a href="#index" class="fa fa-chevron-left -schedule"></a>
                            </div>
                            <div class="cal-title">
                                <div class="cal-heading -calendar">Lịch</div>
                                <div class="cal-heading -schedule">Wednesday, November 10</div>
                            </div>
                            <div class="cal-button -right">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </header>
                    <section class="cal-app">
                        <header class="cal-week">
                            <div class="cal-weekday">SUN</div>
                            <div class="cal-weekday">MON</div>
                            <div class="cal-weekday">TUE</div>
                            <div class="cal-weekday">WED</div>
                            <div class="cal-weekday">THU</div>
                            <div class="cal-weekday">FRI</div>
                            <div class="cal-weekday">SAT</div>
                        </header>
                        <div class="cal-scene -calendar">
                            <div class="cal-month -october">
                                <header class="cal-header">
                                    <a class="cal-link" href="#oct-week-1"><span>October</span></a>
                                    <a class="cal-arrow" href="#nov-week-1"><i class="fa fa-chevron-up"></i></a>
                                    <a class="cal-arrow" href="#oct-week-4"><i class="fa fa-chevron-up"></i></a>
                                </header>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                            </div>
                            <div class="cal-month -november">
                                <header class="cal-header">
                                    <a class="cal-link" href="#nov-week-1"><span>November</span></a>
                                    <a class="cal-arrow"><i class="fa fa-chevron-up"></i></a>
                                </header>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                            </div>
                            <div class="cal-month -december">
                                <header class="cal-header">
                                    <a class="cal-link"><span>December</span></a>
                                    <a class="cal-arrow" href="#nov-week-1"><i class="fa fa-chevron-down"></i></a>
                                    <a class="cal-arrow" href="#oct-week-3"><i class="fa fa-chevron-down"></i></a>
                                </header>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a href="#schedule" class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                            </div>
                            <div class="cal-month -january">
                                <header class="cal-header">
                                    <div class="cal-link"><span>January</span></div>
                                    <a class="cal-arrow" href="#oct-week-4"><i class="fa fa-chevron-down"></i></a>
                                </header>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                                <a class="cal-day"></a>
                            </div>
                        </div>
                        <div class="cal-scene -schedule">
                            <div class="cal-item">
                                <div class="cal-time"><span>08:00</span></div>
                                <div class="cal-task">
                                    <p>wake up</p>
                                </div>
                            </div>
                            <div class="cal-item -long">
                                <div class="cal-time"><span>12:15</span></div>
                                <div class="cal-task">
                                    <p>meeting with the team, discussing the project requirements</p>
                                </div>
                            </div>
                            <div class="cal-item">
                                <div class="cal-time"><span>13:00</span></div>
                                <div class="cal-task">
                                    <p>lunch with Peter</p>
                                    <a><i class="fa fa-map-marker"></i>cafe <q>Petit brasserie</q></a>
                                </div>
                            </div>
                            <div class="cal-item">
                                <div class="cal-time"><span>14:30</span></div>
                                <div class="cal-task">
                                    <p>call with Johnathan and Stevie</p>
                                </div>
                            </div>
                            <div class="cal-item -long">
                                <div class="cal-time"><span>16:45</span></div>
                                <div class="cal-task">
                                    <p>project presentation</p>
                                    <a><i class="fa fa-map-marker"></i>Head Office</a>
                                </div>
                            </div>
                            <div class="cal-item">
                                <div class="cal-time"><span>18:00</span></div>
                                <div class="cal-task">
                                    <p>call with Johnathan and Stevie</p>
                                </div>
                            </div>
                            <div class="cal-item -long">
                                <div class="cal-time"><span>19:00</span></div>
                                <div class="cal-task">
                                    <p>David's birthday party</p>
                                    <a><i class="fa fa-map-marker"></i>bar <q>Tailor's John</q></a>
                                </div>
                            </div>
                            <div class="cal-item">
                                <div class="cal-time"></div>
                                <div class="cal-task"></div>
                            </div>
                        </div>
                    </section>
                </main> --}}
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
