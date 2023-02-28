
<div id="performance_records_tab" class="form-tab">
    <h5>PERFORMANCE RECORDS</h5>
    <div style="text-align: right;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_performance_record">ADD NEW</button>
    </div>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-md-12">
            <table class="dtl">
                <tr>
                    <th>EVALUATION DATE</th>
                    <th>EMPLOYEE POSITION</th>
                    <th>EVALUATION OFFICER</th>
                    <th>RATING</th>
                </tr>
                <tr>
                    <td>01/01/2023</td>
                    <td>REGISTERED NURSE</td>
                    <td>JOSHUA OPINION</td>
                    <td>EXCEEDS EXPECTATION</td>
                </tr>
                <tr>
                    <td>01/01/2022</td>
                    <td>REGISTERED NURSE</td>
                    <td>ARVIN OLIVAS</td>
                    <td>MEETS EXPECTATION</td>
                </tr>
                <tr>
                    <td>01/01/2022</td>
                    <td>REGISTERED NURSE</td>
                    <td>JUDE MUEGO</td>
                    <td>EXCEEDS EXPECTATION</td>
                </tr>
                <tr>
                    <td>01/01/2021</td>
                    <td>REGISTERED NURSE</td>
                    <td>JETRO MACALIPAY</td>
                    <td>NEEDS IMPROVEMENT</td>
                </tr>
                <tr>
                    <td>01/01/2020</td>
                    <td>REGISTERED NURSE</td>
                    <td>JOSHUA OPINION</td>
                    <td>EXCEEDS EXPECTATION</td>
                </tr>
            </table>
        </div>
    </div>

    {{-- MODAL --}}
    <div class="modal fade bd-example-modal-lg" id="new_performance_record" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <h5 class="card-title" id="exampleModalLabel">JUAN DELA CRUZ</h5>
                                <h5 class="title" id="exampleModalLabel">EMPLOYEE NAME</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">REGISTERED NURSE</h5>
                                <h5 class="title" id="exampleModalLabel">POSITION</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">PAULINE SARAÑA</h5>
                                <h5 class="title" id="exampleModalLabel">SUPERVISOR</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">MEDICAL</h5>
                                <h5 class="title" id="exampleModalLabel">DEPARTMENT</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">INSTRUCTIONS</h5>
                                <h5 class="title" id="exampleModalLabel">Performances reviews will be done on a 5-point scale metrics with allowable increments/multiples of half (eg. 3.5 - allowed, 3.8 - not allowed)</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">5- EXCEEDS EXPECTATIONS/OUTSTANDING</h5>
                                <h5 class="title" id="exampleModalLabel">Overall performance is exemplary and far exceeds the expectations. All perfomance objectives (modified as necessary during the work period) have been exceeded; most of them to a surprising degree and performance have been uniformly high standard with no objectives rated below. The Evidence is given that quality and quantity of work exceeds the requirements for the position.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">4- EXCEEDS SOME EXPECTATION</h5>
                                <h5 class="title" id="exampleModalLabel">Overall performance is exemplary and far exceeds the expectations. All perfomance objectives (modified as necessary during the work period) have been exceeded; most of them to a surprising degree and performance have been uniformly high standard with no objectives rated below. The Evidence is given that quality and quantity of work exceeds the requirements for the position.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">3- MEETS EXPECTATION</h5>
                                <h5 class="title" id="exampleModalLabel">Overall performance is acceptable and adequate. Performance objectives (modified as necessary during the work period) have been achieved. Expectations are met.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">2- MEETS SOME EXPECTATIONS</h5>
                                <h5 class="title" id="exampleModalLabel">Overall performance does not meet expectations. Several performance objectives have not been achieved. Improvement in performance is required.</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">1- DOES NOT EXPECTATIONS</h5>
                                <h5 class="title" id="exampleModalLabel">Overall performance is unaccepable. Most, if not all performance objectives have not been achieved. The quality and quantity of work is below the requirement of the position.</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">PERFORMANCE GOALS (80%)</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="instruction-title" id="exampleModalLabel">OBJECTIVES</h5>
                            <h5 class="title" id="exampleModalLabel">What is to be achieved within the assessment period?</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Weight</h5>
                            <h5 class="title" id="exampleModalLabel">(in percentage)</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Rating</h5>
                            <h5 class="title" id="exampleModalLabel">(For each ojective)</h5>
                        </div>
                        <div class="col-9" style="text-align: right;">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">PERFORMANCE GOALS WEIGHTED SCORE:</h5>
                            </div>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <div class="form-group">
                                <input type="text" id="performance_goals_score" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h5 class="card-title" id="exampleModalLabel">PERSONAL EFFECTIVENESS (20%)</h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Competency</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Descriptors</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Rating</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Remarks</h5>
                        </div>

                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Teamwork</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="title" id="exampleModalLabel">Establishes a good mutual working relationship with the members of the team. Exerts effort to ensure that team goals are met through personal contribution.</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="number" id="teamwork_rating" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="teamwork_remarks" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Focus on Results</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="title" id="exampleModalLabel">Shows a continuous improvement on defined opportunities. Meets the most basic goals on a consistent manner.</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="number" id="focus_on_results_rating" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="focus_on_results_remarks" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Self Management</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="title" id="exampleModalLabel">Aware of his own performance trends. Understands his own personal career challenges and can set personal action plans into motion.</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="number" id="self_management_rating" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="self_management_remarks" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Communication and Presentation</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="title" id="exampleModalLabel">Holds a professional demeanor expected from an employee.</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="number" id="communication_presentation_rating" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="communication_presentation_remarks" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <h5 class="instruction-title" id="exampleModalLabel">Self-confidence and Personal Drive</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="title" id="exampleModalLabel">Has a healthy motivation to move forward to always excel</h5>
                        </div>
                        <div class="col-md-3">
                            <input type="number" id="selfconfidence_personaldrive_rating" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="selfconfidence_personaldrive_remarks" class="form-control">
                        </div>

                        <div class="col-9" style="text-align: right;">
                            <div class="form-group">
                                <h5 class="instruction-title" id="exampleModalLabel">PERSONAL EFFECTIVE AVERAGE SCORE</h5>
                            </div>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <div class="form-group">
                                <input type="text" id="personal_effective_score" class="form-control">
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
    h5.instruction-title {
        color: gray;
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