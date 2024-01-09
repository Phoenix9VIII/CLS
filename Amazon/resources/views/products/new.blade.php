@extends('layout.master')

@section('page-title')
New Product
@endsection

@section('page-content')
<h1 class="diplay-1 my-5 text-primary">New Product</h1>
<form class="row" action="/products" method="post">
    <div class="col-12">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control mt-1 mb-4">
    </div>
    <div class="col-12">
        <label for="name">Product Description</label>
        <!-- <input type="text" name="description" id="description" class="form-control mt-1 mb-4"> -->
        <textarea name="description" id="description" cols="30" rows="10" class="form-control mt-1 mb-4"></textarea>
    </div>
    <div class="col-6">
        <label for="name">Product Cost</label>
        <input type="number" name="cost" id="cost" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Price</label>
        <input type="number" name="price" id="price" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Stock</label>
        <input type="number" name="stock" id="stock" class="form-control mt-1 mb-4">
    </div>
    <div class="col-6">
        <label for="name">Product Category</label>
        <input type="text" name="category_id" id="category_id" class="form-control mt-1 mb-4">
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary my-4">Add Product</button>
        <a href="/products" class="btn btn-secondary">Back to List</a>
    </div>
</form>
@endsection