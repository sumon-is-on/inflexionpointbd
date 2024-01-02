@extends('Backend.master')
@section('content')
<div class=" container ml-5 mt-10 mb-10">
    <h1 class="text-5xl">Add Product</h1>
</div>

<div class=" container m-5">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
        @csrf
        @includeIf('Backend.Product.fields')
        <div class="form-group mt-5">
            <a href="{{ route('product.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success ml-2">Add</button>
        </div>
    </form>
</div>

<div class="container flex m-5">
    <form action="{{ route('product.import') }}" method="post" enctype="multipart/form-data" class="d-flex align-items-center">
        @csrf
        <div class="mr-2">
            <label for="file" class="form-label" style="font-size: larger; font-weight:bold">Insert an Excel file to upload Product</label>
            <input type="file" class="form-control" name="file" id="file" aria-describedby="fileHelpId" required/>
        </div>
        <div style="margin-top: 30px">
            <button type="submit" class="btn btn-warning form-control">Import</button>
        </div>
    </form>
</div>
@endsection
