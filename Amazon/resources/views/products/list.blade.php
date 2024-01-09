@extends('layout.master')

@section('page-title')
Products List
@endsection

@section('page-content')

<h1 class="display-1 my-5 text-primary">Products List</h1>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>Name</th>
        <th>Cost</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
    @foreach($products as $prod)
    <tr>
        <td>{{$prod->name}}</td>
        <td>{{$prod->cost}}</td>
        <td>{{$prod->price}}</td>
        <td>{{$prod->stock}}</td>
        <td>{{$prod->category_id}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('products.view',$prod->id)}}">View</a>
            <a class="btn btn-secondary" href="{{route('products.edit',$prod->id)}}">Edit</a>
            <form style=" display: inline-block;" action=" {{route('products.delete', $prod->id)}}" method="post">@method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection