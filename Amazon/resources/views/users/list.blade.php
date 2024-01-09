@extends('layout.master')

@section('page-title')
Users List
@endsection

@section('page-content')

<h1 class="display-1 my-5 text-primary">Users List</h1>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>Name</th>
        <th>Email Address</th>
        <th>Actions</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-secondary">Edit</a>
            <form style="display: inline-block;" action="" method="post">@method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection