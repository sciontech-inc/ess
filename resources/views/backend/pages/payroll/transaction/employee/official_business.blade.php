@extends('backend.master.index')

@section('title', 'OFFICIAL BUSINESS APPLICATION')

@section('breadcrumbs')
    <span>EMPLOYEE / OFFICIAL BUSINESS APPLICATION</span> / <span class="highlight">APPLY FOR OFFICIAL BUSINESS</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">OFFICIAL BUSINESS APPLICATION: APPLY FOR OFFICIAL BUSINESS</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="earnings_table" class="table table-striped" style="width:100%">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="earnings_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('earnings_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="earningForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 leave_type">
                        <label>Purpose</label>
                        <input type="textarea" class="form-control" id="purpose" name="purpose"/>
                    </div>
                    <div class="form-group col-md-12 date">
                        <label>Select date of official business:</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-12 location">
                        <label>Location</label>
                        <input type="textarea" class="form-control" id="location" name="location"/>
                    </div>
                    <div class="form-group col-md-12 duration">
                        <label>Duration</label>
                        <input type="textarea" class="form-control" id="duration" name="duration"/>
                    </div>
                    <div class="form-group col-md-12 estimated_cost">
                        <label>Estimated Cost</label>
                        <input type="textarea" class="form-control" id="estimated_cost" name="estimated_cost"/>
                    </div>
                    <div class="form-group col-md-12 justification">
                        <label>Justification</label>
                        <input type="textarea" class="form-control" id="justification" name="justification"/>
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
    <script src="/js/backend/pages/payroll/transaction/employee/official_business.js"></script>
@endsection