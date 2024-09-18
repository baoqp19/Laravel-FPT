@extends('admin.layouts.default');


@section('title')
    @parent
    Danh sách sản phẩm
@endsection

@push('styles')
    <style>
        h1{
            color: red;
        }
    </style>    
@endpush


@section('content')
<div>
    <h1 class="" >Danh sách sản phẩm</h1>
    <button class="btn btn-info">Thêm mới</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="row">1</td>
                <td >Nokia 520</td>
                <td>1500000 vnd</td>
                <td>Điện thoại mới giá ổn</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xoá</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
