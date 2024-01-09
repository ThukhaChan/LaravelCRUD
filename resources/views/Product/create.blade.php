@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form method="POST" action="{{ route('product.store') }}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name<small class="text-danger">*</small></label>
                                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                 <div class="text-danger">
                                    *{{ $message }}
                                 </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Price<small class="text-danger">*</small></label>
                                <input type="price" name="price" class="form-control @error('price')is-invalid @enderror" value="{{ old('price') }}">
                                @error('price')
                                 <div class="text-danger">
                                    *{{ $message }}
                                 </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Size<small class="text-danger">*</small></label>
                                <input type="size" name="size" class="form-control @error('size')is-invalid @enderror" value="{{ old('size') }}">
                                @error('size')
                                 <div class="text-danger">
                                    *{{ $message }}
                                 </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Quantity<small class="text-danger">*</small></label>
                                <input type="quantity" name="quantity" class="form-control @error('quantity')is-invalid @enderror" value="{{ old('quantity') }}">
                                @error('quantity')
                                 <div class="text-danger">
                                    *{{ $message }}
                                 </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
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
