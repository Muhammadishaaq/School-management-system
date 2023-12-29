@extends('layouts.app')

@section('content')
<div class="container fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($message=Session::get('success'))
                <div class="alert alert-success alert-block mt-3">
                    <strong>{{ $message }}</strong>
                </div>    
            @endif
            <div class="card">
                <div class="card-header text-primary text-center"><h4>Admession-Form</h4></div>

                <div class="card-body">
                    <form class="row g-3" method="post" action="/admession-form/store" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                         <label>Applicant-Name</label>
                         <input type="text" name="name" class="form-control" id="inputname" placeholder="Muhammad Ishaq"value="{{ old('name') }}">
                         @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                         <label>F/Name</label>
                         <input type="text" name="fname" class="form-control" id="inputfname" placeholder="Malak Din"value="{{ old('fname') }}">
                         @if ($errors->has('fname'))
                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                         <label>Email</label>
                         <input type="text" name="email" class="form-control" id="inputemail" placeholder="ishaq509@gmail.com"value="{{ old('email') }}">
                         @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                         <label>Phone</label>
                         <input type="text" name="phone" class="form-control" id="inputphone" placeholder="0305-9898743"value="{{ old('phone') }}">
                         @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="col-md-3">
                         <label>Marks</label>
                         <input type="text" name="mark" class="form-control" id="inputmarks" placeholder="180-1100"value="{{ old('mark') }}">
                         @if ($errors->has('mark'))
                            <span class="text-danger">{{ $errors->first('mark') }}</span>
                            @endif
                        </div>
                        <div class="col-md-3">
                         <label>Percentage</label>
                         <input type="text" name="percentage" class="form-control" id="inputpercent" placeholder="33-100"value="{{ old('percentage') }}">
                         @if ($errors->has('percentage'))
                            <span class="text-danger">{{ $errors->first('percentage') }}</span>
                            @endif
                        </div>
                        <div class="col-md-3">
                         <label>Class</label>
                         <input type="text" name="class" class="form-control" id="inputclass" placeholder="11th or 12th"value="{{ old('class') }}" >
                         @if ($errors->has('class'))
                            <span class="text-danger">{{ $errors->first('class') }}</span>
                            @endif
                        </div>
                        <div class="col-md-3">
                         <label>DMC</label>
                         <input type="file" name="image" class="form-control" id="inputfile">
                         @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="col-12">
                         <label>Address</label>
                         <input type="text" name="address" class="form-control" id="inputaddress" placeholder="1234 Main St"value="{{ old('address') }}">
                         @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 