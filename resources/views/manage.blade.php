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
                    <div class="kpi-all kpi-status-item kpi-status-active">
                        <a href="">Tất cả</a>
                    </div>
                    <div class="kpi-delete kpi-status-item">
                        <a href="">Đã xóa</a>
                    </div>
                </div>
                <div id="kpi-search">
                    <form action="" class="search-kpi">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" placeholder="Tìm kiếm">
                    </form>
                    <div class="filter">
                        <span><i class="fa-solid fa-filter"></i></span>
                    </div>
                </div>
            </div>
            <div id="kpi-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên</th>
                            <th>Mục tiêu</th>
                            <th>Định kỳ <i class="fa-solid fa-chevron-down"></i></th>
                            <th>Tiến độ <i class="fa-solid fa-chevron-down"></i></th>
                            <th>Thời hạn <i class="fa-solid fa-chevron-down"></i></th>
                            <th>Ưu tiên <i class="fa-solid fa-chevron-down"></i></th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="kpi-info"><i class="fa-solid fa-circle-info"></i></div>
                            </td>
                            <td>
                                <div class="name-kpi"><span>Ngủ</span></div>
                            </td>
                            <td>
                                <div><span>7h</span></div>
                            </td>
                            <td>
                                <div><span>Ngày</span></div>
                            </td>
                            <td>
                                <div><span>70%</span></div>
                            </td>
                            <td>
                                <div><span>Không</span></div>
                            </td>
                            <td>
                                <div class="text-medium">Trung bình</div>
                            </td>
                            <td>
                                <div class="delete-kpi"><i class="fa-solid fa-trash-can"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="kpi-info"><i class="fa-solid fa-circle-info"></i></div>
                            </td>
                            <td>
                                <div class="name-kpi"><span>Ngủ</span></div>
                            </td>
                            <td>
                                <div><span>7h</span></div>
                            </td>
                            <td>
                                <div><span>Ngày</span></div>
                            </td>
                            <td>
                                <div><span>70%</span></div>
                            </td>
                            <td>
                                <div><span>Không</span></div>
                            </td>
                            <td>
                                <div class="text-high">Cao</div>
                            </td>
                            <td>
                                <div class="delete-kpi"><i class="fa-solid fa-trash-can"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="kpi-info"><i class="fa-solid fa-circle-info"></i></div>
                            </td>
                            <td>
                                <div class="name-kpi"><span>Ngủ</span></div>
                            </td>
                            <td>
                                <div><span>7h</span></div>
                            </td>
                            <td>
                                <div><span>Ngày</span></div>
                            </td>
                            <td>
                                <div><span>70%</span></div>
                            </td>
                            <td>
                                <div><span>Không</span></div>
                            </td>
                            <td>
                                <div class="text-low">Thấp</div>
                            </td>
                            <td>
                                <div class="delete-kpi"><i class="fa-solid fa-trash-can"></i></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="kpi-info"><i class="fa-solid fa-circle-info"></i></div>
                            </td>
                            <td>
                                <div class="name-kpi"><span>Ngủ</span></div>
                            </td>
                            <td>
                                <div><span>7h</span></div>
                            </td>
                            <td>
                                <div><span>Ngày</span></div>
                            </td>
                            <td>
                                <div><span>70%</span></div>
                            </td>
                            <td>
                                <div><span>Không</span></div>
                            </td>
                            <td>
                                <div class="text-medium">Trung bình</div>
                            </td>
                            <td>
                                <div class="delete-kpi"><i class="fa-solid fa-trash-can"></i></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
