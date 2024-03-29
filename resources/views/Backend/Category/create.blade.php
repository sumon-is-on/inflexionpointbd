@extends('Backend.master')
@section('content')
<div class="ml-5 mt-10 mb-10">
    <h1 class="text-5xl">Add Category</h1>
</div>
<div class="m-5">
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
        @csrf
        @includeIf('Backend.Category.fields')
        <div class="form-group mt-5">
            <a href="{{ route('category.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success ml-2">Add</button>
        </div>
    </form>
</div>
@endsection
