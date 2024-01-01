@extends('Backend.master')
@section('content')
<div class="mt-3">
  <h1 class=" text-3xl">Category Index</h1>
</div>

<div class="flex mt-4">
    <form action="{{ route('category.index') }}" method="GET" class="d-flex align-items-center">
        @csrf
        <div class="mr-2">
            <input type="text" value="{{ $search  }}" class="form-control" name="search" placeholder="Search for a category">
        </div>
        <div class="mr-2">
            <a href="{{ route('category.index') }}">
                <button class=" form-control btn btn-secondary" type="button" title="Refresh page">Refresh</button>
            </a>
        </div>
        <div>
            <a href="{{ route('category.create') }}">
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
                <th>Details</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-uppercase">{{ $data->name }}</td>
                <td>{{ $data->details }}</td>
                <td class="text-uppercase">{{ $data->status == 1 ? 'Active':'Inactive' }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <div>
                            <a href="{{ route('category.edit',$data->id) }}" class="btn btn-outline-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('category.destroy', $data->id) }}" method="POST">
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
    </table>
</div>

@endsection
