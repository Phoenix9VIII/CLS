@extends('layout.master')

@section('page-title')
Category Products
@endsection


@section('page-content')
<h1>You're checking Category <?php echo $id; ?></h1>
<h1>You're checking Category {{ $id }}</h1>
@endsection