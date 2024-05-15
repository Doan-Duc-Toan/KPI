@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/statistical.css') }}">
    <div id="statistical-content">
        <div id="overview">
            <div class="overview-item">
                <div id="total-kpi" class="overview-icon"><i class="fa-solid fa-layer-group"></i></div>
                <div class="overview-content">
                    <span>Tổng số KPI trên hệ thống</span><br>
                    <span>155245</span>
                </div>
            </div>
            <div class="overview-item">
                <div id="completed-kpi" class="overview-icon"><i class="fa-regular fa-thumbs-up"></i></div>
                <div class="overview-content">
                    <span>Số KPI đã đạt được</span><br>
                    <span>93453</span>
                </div>
            </div>
            <div class="overview-item">
                <div id="deleted-kpi" class="overview-icon"><i class="fa-solid fa-ban"></i></div>
                <div class="overview-content">
                    <span>Số KPI đã hủy</span><br>
                    <span>33424</span>
                </div>
            </div>
        </div>
        <div id="list-statistical">
            <div class="statistical-item">
                <div class="statistical-item-title">
                    <span>Thống kê KPI trong tháng</span><br>
                    <span>Tháng 5</span>
                </div>
                <div class="statistical-chart">
                    <canvas id="chart-kpi-month"></canvas>
                </div>
            </div>
            <div class="statistical-item">
                <div class="statistical-item-title">
                    <span>Thống kê KPI năm 2024</span><br>
                    <span>Quý 2</span>
                </div>
                <div class="statistical-chart">
                    <canvas id="chart-kpi-year"></canvas>
                </div>
            </div>
            <div class="statistical-item">
                <div class="statistical-item-title">
                    <span>Thống kê KPI trong tuần</span><br>
                </div>
                <div id="statistical-kpi-table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Deadline</th>
                                <th>Tiến độ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div><span>01.</span></div>
                                </td>
                                <td>
                                    <div><span>Kiểm tra</span></div>
                                </td>
                                <td>
                                    <div><span>05/05</span></div>
                                </td>
                                <td>
                                    <div class="text-high">10%</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><span>02.</span></div>
                                </td>
                                <td>
                                    <div><span>Báo cáo</span></div>
                                </td>
                                <td>
                                    <div><span>07/05</span></div>
                                </td>
                                <td>
                                    <div class="text-low">100%</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><span>03.</span></div>
                                </td>
                                <td>
                                    <div><span>Hẹn hò</span></div>
                                </td>
                                <td>
                                    <div><span>11/05</span></div>
                                </td>
                                <td>
                                    <div class="text-medium">60%</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><span>04.</span></div>
                                </td>
                                <td>
                                    <div><span>Ngủ</span></div>
                                </td>
                                <td>
                                    <div><span>Hằng ngày</span></div>
                                </td>
                                <td>
                                    <div class="text-medium">60%</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="statistical-item">
                <div class="statistical-item-title">
                    <span>Gợi ý</span><br>
                    <span>Những gợi ý giúp bạn cải thiện KPI</span>
                </div>
                <div class="kpi-hint">
                    <div class="kpi-hint-item">
                        <div class="kpi-hint-item-icon key-color">
                            <span><i class="fa-solid fa-key"></i></span>
                        </div>
                        <div class="kpi-hint-item-content">
                            <span>Xác định xem các KPI hiện tại có phản ánh đúng mục tiêu và ưu tiên của bạn không</span>
                        </div>
                    </div>
                    <div class="kpi-hint-item">
                        <div class="kpi-hint-item-icon smart-color">
                            <span><i class="fa-solid fa-house-signal"></i></span>
                        </div>
                        <div class="kpi-hint-item-content">
                            <span> Thiết lập các KPI theo tiêu chí SMART (Cụ thể, Đo lường được, Có thể đạt được, Liên quan, và Có thời hạn).</span>
                        </div>
                    </div>
                    <div class="kpi-hint-item">
                        <div class="kpi-hint-item-icon kohi-color">
                            <span><i class="fa-solid fa-mug-hot"></i></span>
                        </div>
                        <div class="kpi-hint-item-content">
                            <span>Hãy nghỉ ngơi một chút để có thêm năng lượng hoàn thành các mục tiêu kế tiếp</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/statistical.js') }}"></script>
@endsection
