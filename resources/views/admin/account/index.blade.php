@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">アカウント一覧</h3>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>登録日時</th>
                            <th>機能</th>
                        </tr>
                        @forelse($page as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.account.edit', [$row->id]) }}"><span class="label label-primary">編集する</span></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3">ブログ記事がありません</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                <div class="box-footer clearfix">
                    <div class="col-sm-5">全 {!! $page->total() !!} 件</div>
                    <div class="col-sm-7">{!! $page->render() !!}</div>
                </div>
            </div>
        </div>
    </div>
@stop
