@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form method="POST" action="{{ route('customer.store') }}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name<small class="text-danger">*</small></label>
                                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{old('name')}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Age<small class="text-danger">*</small></label>
                                <input type="age" name="age" class="form-control @error('age')is-invalid @enderror" value="{{old('age')}}">
                                @error('age')
                                    <div class="text-danger">{{ $message }}></div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address<small class="text-danger">*</small></label>
                                <input type="address" name="address" class="form-control @error('address')is-invalid @enderror" value={{old('address')}}>
                                @error('address')
                                   <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 ">
                                <a href="{{ route('customer.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Submit</button>
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
