@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name = "cate_id" >
                            <option value="">Select Vehicle Type</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Origin</label>
                        <input type="text" class="form-control" name = "origin">
                    </div>
                    <div class="col-md-6">
                        <label for="">Destination</label>
                        <input type="text" class="form-control" name = "destination">
                    </div>
                    <div class="col-md-12">
                        <label for="">PickupLocation</label>
                        <input type="text" class="form-control" name = "pickup_location">
                    </div>
                    <div class="col-md-6">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name = "price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Active</label>
                        <input type="checkbox" name = "product_status">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" name = "name">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
