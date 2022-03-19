<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        $products->cate_id = $request->input('cate_id');
        $products->origin = $request->input('origin');
        $products->destination = $request->input('destination');
        $products->available_seat = $request->input('available_seat');
        $products->pickup_location = $request->input('pickup_location');
        $products->departure_time = $request->input('departure_time');
        $products->price = $request->input('price');
        $products->product_status = $request->input('product_status')  == TRUE ? '1':'0';
        $products->save();
        return redirect('products')->with('status',"vehicle add successful");
    }
}
