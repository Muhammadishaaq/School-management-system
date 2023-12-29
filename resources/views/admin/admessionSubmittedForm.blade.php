@extends('layouts.admin-app')
@section('content')
<div class="container">
    <table class="table table-hover mt-2">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mark</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $record )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->mark }}</td>
                    <td>{{ $record->class }}</td>
                    <td>{{ $record->phone }}</td>
                    <td>{{ $record->address }}</td>
                    {{-- <td>
                        <img src="DMC/images/{{ $record->image }}" class="rounded-circle" width="50" height="50"/>
                    </td> --}}
                    {{-- <td>
                        <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection
