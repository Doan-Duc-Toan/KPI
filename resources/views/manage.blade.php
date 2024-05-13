@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/manage.css') }}">
    <div id="manage-content">
        <div id="kpi-day">
            <span class="kpi-day-title">KPI trong ngày</span>
            <div class="list-kpi-day">
                <div class="owl-carousel">
                    <div class="kpi-day-item">
                        <div class="kpi-day-item-bg">
                            <div class="top-kpi-day-item">
                                <div class="kpi-day-info">
                                    <div class="kpi-day-name kpi-day-info-item">
                                        <span>KPI</span><br>
                                        <span>Học bài</span>
                                    </div>
                                    <div class="kpi-day-evaluate kpi-day-info-item">
                                        <span>Đánh giá</span><br>
                                        <span>Trung bình</span>
                                    </div>
                                </div>
                                <div class="kpi-day-progess">
                                    <canvas id="dayChart-1"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-day-item-bg">
                            <div class="top-kpi-day-item">
                                <div class="kpi-day-info">
                                    <div class="kpi-day-name kpi-day-info-item">
                                        <span>KPI</span><br>
                                        <span>Chơi League of legend</span>
                                    </div>
                                    <div class="kpi-day-evaluate kpi-day-info-item">
                                        <span>Đánh giá</span><br>
                                        <span>Cao</span>
                                    </div>
                                </div>
                                <div class="kpi-day-progess">
                                    <canvas id="dayChart-2"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-day-item-bg">
                            <div class="top-kpi-day-item">
                                <div class="kpi-day-info">
                                    <div class="kpi-day-name kpi-day-info-item">
                                        <span>KPI</span><br>
                                        <span>Báo cáo tiến độ học tập</span>
                                    </div>
                                    <div class="kpi-day-evaluate kpi-day-info-item">
                                        <span>Đánh giá</span><br>
                                        <span>Cao</span>
                                    </div>
                                </div>
                                <div class="kpi-day-progess">
                                    <canvas id="dayChart-3"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-day-item-bg">
                            <div class="top-kpi-day-item">
                                <div class="kpi-day-info">
                                    <div class="kpi-day-name kpi-day-info-item">
                                        <span>KPI</span><br>
                                        <span>Phỏng vấn Jobfair</span>
                                    </div>
                                    <div class="kpi-day-evaluate kpi-day-info-item">
                                        <span>Đánh giá</span><br>
                                        <span>Trung bình</span>
                                    </div>
                                </div>
                                <div class="kpi-day-progess">
                                    <canvas id="dayChart-4"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-day-item-bg">
                            <div class="top-kpi-day-item">
                                <div class="kpi-day-info">
                                    <div class="kpi-day-name kpi-day-info-item">
                                        <span>KPI</span><br>
                                        <span>Báo cáo đồ án</span>
                                    </div>
                                    <div class="kpi-day-evaluate kpi-day-info-item">
                                        <span>Đánh giá</span><br>
                                        <span>Cao</span>
                                    </div>
                                </div>
                                <div class="kpi-day-progess">
                                    <canvas id="dayChart-5"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list-kpi">
            
        </div>
    </div>
    <script src="{{ asset('js/manage.js') }}"></script>
@endsection
