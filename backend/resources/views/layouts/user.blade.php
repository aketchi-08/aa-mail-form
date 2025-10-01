<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'ユーザーダッシュボード')</title>
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <!-- Bootstrap JS & jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body id="page-top">

<div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.user.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @auth
                @include('layouts.user.topbar')
            @endauth
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>
