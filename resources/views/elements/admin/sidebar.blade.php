 <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

        <li class="header">NAVIGATION 1</li>
        <!-- todo 選択中機能のアクティブオープン -->
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="/admin/dashboard"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
        </li>

        <li class="header">NAVIGATION 2</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>NAVIGATION 2</span>
                <span class="label label-primary pull-right">4</span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/"><i class="fa fa-circle-o"></i> menu 1</a></li>
                <li><a href="/"><i class="fa fa-circle-o"></i> menu 2</a></li>
                <li><a href="/"><i class="fa fa-circle-o"></i> menu 3</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="header">アカウントメニュー</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span>アカウント管理</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview">
                    <a href="{{ route('admin.account.index') }}">
                        <i class="fa fa-users"></i>
                        <span>一覧で見る</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ route('admin.account.create') }}">
                        <i class="fa fa-user-plus"></i>
                        <span>登録する</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>