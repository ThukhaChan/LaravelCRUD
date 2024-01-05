@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <div class="mb-3 mt-3">
                            <label  class="form-label">Name</label>
                            <input type="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price</label>
                            <input type="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Size</label>
                            <input type="size" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Quantity</label>
                            <input type="quantity" class="form-control">
                        </div>
                        <div class="mb-4 text-center">
                            <button class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
