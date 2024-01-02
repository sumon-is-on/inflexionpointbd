@extends('Backend.master')
@section('content')
<div class="mt-3">
    <h1 class=" text-3xl">Category Index</h1>
</div>
<div class="mt-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Available Quantity</th>
                    <th>Price</th>
                    @if (auth()->user())
                    <th>Purchase</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr class="">
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->Categories->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    @if (auth()->user())
                    <td><a href="{{ route('product.purchase.save',$item->id) }}" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->links() !!}
    </div>
</div>
@endsection
