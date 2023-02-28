
<div id="income_tax_records_tab" class="form-tab">
    <h5>INCOME TAX RECORDS</h5>
    <div style="text-align: right;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_income_tax">ADD NEW</button>
    </div>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-md-12">
            <table class="dtl">
                <tr>
                    <th>FOR THE YEAR</th>
                    <th>TIN </th>
                    <th>FOR THE PERIOD (FROM)</th>
                    <th>FOR THE PERIOD (TO)</th>
                    <th>TOTAL AMOUNT OF TAXES WITHHELD</th>
                    <th>ACTION</th>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>000-341-030-469</td>
                    <td>01/01</td>
                    <td>12/30</td>
                    <td>PHP 12,000.00</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW RECORD</button>
                    </td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>000-341-030-469</td>
                    <td>01/01</td>
                    <td>12/30</td>
                    <td>PHP 12,000.00</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW RECORD</button>
                    </td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>000-341-030-469</td>
                    <td>01/01</td>
                    <td>12/30</td>
                    <td>PHP 12,000.00</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW RECORD</button>
                    </td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>000-341-030-469</td>
                    <td>01/01</td>
                    <td>12/30</td>
                    <td>PHP 12,000.00</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW RECORD</button>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    
    {{-- MODAL --}}
    <div class="modal fade" id="new_income_tax" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NEW RECORD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="for_the_year" class="col-form-label">FOR THE YEAR</label>
                                <input type="text" class="form-control" id="for_the_year">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tin" class="col-form-label">TIN</label>
                                <input type="text" class="form-control" id="tin">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="from_period" class="col-form-label">FOR THE PERIOD (FROM)</label>
                                <input type="date" class="form-control" id="from_period">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="to_period" class="col-form-label">FOR THE PERIOD (TO)</label>
                                <input type="date" class="form-control" id="to_period">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="total_amount" class="col-form-label">TOTAL AMOUNT OF TAXES WITHHELD</label>
                                <input type="text" class="form-control" id="total_amount">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tax_document" class="col-form-label">UPLOAD INCOME TAX DOCUMENT</label>
                                <input type="file" class="form-control" id="tax_document">
                            </div>
                        </div>
                    </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    <button type="button" class="btn btn-primary">SAVE</button>
                  </div>
            </div>
        </div>
    </div>

</div>


@section('styles')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;   
        cursor: inherit;
        display: block;
    }
    .form-control {
        font-size: 12px;
    }
    .main {
        overflow-x: hidden;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
        margin-bottom: 0px;
    }
    h5.title {
        font-size: 12px;
        color: gray;
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
        background: ##efefef;
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
  </style>
@endsection