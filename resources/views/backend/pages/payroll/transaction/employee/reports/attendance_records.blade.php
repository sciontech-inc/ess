@extends('backend.master.index')

@section('title', 'ATTENDANCE RECORDS')

@section('breadcrumbs')
    <span>ESS</span> / <span class="highlight">ATTENDANCE RECORDS</span>
@endsection
 

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">ATTENDANCE HISTORY</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <table class="wks">
                            <tr>
                                <th>Date</th>
                                <th>Attendance Type</th>
                                <th>Hours Worked</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>MARCH 01, 2023</td>
                                <td>Present</td>
                                <td>8.00</td>
                                <td>Regular Hours</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#attendance_modal"><i class="align-middle mr-2 fas fa-fw fa-eye" style="margin: 0px !important;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>MARCH 01, 2023</td>
                                <td>Present</td>
                                <td>8.00</td>
                                <td>Regular Hours</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#attendance_modal"><i class="align-middle mr-2 fas fa-fw fa-eye" style="margin: 0px !important;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>MARCH 01, 2023</td>
                                <td>Present</td>
                                <td>8.00</td>
                                <td>Regular Hours</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#attendance_modal"><i class="align-middle mr-2 fas fa-fw fa-eye" style="margin: 0px !important;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>MARCH 01, 2023</td>
                                <td>Present</td>
                                <td>8.00</td>
                                <td>Regular Hours</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#attendance_modal"><i class="align-middle mr-2 fas fa-fw fa-eye" style="margin: 0px !important;"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>MARCH 01, 2023</td>
                                <td>Present</td>
                                <td>8.00</td>
                                <td>Regular Hours</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#attendance_modal"><i class="align-middle mr-2 fas fa-fw fa-eye" style="margin: 0px !important;"></i></button>
                                </td>
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
<div class="modal fade bd-example-modal-lg" id="attendance_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ATTENDANCE SUMMARY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="section-label">Date: <span>March 01, 2023 - Wednesday</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <span>PRESENT</span>
                        <h5 class="details-title">Attendance Type:</h5>
                    </div>
                    <div class="col-md-6">
                        <span>NO LEAVE TAKEN</span>
                        <h5 class="details-title">Leave Taken:</h5>
                    </div>
                    <div class="col-md-6">
                        <span>9:00 AM</span>
                        <h5 class="details-title">Time In:</h5>
                    </div>
                    <div class="col-md-6">
                        <span>5:00 PM</span>
                        <h5 class="details-title">Time Out:</h5>
                    </div>
                    <div class="col-md-6">
                        <span>8.00</span>
                        <h5 class="details-title">Hours Worked:</h5>
                    </div>
                    <div class="col-md-6">
                        <span>0.00</span>
                        <h5 class="details-title">OVERTIME HOURS:</h5>
                    </div>
                    <div class="col-md-12">
                        <span>NO NOTES</span>
                        <h5 class="details-title">NOTES:</h5>
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
    .details-title {
        color: #47b4ea;
        font-weight: normal;
        font-size: 10px;
        margin-bottom: 10px;
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
