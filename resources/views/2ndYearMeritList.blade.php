@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-3">
                <h4 class="text-white bg-primary"><b>2nd-Year-Merit-List</b></h4>
            </div> 
            <!-- Table to Display Merit List -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total Marks</th>
                        <th>Obtain Marks</th>
                        <th>Percentage</th>
                        <th>Class</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                        <td>ishaq509@gmail.com</td>
                        <td>03059898743</td>
                        <td>550</td>
                        <td>552</td>
                        <td>81</td>
                        <td>12th</td>
                        <td>Hangu</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                        <td>ishaq509@gmail.com</td>
                        <td>03059898743</td>
                        <td>550</td>
                        <td>552</td>
                        <td>81</td>
                        <td>12th</td>
                        <td>Hangu</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                        <td>ishaq509@gmail.com</td>
                        <td>03059898743</td>
                        <td>550</td>
                        <td>552</td>
                        <td>81</td>
                        <td>12th</td>
                        <td>Hangu</td>
                    </tr>
                    <!-- Add more rows for other students and their scores -->
                </tbody>
            </table>
                   
            
            
        </div>
    </div>
</div>
@endsection