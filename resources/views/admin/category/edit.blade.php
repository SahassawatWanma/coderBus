@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name = "name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Description</label>
                        <input type="text" value="{{ $category->description }}" class="form-control" name = "description">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta Title</label>
                        <input type="textr" value="{{ $category->meta_title }}" class="form-control" name = "meta_title">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta Keyword</label>
                        <input type="text" value="{{ $category->meta_keyword }}" class="form-control" name = "meat_keyword">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta Description</label>
                        <input type="text" value="{{ $category->meta_decription }}" class="form-control" name = "meta_decription">
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category image">
                    @endif
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
