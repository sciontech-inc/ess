<div id="work_history_tab" class="form-tab">
    <h5>WORK HISTORY</h5>
    <div style="text-align: right;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_work_history">ADD NEW</button>
    </div>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-md-12">
            <table class="dtl">
                <tr>
                    <th>COMPANY</th>
                    <th>POSITION</th>
                    <th>DATE HIRED</th>
                    <th>DATE OF RESIGNATION</th>
                    <th>REMARKS</th>
                </tr>
                <tr>
                    <td>ST LUKES HOSPITAL</td>
                    <td>REGISTERED NURSE</td>
                    <td>May 1, 2023</td>
                    <td>May 1, 2023</td>
                    <td>FIRED</td>
                </tr>
                <tr>
                    <td>ST LUKES HOSPITAL</td>
                    <td>REGISTERED NURSE</td>
                    <td>May 1, 2023</td>
                    <td>May 1, 2023</td>
                    <td>RESIGNED</td>
                </tr>
                <tr>
                    <td>ST LUKES HOSPITAL</td>
                    <td>REGISTERED NURSE</td>
                    <td>May 1, 2023</td>
                    <td>May 1, 2023</td>
                    <td>RESIGNED</td>
                </tr>
                <tr>
                    <td>ST LUKES HOSPITAL</td>
                    <td>REGISTERED NURSE</td>
                    <td>May 1, 2023</td>
                    <td>May 1, 2023</td>
                    <td>RESIGNED</td>
                </tr>
                <tr>
                    <td>ST LUKES HOSPITAL</td>
                    <td>REGISTERED NURSE</td>
                    <td>May 1, 2023</td>
                    <td>May 1, 2023</td>
                    <td>RESIGNED</td>
                </tr>
            </table>
        </div>
    </div>

     {{-- MODAL --}}
     <div class="modal fade bd-example-modal-lg" id="new_work_history" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                        <div class="col-6">
                            <div class="form-group">
                                <label for="educational-attainment" class="col-form-label">COMPANY</label>
                                <input type="text" class="form-control" id="educational_attainment">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="course" class="col-form-label">POSITION</label>
                                <input type="text" class="form-control" id="course">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date_hired" class="col-form-label">DATE HIRED</label>
                                <input type="date" class="form-control" id="date_hired">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="resignation_date" class="col-form-label">DATE OF RESIGNATION</label>
                                <input type="date" class="form-control" id="resignation_date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="remarks" class="col-form-label">REMARKS</label>
                                <input type="text" class="form-control" id="remarks">
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