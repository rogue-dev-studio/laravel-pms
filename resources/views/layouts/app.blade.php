<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.singkatan') }} | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">
</head>

<body class="{{ Request::is('blank-page') ? 'color-light' : '' }}">
    @include('backend.components.loader')

    @yield('contents')

    @if (Request::is('/') || Request::is('projects') || Request::is('task') || Request::is('employee') || Request::is('desk') || Request::is('calender') || Request::is('authentication*') || Request::is('forms*') || Request::is('pricing*') || Request::is('chart*') || Request::is('contact*') || Request::is('table*') || Request::is('ui-elements*') || Request::is('user-details*'))
        @include('backend.components.modal')
    @endif

    @if (Request::is('/') || Request::is('projects') || Request::is('task') || Request::is('employee') || Request::is('desk') || Request::is('calender') || Request::is('authentication*') || Request::is('forms*') || Request::is('pricing*') || Request::is('chart*') || Request::is('contact*') || Request::is('table*') || Request::is('ui-elements*') || Request::is('user-details*'))
        @include('backend.components.footer')
    @endif





    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>

    <script src="../assets/vendor/moment.min.js"></script>
</body>

</html>
