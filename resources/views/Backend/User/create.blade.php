@extends('Backend.master')
@section('content')
<div class="ml-5 mt-10 mb-10">
    <h1 class="text-5xl">Add User</h1>
</div>
<div class="m-5">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @includeIf('Backend.User.fields')
        <div class=" flex">
            <div class=" mt-4">
                <label for="password" class="block mb-2  font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" value="{{old('password',$user->address)}}">
            </div>
        </div>
        <div class="flex mt-5">
            <a href="{{ route('backend.user.index') }}" type="submit" class="btn btn-warning">cancel</a>

            <button type="submit" class=" btn btn-success">Add</button>
        </div>
    </form>
</div>
@endsection
