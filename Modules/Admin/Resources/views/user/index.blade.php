@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Thành viên</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lý thành viên</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên hiển thị</th>
                <th>email</th>
                <th>Phone</th>
                <th>Avatar</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($users))
                    @foreach($users as $user)
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <img src="{{ pare_url_file($user->avatar) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
                        </td>
                        <td>
                            <a style="padding: 5px 10px;border: 1px  #999" href="{{ route('admin.get.edit.product',$user->id) }}"><i class="fas fa-pen" style="font-size: 11px"></i> Cập nhật</a>
                            <a style="padding: 5px 10px;border: 1px  #999" href="{{ route('admin.get.action.product',['delete',$user->id]) }}"><i class="fas fa-trash-alt" style="font-size: 11px"></i> Xóa</a>
                        </td>
                        </tr>
                    @endforeach
                    @endif
            </tbody>
        </table>
    </div>
@stop
