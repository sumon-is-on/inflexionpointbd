@extends('Backend.master')
@section('content')
<div class="mt-3">
  <h1 class=" text-3xl">Product Index</h1>
</div>

<div class="flex mt-4">
    <form action="{{ route('product.index') }}" method="GET" class="d-flex align-items-center">
        @csrf
        <div class="mr-2">
            <input type="text" value="{{ $search  }}" class="form-control" name="search" placeholder="Search for a product">
        </div>
        <div class="mr-2">
            <a href="{{ route('product.index') }}">
                <button class=" form-control btn btn-secondary" type="button" title="Refresh page">Refresh</button>
            </a>
        </div>
        <div>
            <a href="{{ route('product.create') }}">
                <button type="button" class="form-control btn btn-info">Product +</button>
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
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="text-uppercase">{{ $data->name }}</td>
                <td>
                    <img src="{{ url('/products/'.$data->image)}}" class="img-fluid rounded-circle" width="35px">
                </td>
                <td>{{ $data->Categories->name }}</td>
                <td class="text-uppercase">{{ $data->price }}</td>
                <td class="text-uppercase">{{ $data->quantity }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <div>
                            <a href="{{ route('product.edit',$data->id) }}" class="btn btn-outline-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-info">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('product.destroy', $data->id) }}" method="POST">
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
