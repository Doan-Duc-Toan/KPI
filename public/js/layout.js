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

        $('#welcome').addClass("bg-dark-mode-sub");
        $('#profile').addClass("profile-dark-mode");
        $('#week_statistic').addClass("bg-dark-mode-sub");

        $('#notice-board').addClass("bg-dark-mode-sub notice-dark-mode");

        $('.kpi-day-item-bg').addClass("bg-dark-mode-sub");
        $('.kpi-day-item-bg span').addClass("color-light");

        $('#kpi-table').addClass("table-dark-mode");
        $('.filter-option').addClass("bg-dark-mode-sub");


        $('#setting-profile').addClass("dark-mode-form");
        $('form').addClass('dark-mode-form');
        $("#setting-save button").addClass("border-light");
        $("#setting-content form").addClass("border-20");
        $('.overview-item').addClass("bg-dark-mode-sub");
        $('.overview-item span').addClass("color-light");
        $('#statistical-kpi-table').addClass("table-dark-mode");
        $('.kpi-hint-item').addClass("bg-dark-mode-sub");
        $('#calendar').addClass("calendar-dark-mode");

        $("#calendar-home .header").addClass("home-calendar-bg")
        $("#calendar-home .legend").addClass("home-calendar-bg")
        $("#calendar-home .day").addClass("home-calendar-content")
        $("#calendar-home .week").addClass("home-calendar-content")
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

        $('#welcome').toggleClass("bg-dark-mode-sub");
        $('#profile').toggleClass("profile-dark-mode");
        $('#week_statistic').toggleClass("bg-dark-mode-sub");

        $('#notice-board').toggleClass("bg-dark-mode-sub notice-dark-mode");

        $('.kpi-day-item-bg').toggleClass("bg-dark-mode-sub");
        $('.kpi-day-item-bg span').toggleClass("color-light");

        $('#kpi-table').toggleClass("table-dark-mode");



        $('#setting-profile').toggleClass("dark-mode-form");
        $('form').toggleClass('dark-mode-form');

        $("#setting-save button").toggleClass("border-light");

        $("#setting-content form").toggleClass("border-20");
        $('.filter-option').toggleClass("bg-dark-mode-sub");


        $('.overview-item').toggleClass("bg-dark-mode-sub");

        $('.overview-item span').toggleClass("color-light");
        $('#statistical-kpi-table').toggleClass("table-dark-mode");
        $('.kpi-hint-item').toggleClass("bg-dark-mode-sub");

        $('#calendar').toggleClass("calendar-dark-mode");

        $("#calendar-home .header").toggleClass("home-calendar-bg")
        $("#calendar-home .legend").toggleClass("home-calendar-bg")
        $("#calendar-home .day").toggleClass("home-calendar-content")
        $("#calendar-home .week").toggleClass("home-calendar-content")

        // Lưu trạng thái vào localStorage dựa trên trạng thái của header
        if ($('#header').hasClass('bg-dark-mode-sub')) {
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.setItem('darkMode', 'disabled');
        }
    });


    // -----------guide---------

    $("#instruct").click(function () {
        introJs().start();
    })
})