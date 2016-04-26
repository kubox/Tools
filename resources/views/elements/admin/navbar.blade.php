<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">User Name</span>
            </a>
            <ul class="dropdown-menu">
                @include('elements.admin.userinfo')
            </ul>
        </li>

        <!-- Control Sidebar Toggle Button -->
        <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>

    </ul>
</div>