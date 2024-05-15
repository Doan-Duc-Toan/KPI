
const ctx2 = document.getElementById('weekChart');

new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['T11', 'T12', 'T1', 'T2', 'T3', 'T4', 'T5'],
        datasets: [{
            label: 'KPI từng tháng',
            data: [12, 19, 3, 5, 2, 3, 11],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


