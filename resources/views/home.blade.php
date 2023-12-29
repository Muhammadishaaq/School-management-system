@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <div class="container-fluid p-0">
                    <img src="./images/bg-image4.jpg" class="img-fluid" style="width:100%; max-height:85vh; opacity:0.5;" alt="...">
                </div>
                <div class="carousel-caption ">
                    <h5 style=" font-size: 36px; font-weight: bold; font-family:'Helvetica', Arial, sans-serif;" >Welcome To</h5>
                    <p style="font-size: 20px; font-family: 'Roboto', Arial, sans-serif;" >Islamia College And University Of Technology</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid p-0">
                   <img src="./images/bg-image6.jpg" class="img-fluid" style="width:100%; max-height:85vh; opacity:0.5;" alt="...">
                </div>
                <div class="carousel-caption ">
                    <h5 style=" font-size: 36px; font-weight: bold; font-family:'Helvetica', Arial, sans-serif;" >Welcome To</h5>
                    <p style="font-size: 20px; font-family: 'Roboto', Arial, sans-serif;" >Islamia College And University Of Technology</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid p-0">
                    <img src="./images/bg-image5.jpg" class="img-fluid" style="width:100%; max-height:85vh; opacity:0.5;" alt="...">
                </div>
                <div class="carousel-caption">
                    <h5 style=" font-size: 36px; font-weight: bold; font-family:'Helvetica', Arial, sans-serif;" >Welcome To</h5>
                    <p style="font-size: 20px; font-family: 'Roboto', Arial, sans-serif;" >Islamia College And University Of Technology</p>
                </div>  
            </div>
            
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
