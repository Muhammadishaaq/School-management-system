@extends('layouts.admin-app')
@section('content')
<div class="container">
    <table class="table table-hover mt-2">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Massage</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $record )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->message }}</td>
                    
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
