@extends('layout.master')

@section('page-title')
View Product
@endsection

@section('page-content')

<h1 class="display-1 my-5">Product Details</h1>
<ul class="h3">
    <li>ID: {{$product->id}} </li>
    <li>Name: {{$product->name}} </li>
    <li>Description: {{$product->description}} </li>
    <li>Cost: {{$product->cost}} </li>
    <li>Price: {{$product->price}} </li>
    <li>Stock: {{$product->stock}} </li>
    <li>Category: {{$product->category_id}} </li>
</ul>
<a href="/products" class="btn btn-secondary">Back to List</a>

@endsection