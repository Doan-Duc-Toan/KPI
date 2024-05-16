$(document).ready(function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        editable: true, // Cho phép kéo thả và chỉnh sửa sự kiện
        selectable: true, // Cho phép chọn khoảng thời gian trên lịch
        dayMaxEventRows: 3,
        events: [
            // Danh sách các sự kiện
            { title: 'Thi cuối kỳ giải tích 3', date: '2024-05-20' },
            { title: 'Học tiếng anh', date: '2024-05-21' },
            {
                title: 'Ăn sinh nhật bạn bè',
                start: '2024-05-16T19:00:00', // Thời gian bắt đầu 7 tối
                end: '2024-05-16T22:00:00', // Thời gian kết thúc
                color: 'blue' // Màu sắc cho sự kiện này
            },
            {
                title: 'Học Nhật tại trung tâm',
                start: '2024-05-16T16:00:00', // Thời gian bắt đầu 4 chiều
                end: '2024-05-16T17:00:00', // Thời gian kết thúc
                color: 'green' // Màu sắc cho sự kiện này
            },
            {
                title: 'Báo cáo đồ án môn học',
                start: '2024-05-16T19:00:00', // Thời gian bắt đầu 7 tối
                end: '2024-05-16T22:00:00', // Thời gian kết thúc
                color: 'blue' // Màu sắc cho sự kiện này
            },
            {
                title: 'Mendan với Công ty Sun',
                start: '2024-05-16T16:00:00', // Thời gian bắt đầu 4 chiều
                end: '2024-05-16T17:00:00', // Thời gian kết thúc
                color: 'green' // Màu sắc cho sự kiện này
            },
            {
                title: 'Ăn tối với đồng nghiệp',
                start: '2024-05-19T12:00:00', // Thời gian bắt đầu 4 chiều
                end: '2024-05-19T15:00:00', // Thời gian kết thúc
                color: 'green' // Màu sắc cho sự kiện này
            },
            { title: 'Ngủ', date: '2024-05-01' },
            { title: 'Đi ăn với đối tác', date: '2024-05-01' },
            { title: 'Ngủ', date: '2024-05-07' },
            { title: 'Nộp bài tập lớn', date: '2024-05-01' }
        ],
        eventDrop: function(info) {
            // Xử lý khi một sự kiện được di chuyển
        }
    });
    calendar.render();
});