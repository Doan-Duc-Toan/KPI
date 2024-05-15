$(document).ready(function () {
    $(".owl-carousel").owlCarousel();

    let listChart = ["dayChart-1", "dayChart-2", "dayChart-3", "dayChart-4", "dayChart-5"];
    listChart.forEach(function (id) {

        new Chart(document.getElementById(id), {
            type: 'doughnut',
            data: {
                labels: ['Hoàn thành', 'Chưa hoàn thành'],
                datasets: [{
                    label: 'KPI',
                    data: [50, 50],
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
});