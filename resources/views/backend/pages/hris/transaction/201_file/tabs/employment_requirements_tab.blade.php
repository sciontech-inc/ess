
<div id="employment_requirements_tab" class="form-tab">
    <h5>EMPLOYMENT REQUIREMENTS</h5>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">VALID ID</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <img src="/images/hris/employee-information/default-id.png" style="width: 100%; padding-bottom: 10px;" alt="">
                                <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                <button type="button" class="btn btn-success btn-sm">VIEW</button>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">BANK ACCOUNT</h5>
                        </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="BANK NAME">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="ACCOUNT NAME">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="ACCOUNT NO">
                                </div>
                                <h5 class="title">Status: <span>Pending</span></h5>
                            </div>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">RESUME</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">NBI CLEARANCE</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">PAG-IBIG</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">PhilHealth</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">SSS</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Medical Certificate</h5>
                        </div>
                            <div class="card-body">
                                <h5 class="title">ID#: 120-044-301</h5>
                                <h5 class="title">Status: <span>Pending</span></h5>
                                <div class="form-group">
                                    <span class="btn btn-outline-primary btn-sm btn-file"> UPLOAD <input type="file"></span>
                                    <button type="button" class="btn btn-success btn-sm">VIEW</button>
                                </div>
                            </div>
                    </div>
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
        background: #efefef;
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
