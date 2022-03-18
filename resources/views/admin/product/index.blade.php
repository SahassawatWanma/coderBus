@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Category Page</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>cate_id</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Available_seat</th>
                        <th>PickupLocation</th>
                        <th>Price<th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->cate_id }}</td>
                        <td>{{ $item->origin }}</td>
                        <td>{{ $item->detination }}</td>
                        <td>{{ $item->available }}</td>
                        <td>{{ $item->pickup_location }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                        <a href="{{ url('edit-prod/'.$item->id) }}"class="btn btn-primary">Edit</a>
                        <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
