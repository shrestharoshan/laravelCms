<!DOCTYPE html>
<html>
<head>
    <title>Web Site</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Laravel Assets -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Main JS File -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Setup Headers -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

</head>
<body>
<div class="container-fluid">
    @include('inc.modal')
    @include('inc.messages')

    <div class="row">

    @yield('main-container')
    </div>
</div>
</body>
</html>
