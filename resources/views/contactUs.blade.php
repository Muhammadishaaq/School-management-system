@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center text-primary"><h4>Contact-Us</h4></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @if($message=Session::get('success'))
                            <div class="alert alert-success alert-block mt-3">
                                <strong>{{ $message }}</strong>
                                </div>    
                            @endif
                            <p>If you have any questions or need assistance, please don't hesitate to contact us using the form below.</p>
                            <!-- Contact Form -->
                            <form method="post" action="/contact-us/store" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message"></textarea>
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                </div>   
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h2>Our Location</h2>
                            <p>Visit us at the following address:</p>
                            <address>
                                School Name<br>
                                123 School Street<br>
                                City, State ZIP Code<br>
                                Phone: (123) 456-7890<br>
                                Email: info@school.edu
                            </address>
                        </div>
                    </div>   
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection 
