@extends('backend.master.index')

@section('title', 'PAG-IBIG CONTRIBUTIONS')

@section('breadcrumbs')
    <span>HRIS</span> / <span class="highlight">PAG-IBIG CONTRIBUTIONS</span>
@endsection
 

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">PAG-IBIG CONTRIBUTIONS REPORT</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <table class="wks">
                            <tr>
                                <th>Monthly Salary</th>
                                <th>PAG-IBIG Contribution</th>
                                <th>PAG-IBIG ID No.</th>
                                <th>Reporting Period</th>
                                <th>Employer Contribution</th>
                                <th>Payment Status</th>
                            </tr>
                            <tr>
                                <td>PHP 30,000.00</td>
                                <td>PHP 100.00</td>
                                <td>02 02315 4</td>
                                <td>MARCH 01, 2023 - MARCH 31, 2023</td>
                                <td>PHP 100.00</td>
                                <td>PAID</td>
                            </tr>
                            <tr>
                                <td>PHP 30,000.00</td>
                                <td>PHP 100.00</td>
                                <td>02 02315 4</td>
                                <td>MARCH 01, 2023 - MARCH 31, 2023</td>
                                <td>PHP 100.00</td>
                                <td>PAID</td>
                            </tr>
                            <tr>
                                <td>PHP 30,000.00</td>
                                <td>PHP 100.00</td>
                                <td>02 02315 4</td>
                                <td>MARCH 01, 2023 - MARCH 31, 2023</td>
                                <td>PHP 100.00</td>
                                <td>PAID</td>
                            </tr>
                            <tr>
                                <td>PHP 30,000.00</td>
                                <td>PHP 100.00</td>
                                <td>02 02315 4</td>
                                <td>MARCH 01, 2023 - MARCH 31, 2023</td>
                                <td>PHP 100.00</td>
                                <td>PAID</td>
                            </tr>
                            <tr>
                                <td>PHP 30,000.00</td>
                                <td>PHP 100.00</td>
                                <td>02 02315 4</td>
                                <td>MARCH 01, 2023 - MARCH 31, 2023</td>
                                <td>PHP 100.00</td>
                                <td>PAID</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}
<div class="modal fade bd-example-modal-lg" id="attrition_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ATTRITION RATE SUMMARY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="section-label">Per Department (More than 5%)</label>
                    </div>
                    <div class="col-md-12">
                    <table class="wks">
                        <tr>
                            <th>Depart</th>
                            <th>Average No. of Employees</th>
                            <th>No. of Employees Left Workplace</th>
                            <th>Attrition Rate</th>
                        </tr>
                        <tr>
                            <td>Radiology Department</td>
                            <td>15</td>
                            <td>60</td>
                            <td>25%</td>
                        </tr>
                        <tr>
                            <td>Medical Department</td>
                            <td>8</td>
                            <td>86</td>
                            <td>11%</td>
                        </tr>
                        <tr>
                            <td>Inpatient Service (IP)</td>
                            <td>10</td>
                            <td>74</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>Paramedical Department</td>
                            <td>8</td>
                            <td>64</td>
                            <td>12%</td>
                        </tr>
                        <tr>
                            <td>Pharmacy Department</td>
                            <td>5</td>
                            <td>52</td>
                            <td>10%</td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('styles')
<style>
    .main {
        overflow-x: hidden;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
    }
    .text-percentage {
        font-size: 9px;
        color: gray;
    }
    .text-primary {
        color: #3282b8;
        font-size: 20px;
        font-weight: bold;
    }
    p.section-title {
        font-size: 12px;
        color: #b6b6b6;
        margin-bottom: 0px;
    }
    p.notif-title {
        font-weight: bold;
        color: #e02828;
        font-size: 13px;
        margin-bottom: 0px;
    }
    p.notif-title-green {
        font-weight: bold;
        color: #28e04a;
        font-size: 13px;
        margin-bottom: 0px;
    }
    p.notif-description {
        font-size: 10px;
        color: #b6b6b6;
    }
    p.section-desc {
        font-weight: bold;
        color: #6eafdb;
    }
    label.section-label {
        font-weight: bold;
    }
    .payroll-title {
        color: #b6b6b6;
        margin-bottom: 0px !important;
    }
    .payroll-date {
        color: #6eafdb;
        font-weight: bold;
    }
    .employment-status {
        color: #b6b6b6;
        font-size: 12px;
    }
    .job-title {
        font-weight: bold;
        color: #6eafdb;
        margin-bottom: 0px !important;
    }
    .account-balance {
        font-weight: bold;
        font-size: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 10px;
    }
    
    td, th {
        padding: 5px;
    }
    th {
        color: #6eafdb;
        font-weight: bold;
    }
    table.dtl tr:nth-child(even) {
        background: #d3d3d3;
    }
    table.dtl td, th {
        /* border: 1px solid #dddddd; */
        text-align: left;
        padding: 6px;
    }
    table.wks tr:nth-child(even) {
        background: #e7f5ff;
    }
    table.wks td, th {
        /* border: 1px solid #dddddd; */
        text-align: left;
        padding: 6px;
    }
    label.section-label {
        color: #3282b8;
    }
  </style>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    {{-- <script src="/js/backend/pages/payroll/transaction/employee/leave_application.js"></script> --}}
@endsection
