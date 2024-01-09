@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="mb-1 mt-3">
                        <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
