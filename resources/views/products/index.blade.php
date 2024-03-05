@extends('layout.app')
@section('main')



    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-view-list"></i>Product Details</h5>
        <a href="products/create" class="btn btn-primary" > <i class="bi bi-plus-circle"></i> New Product </a>
    </div>
    <div class="col-md-12 table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Serial No</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="products/{{$product->image}}" style="width: 100px; height: 100px; object-fit: cover;" alt="product"></td>
                <td><a href="products/{{$product->id}}/show"> {{$product->name}} </a></td>
                <td>${{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="products/{{$product->id}}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="products/{{$product->id}}/delete" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
    </div>



@endsection