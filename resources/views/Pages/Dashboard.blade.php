@extends('Layouts.Main')

@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@endsection

@section('content')

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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>12.1.1</td>
            <td>12.1.1</td>
            <td>
                <a href="#" class="btn btn-info btn-sm badge">View</a>
                <a href="#" class="btn btn-primary btn-sm badge">Edit</a>
                <a href="#" class="btn btn-danger btn-sm badge">Delete</a>
            </td>
        </tr>

        </tbody>
    </table>
    {{--Table Bootstrap 5.3 end--}}

@endsection
