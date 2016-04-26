@extends('layouts.default')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">ログイン</h3>
            </div><!-- /.box-header -->

            <form class="form-horizontal" role="form" method="POST" action="/auth/login">
                {{-- CSRF対策--}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @if (count($errors) > 0)
                    <div class="callout callout-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="box-body">
                    <div class="form-group @if($errors->first('name'))has-error @endif">
                        <label for="inputName" class="col-sm-2 control-label">名前</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="名前を入力してください" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group @if($errors->first('password'))has-error @endif">
                        <label for="inputPassword" class="col-sm-2 control-label">パスワード</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力してください" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> パスワードを記憶する
                                </label>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-info form-control">ログイン</button>
                </div><!-- /.box-footer -->
            </form>

        </div><!-- /.box -->
    </div>

@endsection