<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function create()
   {
      return view('products.new');
   }

   public function store()
   {
      $pro = new Product;
      $pro->name = request('name');
      $pro->description = request('description');
      $pro->cost = request('cost');
      $pro->price = request('price');
      $pro->stock = request('stock');
      $pro->category_id = request('category_id');
      $pro->save();
      return redirect('/products');
   }

   public function edit($id)
   {
      $product = Product::find($id);
      return view('products.edit', compact('product'));
   }

   public function update($id)
   {
      $product = Product::find($id);
      $product->name = request('name');
      $product->description = request('description');
      $product->cost = request('cost');
      $product->price = request('price');
      $product->stock = request('stock');
      $product->category_id = request('category_id');
      $product->save();
      return redirect('/products');
   }

   public function show($id)
   {
      $product = Product::find($id);
      // choose any method on those
      return view('products.show', compact('product'));
      // return view('products.show')->with(["product" => $product]);
      // return view('products.show', ["product" => $product]);
   }
   public function index()
   {
      $products = Product::all();
      return view('products.list', compact('products'));
   }

   public function destroy($id)
   {
      $product = Product::find($id);
      $product->delete();
      return redirect('/products');
   }
}
