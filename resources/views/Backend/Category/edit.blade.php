@extends('Backend.master')
@section('content')
<div class="m-5" >
    <h1 class="text-3xl ">Update Category</h1>
</div>
<form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="w-50">
    @method('PUT')
    @csrf
    <div class="m-5">
        @includeIf('Backend.Category.fields')
        <div class="form-group mt-5">
            <a href="{{ route('category.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success ml-2">Update</button>
        </div>
    </div>
</form>
@endsection
