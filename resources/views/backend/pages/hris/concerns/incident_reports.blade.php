@extends('backend.master.index')

@section('title', 'Incident Reports')

@section('breadcrumbs')
    <span>Concerns</span>  /  <span class="highlight">Incident Reports</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Payroll Issues</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="incident_reports_form" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Filed</th>
                                <th>Incident Report</th>
                                <th>Submitted By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="incident_reports_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('benefits_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form id="positionForm" method="post" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Date Filed</label>
                        <input type="date" class="form-control" id="date_filed" name="date_filed" placeholder="Date Filed">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Incident Report</label>
                        <textarea class="form-control" id="incident_report" name="incident_report" placeholder="Incident Report">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Submitted By</label>
                        <input type="text" class="form-control" id="submitted_by" name="submitted_by" placeholder="Submitted By">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
    
@endsection

@section('scripts')
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="/js/backend/pages/payroll/maintenance/incident_reports.js"></script>
@endsection