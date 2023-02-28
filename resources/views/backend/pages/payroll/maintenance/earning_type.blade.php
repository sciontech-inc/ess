@extends('backend.master.index')

@section('title', 'EARNING TYPE')

@section('breadcrumbs')
    <span>MAINTENANCE</span> / <span class="highlight">EARNING TYPE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">EARNING TYPE: MAINTENANCE SCREEN</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="classes_table" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>DESCRIPTION</th>
                                <th>TAX APPLICABLE</th>
                                <th>GOVERNMENT MANDATED BENEFITS</th>
                                <th>OTHER COMPANY BENEFITS</th>
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
<div class="sc-modal-content" id="classes_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('benefits_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="classForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 description">
                        <label>DESCRIPTION</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="DESCRIPTION"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-check">
                            <input class="form-check-input" id="tax_applicable" name="tax_applicable" value="0" type="checkbox" onchange="$('#'+this.id).val($('#'+this.id).prop('checked') === true?'1':'0');">
                            <span class="form-check-label">
                            TAX APPLICABLE
                            </span>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-check">
                            <input class="form-check-input" id="government_mandated_benefits" name="government_mandated_benefits" value="0" type="checkbox" onchange="$('#'+this.id).val($('#'+this.id).prop('checked') === true?'1':'0');">
                            <span class="form-check-label">
                            GOVERNMENT MANDATED BENEFITS
                            </span>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-check">
                            <input class="form-check-input" id="other_company_benefits" name="other_company_benefits" value="0" type="checkbox" onchange="$('#'+this.id).val($('#'+this.id).prop('checked') === true?'1':'0');">
                            <span class="form-check-label">
                            OTHER COMPANY BENEFITS
                            </span>
                        </label>
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
    <script src="/js/backend/pages/payroll/maintenance/classes.js"></script>
@endsection