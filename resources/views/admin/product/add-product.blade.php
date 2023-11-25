@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header bg-primary">
                        <h3 class="text-center font-weight-light my-2">Add Product Form</h3>
                        {{session('message')}}

                    </div>

                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="card-body">
                        <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="" placeholder="Product"/>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Quantity <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="quantity" id="" placeholder="Quantity "/>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Price<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price" id="" placeholder="Price "/>
                            </div>
                        </div><br>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Product</button>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection