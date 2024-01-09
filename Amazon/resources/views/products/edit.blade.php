@extends('layout.master')

@section('page-title')
Edit Product
@endsection

@section('page-content')
<h1 class="display-1 my-5 text-primary">Edit Product</h1>
<form class="row" action="/products/{{ $product->id }}" method="post">
    @method('PUT')
    <div class="col-12">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control mt-1 mb-4">
    </div>
    <div class="col-12">
        <label for="name">Product Description</label>
        <!-- <input type="text" name="description" id="description" class="form-control mt-1 mb-4"> -->
        <textarea name="description" id="description" cols="30" rows="10" class="form-control mt-1 mb-4">{{$product->description}}</textarea>
    </div>
    <div class="col-6">
        <label for="name">Product Cost</label>
        <input type="number" name="cost" id="cost" value="{{$product->cost}}" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Price</label>
        <input type="number" name="price" id="price" value="{{$product->price}}" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Stock</label>
        <input type="number" name="stock" id="stock" value="{{$product->stock}}" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Category</label>
        <input type="text" name="category_id" id="category_id" value="{{$product->category_id}}" class="form-control mt-1 mb-4">
    </div>
    <div class="col-12 text-center">
        <!-- <input name="id" id="id" type="text" value="{{$product->id}}"> -->
        <button type="submit" class="btn btn-primary my-4">Save Changes</button>
        <a href="{{route('products.list')}}" class="btn btn-secondary">Back to List</a>
    </div>
</form>
@endsection