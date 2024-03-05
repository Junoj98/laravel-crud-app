@extends('layout.app')
@section('main')



<h5><i class="bi bi-eye"></i>Product Details</h5>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">view Product</li>
    </ol>
</nav>

<div class="col-md-6">
<div class="card text-center">
    <img  src="/products/{{$product->image}}" alt="{{$product->name}}" class="img-fluid rounded-start" >

    <div class="card-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>
        <p class="card-text text-secondary">{{$product->description}}.</p>
        <p class="fw-bold">Price <small class="text-success">${{$product->price}}</small></p>
    </div>
</div>
</div>

{{-- <div class="card text-center">
    <img  src="/products/{{$product->image}}" alt="{{$product->name}}" class="img-fluid rounded-start" >

    <div class="card-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>
        <p class="card-text text-secondary">{{$product->description}}.</p>
        <p class="fw-bold">Price <small class="text-success">${{$product->price}}</small></p>
    </div>
</div> --}}



@endsection