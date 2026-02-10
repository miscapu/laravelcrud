@extends('Layouts.Main')

@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@endsection

@section('content')

    <h1 class="modal-title text-center my-5">{{$title}}</h1>
    <a href="{{route('Pages.Products.create')}}" class="btn btn-primary">Create Product</a>
    {{--Table Bootstrap 5.3--}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="{{route('Pages.Products.show', $product->id)}}" class="btn btn-info btn-sm badge">View</a>
                <a href="{{route('Pages.Products.edit', $product)}}" class="btn btn-primary btn-sm badge">Edit</a>
                <form action="{{route('Pages.Products.destroy', $product)}}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger badge btn-sm" onclick="return confirm('Delete?')">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{--Table Bootstrap 5.3 end--}}

@endsection
