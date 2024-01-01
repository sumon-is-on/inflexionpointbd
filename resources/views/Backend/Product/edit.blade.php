@extends('Backend.master')
@section('content')
<div class="m-5" >
    <h1 class="text-3xl ">Update Product</h1>
</div>
<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="w-50">
    @method('PUT')
    @csrf
    <div class="m-5">
        @includeIf('Backend.Product.fields')
    </div>
    <div class="form-group mt-5">
        <a href="{{ route('product.index') }}" class="btn btn-warning">Cancel</a>
        <button type="submit" class="btn btn-success ml-2">Update</button>
    </div>
</form>
@endsection
