@extends('Backend.master')
@section('content')
<div class="mt-3">
  <h1 class=" text-3xl">User Index</h1>
</div>

<div class="flex mt-4">
    <form action="{{ route('user.index') }}" method="GET" class="d-flex align-items-center">
        @csrf
        <div class="mr-2">
            <input type="text" value="{{ $search }}" class="form-control" name="search" placeholder="Search for a user">
        </div>
        <div class="mr-2">
            <a href="{{ route('user.index') }}">
                <button class=" form-control btn btn-secondary" type="button" title="Refresh page">Refresh</button>
            </a>
        </div>
        <div>
            <a href="{{ route('user.create') }}">
                <button type="button" class="form-control btn btn-info">User +</button>
            </a>
        </div>
    </form>
</div>

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Image</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-uppercase">{{ $user->name }}</td>
                <td>
                    <img src="{{ url('/users/'.$user->image)}}" class="img-fluid rounded-circle" width="35px">
                </td>
                <td>{{ $user->email }}</td>
                <td class="text-uppercase">{{ $user->phone }}</td>
                <td class="text-uppercase">{{ $user->address }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <div>
                            <a href="{{ route('user.edit',$user->id) }}" class="btn btn-outline-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete it ?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <div class="float-right">
            {!! $users->links() !!}
        </div>
    </table>
</div>

@endsection
