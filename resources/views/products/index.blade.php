<!-- @extends('layouts.app')

@section('main') -->

<div class="container ">
    <div class="text-right">
        <a href="product/create" class="btn btn-dark mt-4">Create Product</a>
    </div>

</div>

<div class="container">

    <div class="row">



        <div class="col-lg-6 m-auto bg-light p-3">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
            <form action="/products/store" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{old('producttitle')}}" placeholder="Enter Product Name" name="producttitle">
                    <!-- Way 2: Display Error Message -->
                    @if ($errors->has('producttitle'))
                    <span class="text-danger">{{ $errors->first('producttitle') }}</span>
                    @endif

                </div>

                <div class="mb-3">
                    <label for="product-description" class="form-label">Product Description</label>
                    <textarea class="form-control" name="productdescription" id="" cols="20" rows="4">{{old('productdescription')}} </textarea>
                    @if ($errors->has('productdescription'))
                    <span class="text-danger">{{ $errors->first('productdescription') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input class="form-control" name="image" type="file" src="" alt="">
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-dark">Submit </button>
        </div>
    </div>
</div>

@endsection