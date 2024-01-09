@extends('layout.master')

@section('page-title')
View Client
@endsection

@section('page-content')

<h1 class="display-1 my-5">Client Details</h1>
<ul class="h3">
    <li>ID: {{$client->id}}</li>
    <li>Name: {{$client->name}}</li>
    <li>Phone: {{$client->phone}}</li>
    <li>Birthdate: {{$client->b_date}}</li>
    <li>Address: {{$client->address}}</li>
    <li>City: {{$client->city_id}}</li>
</ul>
<a href="/clients" class="btn btn-secondary">Back to List</a>

@endsection