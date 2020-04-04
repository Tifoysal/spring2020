@extends('backend.master')

@section('content')

    <form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
   @method('put')
        @csrf
    <div class="col-12">
        <img style="width: 60px;" src="{{url('/uploads/product/'.$product->product_image)}}" alt="product image">

        <div class="form-group">
            <label for="">Enter product name:</label>
            <input class="form-control" placeholder="Enter Product name" type="text" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="">Enter product price:</label>
            <input class="form-control" placeholder="Enter Product price" type="number" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="">Enter product description:</label>
            <textarea placeholder="Enter description" class="form-control" name="description" id="" >{{$product->description}}</textarea>
            </div>
        <div class="form-group">
            <label for="">Upload Image:</label>
            <input type="file" name="product_image" class="form-control">
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </div>
    </form>
    @endsection
