@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">アカウント一覧</h3>
                </div>

                <div class="box-body table-responsive no-padding">

                    @if ($success)
                        <div class="col-sm-11">
                            <div class="callout callout-success" role="alert">
                                <p>{{ $success }}</p>
                            </div>
                        </div>
                    @endif

                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>最終更新</th>
                            <th>登録日時</th>
                            <th>機能</th>
                        </tr>
                        @forelse($page as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->update_at }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <form class="form-horizontal" id="formEdit" role="form" method="GET" action="{{ route('admin.account.edit', [$row->id]) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-info btn-sm pull-left margin">編集する</button>
                                </form>

                                <button type="submit" class="btn btn-warning btn-sm pull-left margin" data-toggle="modal" data-target="#destroy">削除する</button>

                                <div class="dialog-modal">
                                    <div class="modal fade" id="destroy" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">削除の確認</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{ $row->id }} のアカウントを削除してもよろしいですか？</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">キャンセル</button>
                                                    <form class="form-horizontal" id="formDestroy" role="form" method="POST" action="{{ route('admin.account.destroy', [$row->id]) }}">
                                                        {!! method_field('delete') !!}
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-warning">削除する</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3">登録アカウントがありません</td>
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