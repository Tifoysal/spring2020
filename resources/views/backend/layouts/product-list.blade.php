@extends('backend.master')

@section('content')



    <a href="{{route('product.create.form')}}" class="btn btn-success">Create New Product</a>

<p>this is product list</p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_products as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->category->name}}</td>
            <td>{{$single_data->price}}</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-success">View</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
