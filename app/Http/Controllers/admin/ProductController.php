<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function listProduct()
  {
    $listProduct = Product::all();
    return view('admin.products.list-product')->with([
      'listProduct' => $listProduct
    ]);
  }

  public function addProduct()
  {
    return view('admin.products.add-product');
  }


  public function addPostProduct(Request $request)
  {
    $linkImage = '';

    // kiểu tra có đây file lên không 
    if ($request->hasFile('imageSP')) {
      $image = $request->file('imageSP');  // lấy file đẩy lên

      $newName = time() . '.' . $image->getClientOriginalExtension();
      $linkStorage = 'image-product/';
      $image->move(public_path($linkStorage), $newName);   // vị trí lưu ảnh

      $linkImage = $linkStorage . $newName;
    }
    $data = [
      'name' => $request->nameSP,
      'price' => $request->priceSP,
      'image' => $linkImage,
    ];

    Product::create($data);
    return redirect()->route('admin.products.listProduct')->with([
      'message' => 'Thêm sản phẩm thành công'
    ]);
  }
}
