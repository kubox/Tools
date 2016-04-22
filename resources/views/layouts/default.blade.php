<!DOCTYPE html>
<html>
<head>
    @include('elements.header')
</head>

<!-- REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo -->
                    @include('elements.logo')
                </div>

                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                </div><!-- /.navbar-collapse -->

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                </div><!-- /.navbar-custom-menu -->

            </div><!-- /.container-fluid -->
        </nav>
    </header>

    <div class="content-wrapper">
        <div class="container">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @include('elements.contentheader')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section><!-- /.content -->

        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="container">
            @include('elements.footer')
        </div><!-- /.container -->
    </footer>

</div><!-- ./wrapper -->

@include('elements.jquery')

</body>
</html>