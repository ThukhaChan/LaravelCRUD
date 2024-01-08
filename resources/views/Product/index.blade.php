@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body shadow">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>

                  <!--  read data from database  --> 

                    <tbody>
                      @foreach ($products as $product )
                      <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <!-- font awesome & bootstrip icon -->
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-warning me-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form method="POST" action="{{ route('product.destroy',$product->id) }}" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                   <button href="" class="btn btn-outline-danger">
                                     <i class="fa-solid fa-trash"></i>
                                   </button>
                                </form>
                            </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
