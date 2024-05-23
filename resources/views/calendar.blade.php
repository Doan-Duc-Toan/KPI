@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link rel="stylesheet" href="{{asset('css/calendar_res.css')}}">
    <div id="calendar-content" data-intro='Tại đây là chi tiết lịch làm việc của bạn. Bạn có thể điều chỉnh thời gian của công việc bằng cách kéo thả chúng đến các ô khác nhau.' data-step ="12">
        <div id='calendar'></div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
@endsection
