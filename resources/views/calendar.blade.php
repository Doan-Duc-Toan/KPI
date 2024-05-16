@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <div id="calendar-content">
        <div id='calendar'></div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
@endsection
