<!DOCTYPE html>
<html>
<head>
    @include('elements.header')
</head>

<body class="hold-transition login-page">
<div class="login-box">

    <div class="login-logo">
        <a href="/">@yield('logo', config('header.logo'))</a>
    </div>

    <div class="login-box-body">
        @yield('content')
    </div>

</div>

    @include('elements.scripts')

</body>
</html>
