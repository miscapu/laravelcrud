@extends('Layouts.Main')
@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@endsection

@section('content')
    <h1 class="modal-title my-5 text-center">{{$title}}</h1>
    <a href="{{route('Products.index')}}" class="btn btn-primary">Products List</a>
    {{--List Bootstrap 5.3--}}
    <ul class="list-group">
        <li class="list-group-item">ID: {{$product->id}}</li>
        <li class="list-group-item">Name: {{$product->name}}</li>
        <li class="list-group-item">Name: {{$product->price}}</li>
        <li class="list-group-item">Created At: {{$product->created_at}}</li>
        <li class="list-group-item">Updated At: {{$product->updated_at}}</li>
    </ul>
    {{--List Bootstrap 5.3 end--}}
@endsection
