$(document).ready(function () {
    $("#setting-info").on('click', '.setting-info-nav-item', function () {
        let id = $(this).attr('id');
        let self = this;
        $.ajax({
            url: '/KPI/setting/status', // 
            type: 'GET',
            data: { id: id },
            success: function (data) {
                $('.bot-setting-info').html(data.html);
                $('.setting-info-nav-item span').removeClass('nav-item-active')
                $(self).children('span').addClass('nav-item-active');
            },
            error: function (error) {
                console.log(error);
            },
            complete: function () {

            }
        });
    })
    $('.setting-status-item').click(function () {
        let id = $(this).attr('id');
        let self = this;
        $.ajax({
            url: '/KPI/setting/type', // 
            type: 'GET',
            data: { id: id },
            success: function (data) {
                $('#setting-info').html(data.html);
                $('.setting-status-item').removeClass('setting-status-item-active')
                $(self).addClass('setting-status-item-active');
            },
            error: function (error) {
                console.log(error);
            },
            complete: function () {

            }
        });
    })
})