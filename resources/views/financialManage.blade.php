@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary text-center"><h4>Financial-Management</h4></div>

                <div class="card-body">
                    <div class="row">
        <div class="col-md-6">
            <h4>Summary</h4>
            <p>Total Student Fee: $1000</p>
            <p>Total Bus Fee: $700</p>
            <p>2nd Time Classes Fee: $500</p>
        </div>
        <div class="col-md-6">
            <h4>Per Year Student Expense</h4>
            <ul>
                <li>Tuition Fees: $12000</li>
                <li>bus Fees: $7000</li>
                <li>2nd Time Classes Fees: $6000</li>
            </ul>
        </div>
    </div>

    <!-- Expense Breakdown -->
    <div class="my-4">
        <h4>Expense Breakdown</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salaries and Benefits</td>
                    <td>$400,00</td>
                </tr>
                <tr>
                    <td>Utilities</td>
                    <td>$50,00</td>
                </tr>
                <tr>
                    <td>Supplies</td>
                    <td>$100,00</td>
                </tr>
                <tr>
                    <td>Maintenance</td>
                    <td>$100,00</td>
                </tr>
                <tr>
                    <td>Other Expenses</td>
                    <td>$100,00</td>
                </tr>
            </tbody>
        </table>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection