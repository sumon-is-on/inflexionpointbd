@extends('Backend.master')
@section('content')
<div class="ml-5 mt-10 mb-10">
    <h1 class="text-5xl">Add User</h1>
</div>
<div class="m-5">
    <form action="#" method="POST" enctype="multipart/form-data" class="w-50">
        @csrf
        @includeIf('Backend.User.fields')
        <div class="form-group mt-4">
            <input type="password" name="password" class="form-control" placeholder="Password" id="password" value="{{ old('password', $user->address) }}">
        </div>
        <div class="form-group mt-5">
            <a href="{{ route('user.index') }}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success ml-2">Add</button>
        </div>
    </form>
</div>
@endsection
