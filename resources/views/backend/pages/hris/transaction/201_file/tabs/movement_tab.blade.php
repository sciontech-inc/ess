
<div id="movement_tab" class="form-tab">
    <h5>MOVEMENT</h5>
    <div style="text-align: right;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_movement">ADD NEW</button>
    </div>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-md-12">
            <table class="dtl">
                <tr>
                    <th>FILED BY</th>
                    <th>CHANGES</th>
                    <th>EFFECTIVE DATE</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
                <tr>
                    <td>Lourd Leo James Homecillo</td>
                    <td>Salary Increase</td>
                    <td>2020-05-11 16:00:00</td>
                    <td>Acknowledged</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW PCN</button>
                    </td>
                </tr>
                <tr>
                    <td>Lourd Leo James Homecillo</td>
                    <td>Promoted to Manager</td>
                    <td>2020-05-11 16:00:00</td>
                    <td>Acknowledged</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW PCN</button>
                    </td>
                </tr>
                <tr>
                    <td>Lourd Leo James Homecillo</td>
                    <td>Salary Increase</td>
                    <td>2020-05-11 16:00:00</td>
                    <td>Acknowledged</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW PCN</button>
                    </td>
                </tr>
                <tr>
                    <td>Lourd Leo James Homecillo</td>
                    <td>Salary Increase</td>
                    <td>2020-05-11 16:00:00</td>
                    <td>Acknowledged</td>
                    <td> 
                        <button type="button" class="btn btn-outline-primary btn-sm">VIEW PCN</button>
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
    
    {{-- MODAL --}}
    <div class="modal fade" id="new_movement" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <label for="filed_by" class="col-form-label">FILED BY</label>
                                <input type="text" class="form-control" id="filed_by">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="changes" class="col-form-label">CHANGES</label>
                                <input type="text" class="form-control" id="changes">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="effective_date" class="col-form-label">EFFECTIVE DATE</label>
                                <input type="date" class="form-control" id="effective_date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="status" class="col-form-label">STATUS</label>
                                <input type="text" class="form-control" id="status">
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