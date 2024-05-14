$(document).ready(function () {
    $("#notice").click(function () {
        $("#notice-board").stop().toggle();
        $(this).toggleClass("notice-click-active")
    })
    if (localStorage.getItem('darkMode') === 'enabled') {
        $('body').addClass('bg-dark-mode');
        $('#header').addClass('bg-dark-mode-sub');
        $('#sidebar').addClass('bg-dark-mode-sub');
        $('#content').addClass('bg-dark-mode');
        $('#logo').addClass('border-none');
        $('.header-item').addClass('bg-dark-mode');
        $("#dark-mode").addClass('dark-mode-active');
        // $('div#hc-right form').addClass('dark-mode-form');

        $('#welcome').addClass("bg-dark-mode-sub");
        $('#profile').addClass("profile-dark-mode");
        $('#week_statistic').addClass("bg-dark-mode-sub");

        $('#notice-board').addClass("bg-dark-mode-sub notice-dark-mode");

        $('.kpi-day-item-bg').addClass("bg-dark-mode-sub");
        $('.kpi-day-item-bg span').addClass("color-light");

        $('#kpi-table table').addClass("bg-dark-mode-sub");
        $('#kpi-table').addClass("bg-dark-mode-sub");

        $('#kpi-table table span').addClass("color-light");
        // $('form.search-kpi').addClass('dark-mode-form');
        
        $('#setting-profile').addClass("dark-mode-form");
        $('form').addClass('dark-mode-form');
        $("#setting-save button").addClass("border-light");
        $("#setting-content form").addClass("border-20");

    }

    // Xử lý sự kiện click cho toggle dark mode
    $("#dark-mode").click(function () {
        $(this).toggleClass("dark-mode-active");
        $('#header').toggleClass("bg-dark-mode-sub");
        $('#sidebar').toggleClass("bg-dark-mode-sub");
        $('#content').toggleClass("bg-dark-mode");
        $('body').toggleClass('bg-dark-mode');
        $('#logo').toggleClass('border-none');
        $('.header-item').toggleClass('bg-dark-mode');
        // $('div#hc-right form').toggleClass('dark-mode-form');

        $('#welcome').toggleClass("bg-dark-mode-sub");
        $('#profile').toggleClass("profile-dark-mode");
        $('#week_statistic').toggleClass("bg-dark-mode-sub");

        $('#notice-board').toggleClass("bg-dark-mode-sub notice-dark-mode");

        $('.kpi-day-item-bg').toggleClass("bg-dark-mode-sub");
        $('.kpi-day-item-bg span').toggleClass("color-light");

        $('#kpi-table table').toggleClass("bg-dark-mode-sub");
        $('#kpi-table').toggleClass("bg-dark-mode-sub");
 
        $('#kpi-table table span').toggleClass("color-light");
        // $('form.search-kpi').toggleClass('dark-mode-form');

        $('#setting-profile').toggleClass("dark-mode-form");
        $('form').toggleClass('dark-mode-form');

        $("#setting-save button").toggleClass("border-light");

        $("#setting-content form").toggleClass("border-20");
        // Lưu trạng thái vào localStorage dựa trên trạng thái của header
        if ($('#header').hasClass('bg-dark-mode-sub')) {
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.setItem('darkMode', 'disabled');
        }
    });
})