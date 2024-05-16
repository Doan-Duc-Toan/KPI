@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/manage.css') }}">
    <div id="manage-content" data-intro='Tiếp theo, chúng ta sẽ đi vào chi tiết phần quản lý KPI.' data-step ="12">
        <div id="kpi-day">
            <span class="kpi-day-title">KPI trong ngày</span>
            <div class="list-kpi-day" data-intro='Danh sách các KPI quan trọng trong ngày sẽ được hiển thị tại đây.' data-step ="13">
                <div class="owl-carousel">
                    <div class="kpi-day-item" data-intro='Chi tiết KPI gồm có tên, độ quan trọng, và biểu đồ thống kế tiến độ. Tất nhiên bạn có thể cập nhật chúng!' data-step ="14">
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
                                    <canvas id="dayChart_1"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item update-kpi">
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
                                    <canvas id="dayChart_2"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item update-kpi">
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
                                    <canvas id="dayChart_3"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item update-kpi">
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
                                    <canvas id="dayChart_4"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item update-kpi">
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
                                    <canvas id="dayChart_5"></canvas>
                                </div>
                            </div>
                            <div class="bot-kpi-day-item update-kpi">
                                <span>Cập nhật</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list-kpi" data-intro='Dưới đây là danh sách các KPI của bạn. Bạn có thể thêm, sửa, xóa chúng.' data-step ="14">
            <span class="list-kpi-title">Danh sách KPI</span>
            <div id="kpi-list-top" >
                <div id="kpi-status" data-intro='Luân chuyển giữa 2 trạng thái của danh sách: Tất cả/Đã xóa.' data-step ="15">
                    <div id="kpi_all" class="kpi-status-item kpi-status-active">
                        <span>Tất cả</span>
                    </div>
                    <div id="kpi_delete" class="kpi-status-item">
                        <span>Đã xóa</span>
                    </div>
                </div>
                <div id="kpi-search">
                    <form action="" class="search-kpi" data-intro='Tìm kiếm KPI bằng cách nhập các từ khóa(Tên, Định kỳ,...)' data-step ="16">
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
                    <div class="filter" data-intro='Hoặc bạn có thể click vào đây để tìm kiếm bằng cách lọc theo các bộ lọc có sẵn' data-step ="17">
                        <span><i class="fa-solid fa-filter"></i></span>
                    </div>
                </div>
                
            </div>
            <div id="kpi-table" data-intro='Đây là bảng danh sách các KPI của bạn.' data-step ="18">
                @include('kpi_all')
            </div>
            <div id="bot-list-kpi">
                <div class="add-kpi" data-intro='Thêm các KPI mới của bạn tại đây!' data-step ="21">
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
        @include('modal_create_kpi')
        @include('modal_detail_kpi')
    </div>
    <script src="{{ asset('js/manage.js') }}"></script>
@endsection
