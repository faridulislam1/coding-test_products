@extends('admin.master')
@section('content')
    <section class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <i class="fas fa-table me-1"></i>
                            <h3 class="text-center">Product List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover table-bordered text-center" id="datatablesSimple" width="100%" cellspacing="0" >
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price </th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>

                                        <td  class="btn-group">
                                            <a href="{{route('edit.product',['id'=>$product->id]) }}" class="btn btn-primary btn-sm mx-1">edit</a>
                                            <form action="{{route('delete.product')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure Delete this !!')">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection