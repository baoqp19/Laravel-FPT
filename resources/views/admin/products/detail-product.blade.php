@extends('admin.layouts.default');


@section('title')
    @parent
    Chi tiết sản phẩm
@endsection


@push('styles')
    
@endpush

@section('content')
    <div class="p-4 " style="min-height: 200px">
        <p>
            Tên sản phẩm:
            <span class="font-weight-bold">{{$product->name}}</span>
        </p>
        <p>
            Giá sản phẩm:
            <span class="font-weight-bold">{{$product->price}}</span>
        </p>
        <p>
            Ảnh sản phẩm: 
            <img src="{{asset($product->image)}}" alt="" class="img-product">
        </p>
        
            
        </form>
    </div>
@endsection