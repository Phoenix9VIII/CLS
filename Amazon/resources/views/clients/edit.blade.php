@extends('layout.master')

@section('page-title')
Edit Client
@endsection

@section('page-content')
<h1 class="display-1 my-5 text-primary">Edit Client</h1>
<form action="{{route('clients',$client->id)}}" class="row" method="post">
    @method('PUT')
    <div class="col-12">
        <label for="name">Client Name</label>
        <input class="form-control mt-1 mb-4" type="text" name="name" id="name" value="{{$client->name}}">
    </div>
    <div class="col-6">
        <label for="name">Client Phone</label>
        <input class="form-control mt-1 mb-4" type="number" name="phone" id="phone" value="{{$client->phone}}">
    </div>
    <div class="col-12">
        <label for="name">Client Address</label>
        <input class="form-control mt-1 mb-4" type="text" name="address" id="address" value="{{$client->address}}">
    </div>
    <div class="col-6">
        <label for="name">Client Birth</label>
        <input class="form-control mt-1 mb-4" type="date" name="b_date" id="b_date" value="{{$client->b_date}}">
    </div>
    <div class="col-6">
        <label for="name">Client City</label>
        <input class="form-control mt-1 mb-4" type="text" name="city_id" id="city_id" value="{{$client->city_id}}">
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary my-4">Save Changes</button>
        <a href="{{route('clients.list')}}" class="btn btn-secondary">Back to List</a>
    </div>
</form>
@endsection