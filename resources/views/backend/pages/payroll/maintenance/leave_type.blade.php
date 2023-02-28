@extends('backend.master.index')

@section('title', 'LEAVE TYPE')

@section('breadcrumbs')
    <span>MAINTENANCE</span> / <span class="highlight">LEAVE TYPE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">LEAVE TYPE MAINTENANCE SCREEN
                </h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="leave_types_table" class="table table-striped" style="width:100%">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="leave-types_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('benefits_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form id="leaveTypeForm" method="post" class="form-record">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="leave_name" name="leave_name" required/>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Units</label>
                        <input type="number" class="form-control" id="units" name="units" value="0" min="0" required/>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Normal Entitlement</label>
                        <input type="number" class="form-control" id="normal_entitlement" value="0" min="0" name="normal_entitlement" required/>
                    </div>
                    <div class="form-group col-6">
                        <label>Paid Leave</label>
                        <fieldset id="paid_leave">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paid_leave" id="paid_leave1" value="1" checked>
                                <label class="form-check-label" for="paid_leave1">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paid_leave" id="paid_leave2" value="0">
                                <label class="form-check-label" for="paid_leave2">No</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Show on Payslip</label>
                        <fieldset id="show_on_payslip">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show_on_payslip" id="show_on_payslip1" value="1" checked>
                                <label class="form-check-label" for="show_on_payslip1">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show_on_payslip" id="show_on_payslip2" value="0">
                                <label class="form-check-label" for="show_on_payslip2">No</label>
                            </div>
                        </fieldset>
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
<script src="/js/backend/pages/payroll/maintenance/leave_type.js"></script>
@endsection