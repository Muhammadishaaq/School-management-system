@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><h3>Welcome To</h3></center>
                    <center>{{ __('Hey Admin You are logged in!') }}</center>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
