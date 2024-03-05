@extends('layout.app')
@section('main')



    <h5><i class="bi  bi-plus-square-fill"></i>Add New Product</h5>
    <hr>
    <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Add New Product</li>
        </ol>
    </nav>

    <div class="col-md-8">
        <form action="/products/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control
                                {{-- validation --}}
                    @if ($errors->has('name'))  {{'is-invalid'}} @endif"
                    placeholder="Enter the product name" value="{{old('name')}}">
                            {{-- to display that the name field is required --}}
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">{{$errors->first("name")}}</div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="price" class="form-label">Price in $</label>
                    <input type="text" name="price" id="price" class="form-control
                    @if ($errors->has('price'))  {{'is-invalid'}} @endif" 
                    placeholder="Enter the price" value="{{old('price')}}">
                            {{-- to display that the price field is required --}}
                    @if ($errors->has('price'))
                    <div class="invalid-feedback">{{$errors->first("price")}}</div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control
                    @if ($errors->has('description'))  {{'is-invalid'}} @endif"
                    id="description" cols="30" rows="10" style="resize: none;" placeholder="Enter the description" value="{{('description')}}" ></textarea>
                    @if ($errors->has('description'))
                    <div class="invalid-feedback">{{$errors->first("description")}}</div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control
                    @if ($errors->has('image'))  {{'is-invalid'}} @endif" >
                    @if ($errors->has('image'))
                    <div class="invalid-feedback">{{$errors->first("image")}}</div>
                    @endif
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save Product</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>

        </form>
    </div>





@endsection