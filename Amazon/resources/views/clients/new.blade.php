@extends('layout.master')

@section('page-title')
New Client
@endsection

@section('page-content')
<h1 class="display-1 my-5 text-primary">New Client</h1>
<form action="/clients" class="row" method="post" enctype="multipart/form-data">
    <div class="col-12">
        <label for="">Client Profile Picture</label>
        <input type="file" class="form-control mt-1 mb-4" name="image" id="image">
    </div>
    <div class="col-12">
        <label for="">Client Name</label>
        <input type="text" class="form-control mt-1 mb-4" name="name" id="name">
    </div>
    <div class="col-6">
        <label for="">Client Phone</label>
        <input type="number" class="form-control mt-1 mb-4" name="phone" id="phone">
    </div>
    <div class="col-6">
        <label for="">Client Birth</label>
        <input type="date" class="form-control mt-1 mb-4" name="b_date" id="b_date">
    </div>
    <div class="col-12">
        <label for="">Client Address</label>
        <input type="text" class="form-control mt-1 mb-4" name="address" id="address">
    </div>
    <div class="col-6">
        <label for="">Client City</label>
        <input type="text" class="form-control mt-1 mb-4" name="city_id" id="city_id">
    </div>
    <div class="col-12 textcenter">
        <button type="submit" class="btn btn-primary">Add Client</button>
        <a href="/clients" class="btn btn-secondary">Back to List</a>
    </div>
</form>
@endsection