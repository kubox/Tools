<p class="login-box-msg"></p>

<form class="form-horizontal" role="form" method="POST" action="{{ route('post.login') }}">
    {{-- CSRF対策--}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @if (count($errors) > 0)
        <div class="callout callout-warning" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="callout callout-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            {{{ session('message') }}}
        </div>
    @endif

    <div class="form-group has-feedback @if($errors->first('name'))has-error @endif">
        <input type="text" class="form-control" placeholder="名前を入力してください" name="name" value="{{ old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback @if($errors->first('password'))has-error @endif">
        <input type="password" class="form-control" placeholder="パスワードを入力してください" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <p class="login-box-msg"></p>

    <div class="row">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
    </div>
</form>