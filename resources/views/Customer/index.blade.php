@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body shadow">
              <div class="mb-3">
                <a href="{{ route('customer.create') }}" class="btn btn-outline-success">
                    <i class="fas fa-plus"></i>
                </a>
              </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>

                  <!--  read data from database  --> 

                    <tbody>
                      @foreach ($customers as $customer )
                      <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>
                            <!-- font awesome & bootstrip icon -->
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-outline-warning me-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form method="POST" action="{{ route('customer.destroy',$customer->id) }}" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                   <button href="" class="btn btn-outline-danger"onclick="return confirm('Are you sure?')">
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
