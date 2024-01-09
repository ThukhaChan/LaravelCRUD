@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form method="POST" action="{{ route('customer.update',$customer->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $customer->name}}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Age</label>
                                <input type="age" name="age" class="form-control" value="{{ $customer->age}}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <input type="address" name="address" class="form-control" value="{{ $customer->address }}">
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('customer.index') }}" class="btn btn-outline-dark">
                                    {{-- <i class="fa-solid fa-backward"></i> --}}Back
                                </a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
