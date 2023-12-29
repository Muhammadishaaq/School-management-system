@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary text-center"><h4>Ist-Year-Student-Results</h4></div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Roll Number</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Total Marks</th>
                                <th>Obtain Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>550</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>550</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>550</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>550</td>
                                <td>450</td>
                            </tr>
                            <!-- Add more rows for other students and subjects -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection