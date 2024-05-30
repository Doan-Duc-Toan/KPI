<div id="nav-sidebar" data-intro='Tiếp theo chúng ta sẽ đi đến từng chức năng trong hệ thống.' data-step ="6">
    <div id="res-nav">
        <div class="res-nav-item {{ $page == 'home' ? 'res-nav-active' : '' }}"
            data-intro='Trang chủ, chứa thông tin tổng quan về người dùng, thống kê tháng, lịch làm việc,...'
            data-step ="7">
            <a href="{{ route('page', ['home']) }}">
                <span class="res-nav-icon"><i class="fa-solid fa-house"></i></span>
            </a>
        </div>
        <div class="res-nav-item {{ $page == 'manage' ? 'res-nav-active' : '' }}"
            data-intro='Thiết lập, chỉnh sửa, xóa và xem danh sách các KPI tại đây' data-step ="8">
            <a href="{{ route('page', ['manage']) }}">
                <span class="res-nav-icon"><i class="fa-solid fa-table-list"></i></span>
            </a>
        </div>
        <div class="res-nav-item {{ $page == 'statistical' ? 'res-nav-active' : '' }}"
            data-intro='Tại đây chúng tôi thống kê chi tiết về hiệu suất KPI của bạn, cũng như đưa ra những gợi ý để bạn cải thiện hiệu suất của mình'
            data-step ="9">
            <a href="{{ route('page', ['statistical']) }}">
                <span class="res-nav-icon"><i class="fa-solid fa-chart-column"></i></span>
            </a>
        </div>
        <div class="res-nav-item {{ $page == 'calendar' ? 'res-nav-active' : '' }}"
            data-intro='Theo dõi, điều chỉnh lịch làm việc chi tiết tại đây nhé!' data-step ="10">
            <a href="{{ route('page', ['calendar']) }}">
                <span class="res-nav-icon"><i class="fa-regular fa-calendar-days"></i></span>
            </a>
        </div>
        <div class="res-nav-item {{ $page == 'setting' ? 'res-nav-active' : '' }}"
            data-intro='Và chức năng cuối cùng là cài đặt, nơi bạn có thể chỉnh sửa thông tin cá nhân, bật tắt thông báo và bảo mật tài khoản.'
            data-step ="11">
            <a href="{{ route('page', ['setting']) }}">
                <span class="res-nav-icon"><i class="fa-solid fa-gear"></i></span>
            </a>
        </div>
        <div class="res-nav-item">
            <a class="btn-logout" href="{{ route('login') }}">
                <span class="res-nav-icon"><i class="fa-solid fa-right-from-bracket"></i> </span>
            </a>
        </div>
    </div>
    <div id="bar">
        <div class="bar-icon"></div>
    </div>
</div>
