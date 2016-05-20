@extends('layouts.admin')

@section('contentheader')
    <h1>
        Account
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Account</li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">アカウント編集</h3>
            </div>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.account.update', [$id]) }}">
                {!! method_field('put') !!}
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
                            <input type="text" class="form-control" id="inputName" placeholder="新しい名前を入力します" name="name" value="{{ old('name', $user->name) }}">
                        </div>
                    </div>

                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-info form-control">この内容で更新する</button>
                </div>
            </form>

        </div>
    </div>
@endsection

@section('options')
@endsection