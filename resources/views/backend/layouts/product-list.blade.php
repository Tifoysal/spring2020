@extends('backend.master')

@section('content')


@if(auth()->user()->role==='admin')
    <a href="{{route('product.create.form')}}" class="btn btn-success">Create New Product</a>
@endif
<p>this is product list</p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
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
            <td>
                <img style="width: 20px;" src="{{url('/uploads/product/'.$single_data->product_image)}}" alt="kodeeo">
            </td>
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->category->name}}</td>
            <td>{{$single_data->price}}</td>
            <td>
                @if(auth()->user()->role==='admin')
                <a href="{{route('product.edit',$single_data->id)}}" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                @endif
                <a href="" class="btn btn-success">View</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
