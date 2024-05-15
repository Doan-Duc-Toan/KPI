$(document).ready(function () {
    const ctx1 = document.getElementById('chart-kpi-month');

    new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Đã xong', 'Đang thực hiện', 'Đã hủy'],
            datasets: [{
                data: [12, 19, 3],
                borderWidth: 1,
                backgroundColor: [
                    '#17dbcc',
                    'rgb(54, 162, 235)',
                    '#bdc3c7'
                ],
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
            maintainAspectRatio: false, // Đặt false để cho phép kích thước tùy chỉnh
            responsive: true, // Biểu đồ sẽ điều chỉnh kích thước dựa trên kích thước của container
            plugins: {
                // legend: {
                //     display: false
                // },
                // tooltip: {
                //   enabled: false
                // }
            }
        }
    });


    const ctx2 = document.getElementById('chart-kpi-year');

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'],
            datasets: [{
                label: 'KPI trong tháng',
                data: [12, 19, 26, 5, 31],
                borderWidth: 1,
                backgroundColor: [
                    '#3b39b1',
                ],
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            maintainAspectRatio: false, // Đặt false để cho phép kích thước tùy chỉnh
            responsive: true // Biểu đồ sẽ điều chỉnh kích thước dựa trên kích thước của container
        }
    });
})