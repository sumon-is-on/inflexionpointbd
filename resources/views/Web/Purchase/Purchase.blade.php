@extends('Backend.master')
@section('content')
<div class="row">
    <h1 class="text-center text-primary">Purchase Product</h1>
</div>
<div class="mt-5">
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Available Quantity</th>
                    <th scope="col">Price</th>
                    @if (auth()->user())
                    <th scope="col">Purchase</th>
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
    </div>

</div>
@endsection
