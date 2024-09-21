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
    @if(session('message'))
   `` {{ session('message') }}   
    @endif
    <h1 class="" >Danh sách sản phẩm</h1>
    <a href="{{ route('admin.products.addProduct')}}" class="btn btn-info">Thêm mới</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Image</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProduct as $key => $value)
                <tr>
                    <td>{{$key + 1 }}</td>
                    <td>{{$value->name }}</td>
                    <td>{{$value->price }}</td>
                    <td>
                        <img src="{{asset($value->image)}}" alt="">
                    </td>
                     <td>
                       <a href="{{route('admin.products.detailProduct', $value->id)}}">Chi tiết</a>
                        <button class="btn btn-warning">Sửa</button>
                        <button class="btn btn-danger">Xóa</button>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    <script>

    </script>   
@endpush
