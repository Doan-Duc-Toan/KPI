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
            <span class="list-kpi-title">Danh sách KPI</span>
            <div id="kpi-list-top">
                <div id="kpi-status">
                    <div id="kpi_all" class="kpi-status-item kpi-status-active">
                        <span>Tất cả</span>
                    </div>
                    <div id="kpi_delete" class="kpi-status-item">
                        <span>Đã xóa</span>
                    </div>
                </div>
                <div id="kpi-search">
                    <form action="" class="search-kpi">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" placeholder="Tìm kiếm">
                        <div class="filter-option">
                            <div class="filter-option-item">
                                <select name="" id="">
                                    <option value="">Ưu tiên</option>
                                    <option value="">Thấp</option>
                                    <option value="">Trung bình</option>
                                    <option value="">Cao</option>
                                </select>
                            </div>
                            <div class="filter-option-item">
                                <select name="" id="">
                                    <option value="">Tiến độ</option>
                                    <option value="">0%</option>
                                    <option value=""> > 50%</option>
                                    <option value="">
                                        < 50% </option>
                                </select>
                            </div>
                            <div class="filter-option-item">
                                <select name="" id="">
                                    <option value="">Định kỳ</option>
                                    <option value="">Ngày</option>
                                    <option value=""> Tháng </option>
                                    <option value=""> Năm </option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="filter">
                        <span><i class="fa-solid fa-filter"></i></span>
                    </div>
                </div>
                
            </div>
            <div id="kpi-table">
                @include('kpi_all')
            </div>
            <div id="bot-list-kpi">
                <div class="add-kpi">
                    <span>+ Thêm KPI</span>
                </div>
                <div class="paginate">
                    <div class="pre move"><a href=""><i class="fa-solid fa-angle-left"></i> Previous</a></div>
                    <div class="page page-active"><a href="">1</a></div>
                    <div class="page"><a href="">2</a></div>
                    <div class="page"><a href="">3</a></div>
                    <div class="page"><a href="">4</a></div>
                    <div class="next move"><a href="">Next <i class="fa-solid fa-angle-right"></i></a></div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/manage.js') }}"></script>
@endsection
