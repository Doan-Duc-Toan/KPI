$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
    let listChart = new Map();
    listChart.set('dayChart_1', 13);
    listChart.set('dayChart_2', 55);
    listChart.set('dayChart_3', 27);
    listChart.set('dayChart_4', 69);
    listChart.set('dayChart_5', 31);

    listChart.forEach(function (value, id) {

        new Chart(document.getElementById(id), {
            type: 'doughnut',
            data: {
                labels: ['Hoàn thành', 'Chưa hoàn thành'],
                datasets: [{
                    label: 'KPI',
                    data: [100 - value, value],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        display: false // Ẩn trục x
                    },
                    y: {
                        display: false // Ẩn trục y
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    // tooltip: {
                    //   enabled: false
                    // }
                }
            }

        });
    });
    $('.filter').click(function () {
        $(".filter-option").stop().slideToggle();
    })
    $('.kpi-status-item').click(function () {
        let id = $(this).attr('id');
        let self = this;
        $.ajax({
            url: '/KPI/list_kpi/status', // 
            type: 'GET',
            data: { id: id },
            success: function (data) {
                $('#kpi-table').html(data.html);
                $('.kpi-status-item').removeClass('kpi-status-active')
                $(self).addClass('kpi-status-active');
            },
            error: function (error) {
                console.log(error);
            },
            complete: function () {

            }
        });
    });
    $(".add-kpi").click(function () {
        $("#modal-create-kpi").stop().fadeToggle();
    })
    $(".btn-close").click(function () {
        $(".modal").stop().fadeOut();
    })
    $("#kpi-table").on('click', ".detail-kpi", function () {
        $("#modal-detail-kpi").stop().fadeToggle();
    })
    $(".update-kpi").click(function () {
        $("#modal-detail-kpi").stop().fadeToggle();
    })
});