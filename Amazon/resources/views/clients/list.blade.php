@extends('layout.master')

@section('page-title')
Clients List
@endsection

@section('page-content')

<h1 class="display-1 my-5 text-primary">Clients List</h1>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Birthdate</th>
        <th>Address</th>
        <th>City</th>
        <th>Actions</th>
    </tr>
    @foreach($client as $client)
    <tr>
        <td><img src="{{asset('storage/clients/'.$client->image) }}" alt="" style="width: 80px; border-radius:70px;"></td>
        <td>{{$client->name}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->b_date}}</td>
        <td>{{$client->address}}</td>
        <td>{{$client->city_id}}</td>
        <td>
            <a href="/clients/{{$client->id}}" class="btn btn-primary">View</a>
            <a href="/clients/{{$client->id}}" class="btn btn-secondary">Edit</a>
            <form style="display: inline-block;" action="/clients/{{$client->id}}" method="post">@method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection