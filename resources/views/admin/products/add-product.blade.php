@extends('admin.layouts.default');


@section('title')
    @parent
    Thêm mới sản phẩm
@endsection


@push('styles')
    
@endpush

@section('content')
    <div class="p-4 " style="min-height: 200px">
        <form action="{{route('admin.products.addPostProduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nameSP">Tên sản phẩm</label>
                <input type="text" id="nameSP" name="nameSP" class="form-control">
            </div>
            <div>
                <label for="priceSP">Giá sản phẩm</label>
                <input type="number" id="priceSP" name="priceSP" class="form-control">
            </div> 
            <div>
                <label for="imageSP">Ảnh sản phẩm</label>
                <input type="file" id="imageSP" name="imageSP" class="form-control">
            </div>
            <button class="btn btn-success">Thêm mới</button>
        </form>
    </div>
@endsection