@extends('layouts.admin')

@section('title', '第三方用户列表')

@section('nav', '第三方用户列表')

@section('description', '博客第三方用户')

@section('content')
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>用户名</th>
            <th>类型</th>
            <th>邮箱</th>
            <th>登录次数</th>
            <th>最近登录</th>
            <th>第一次登录</th>

        </tr>
        @foreach($data as $k => $v)
            <tr>
                <td>{{ $v->name }}</td>
                <td>
                    @if($v->type == 1)QQ @endif
                    @if($v->type == 2)新浪微博 @endif
                    @if($v->type == 3)github @endif
                </td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->login_times }}</td>
                <td>{{ $v->updated_at }}</td>
                <td>{{ $v->created_at }}</td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $data->links() }}
    </div>
@endsection
