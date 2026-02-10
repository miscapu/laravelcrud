@extends('Layouts.Main')

@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@endsection

@section('content')

    <h1 class="modal-title my-5 text-center">{{$title}}</h1>

    {{--Form Bootstrap 5.3--}}
    <form method="post" action="{{route('Pages.Products.update', $product)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name', $product)}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" value="{{old('price', $product)}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{--Form Bootstrap 5.3 end--}}

@endsection
