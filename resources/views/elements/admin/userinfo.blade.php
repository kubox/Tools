<!-- User image -->
<li class="user-header">
    <p>
        Member Infomation Message
        <small>ID:{{ $user->id }}  {{ $user->name }}</small>
    </p>
</li>
<!-- Menu Body -->
<li class="user-body">
    <div class="col-xs-4 text-center">
        <a href="#">menu</a>
    </div>
    <div class="col-xs-4 text-center">
        <a href="#">menu</a>
    </div>
    <div class="col-xs-4 text-center">
        <a href="#">menu</a>
    </div>
</li>

<!-- Menu Footer-->
<li class="user-footer">
    <div class="pull-left">
        <a href="#" class="btn btn-default btn-flat">Edit</a>
    </div>
    <div class="pull-right">
        <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#logout">
            Sign out
        </button>
    </div>
</li>