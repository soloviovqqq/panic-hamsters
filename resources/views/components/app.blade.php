<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCamp-Creative Agency & Portfolio HTML5 Template</title>

    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/responsive.css') }}" media="all">
</head>

<style>
    .sketchfab {
        height: 100vh;
        width: 100vw;
    }

    body {
        line-height: 0;
    }
</style>

<body>
    <div class="main-page-wrapper light-bg">
        @include('components.header')

        @yield('content')

        <script src="{{ asset('theme/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </div>
</body>
</html>
