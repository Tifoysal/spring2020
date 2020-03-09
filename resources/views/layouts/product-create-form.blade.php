@extends('master')

@section('content')

    <h3>Product create form</h3>

    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
   

    <form action="{{route('product.create')}}" method="post" role="form">
        @csrf
        <div class="form-group">
            <label for="p_name">Enter Product Name</label>
            <input type="text" name="product_name" placeholder="Enter Product Name" id="p_name" class="form-control"
                   required>

        </div>

        <div class="form-group">
            <label for="p_price">Enter Product Price</label>
            <input id="p_price" name="product_price" type="number" class="form-control" required
                   placeholder="enter product price">
        </div>

        <div class="form-group">
            <label for="p_description">Description:</label>
            <textarea class="form-control" name="product_description" id="p_description"
                      placeholder="Enter Product Description"></textarea>
        </div>

        <div class="form-group">
            <label for="p_category">Select Category:</label>
            <select name="product_category" id="p_category" class="form-control">
                <option value="">--Select Category--</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
