@extends('backend.master.index')

@section('title', 'PAYROLL CALENDAR')

@section('breadcrumbs')
    <span>SETUP / PAYROLL</span> / <span class="highlight">PAYROLL CALENDAR</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">PAYROLL CALENDAR SETUP</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="payroll_calendar_table" class="table table-striped" style="width:100%">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="payroll_calendar_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('payroll_calendar_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="payrollCalendarForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 name">
                        <label>NAME</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="NAME"/>
                    </div>
                    <div class="form-group col-md-12 calendar_type">
                        <label>CALENDAR TYPE</label>
                        <select name="calendar_type" id="calendar_type" class="form-control" onchange="calendarType()">
                            <option value="" style="display:none;">PLEASE SELECT CALENDAR TYPE</option>
                            <option value="weekly">WEEKLY</option>
                            <option value="twice_monthly">TWICE MONTHLY</option>
                            <option value="monthly">MONTHLY</option>
                            <option value="custom">CUSTOM</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 frequency" style="display:none;">
                        <label>FREQUENCY</label>
                        <fieldset id="frquency">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" id="frequency1" value="once">
                                <label class="form-check-label" for="frequency1">ONCE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" id="frequency2" value="twice">
                                <label class="form-check-label" for="frequency2">TWICE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" id="frequency3" value="thrice">
                                <label class="form-check-label" for="frequency3">THRICE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" id="frequency4" value="quad">
                                <label class="form-check-label" for="frequency4">QUAD</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group col-md-6 start_date">
                        <label>START DATE</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" onchange="getEndWeek()" onblur="getEndWeek()"/>
                    </div>
                    <div class="form-group col-md-6 first_payment">
                        <label>FIRST PAYMENT</label>
                        <input type="date" class="form-control" id="first_payment" name="first_payment" readonly/>
                    </div>
                    <div class="form-group col-md-6 start_of_week">
                        <label>START OF WEEK</label>
                        <select name="start_of_week" id="start_of_week" class="form-control" readonly>
                            <option value="sunday">SUNDAY</option>
                            <option value="monday" selected>MONDAY</option>
                            <option value="tuesday">TUESDAY</option>
                            <option value="wednesday">WEDNESDAY</option>
                            <option value="thursday">THURSDAY</option>
                            <option value="friday">FRIDAY</option>
                            <option value="saturday">SATURDAY</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 end_of_week">
                        <label>END OF WEEK</label>
                        <select name="end_of_week" id="end_of_week" class="form-control" readonly>
                            <option value="sunday">SUNDAY</option>
                            <option value="monday">MONDAY</option>
                            <option value="tuesday">TUESDAY</option>
                            <option value="wednesday">WEDNESDAY</option>
                            <option value="thursday">THURSDAY</option>
                            <option value="friday">FRIDAY</option>
                            <option value="saturday">SATURDAY</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 set_as_default">
                        <label class="form-check">
                            <input class="form-check-input" id="set_as_default" name="set_as_default" value="0" type="checkbox" onchange="$('#'+this.id).val($('#'+this.id).prop('checked') === true?'1':'0');">
                            <span class="form-check-label">
                            SET AS DEFAULT
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
    <script src="/js/backend/pages/payroll/maintenance/payroll_calendar.js"></script>
@endsection