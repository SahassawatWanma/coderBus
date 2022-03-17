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
                        <label for="">Name</label>
                        <input type="text" class="form-control" name = "name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Descriptions</label>
                        <input type="text" class="form-control" name = "description">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name = "meta_title">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta Keywords</label>
                        <input type="text" class="form-control" name = "meta_keyword">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta Description</label>
                        <input type="text" class="form-control" name = "meta_description">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name = "image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Active</label>
                        <input type="checkbox" name = "status">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" name = "name">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
