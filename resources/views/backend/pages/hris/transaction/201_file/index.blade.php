@extends('backend.master.index')

@section('title', 'EMPLOYEE 201 FILE')

@section('breadcrumbs')
    <span>TRANSACTION</span>  /  <span class="highlight">EMPLOYEE 201 FILE</span>
@endsection

@section('left-content')
    @include('backend.partial.component.tab_list', [
        'id'=>'personnelfile_menu',
        'data'=>array(
            array('id'=>'general', 'title'=>'GENERAL', 'icon'=>' fas fa-file-alt', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'employment_requirements', 'title'=>'EMPLOYMENT REQUIREMENTS', 'icon'=>' fas fa-paperclip', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'educational_background', 'title'=>'EDUCATIONAL BACKGROUND', 'icon'=>' fas fa-user-graduate', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'work_history', 'title'=>'WORK HISTORY', 'icon'=>' fas fa-undo-alt', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'contracts', 'title'=>'CONTRACTS', 'icon'=>' fas fa-file-contract', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'performance_records', 'title'=>'PERFORMANCE RECORDS', 'icon'=>' fas fa-chart-line', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'movement', 'title'=>'MOVEMENT', 'icon'=>' fas fa-copy', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'health_records', 'title'=>'HEALTH RECORDS', 'icon'=>' fas fa-file-medical', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'income_tax_records', 'title'=>'INCOME TAX RECORDS', 'icon'=>' fas fa-file-invoice-dollar', 'active'=>false, 'disabled'=>false, 'function'=>true),

        )
    ])
@endsection


@section('content')
<div class="row" style="height:100%;">
    <div class="col-12" style="height:100%;">
        <div class="tab" style="height:100%;">
            <div class="tab-content">
                <form class="form-record" method="post" id="employeeInformation">
                    @include('backend.pages.hris.transaction.201_file.tabs.general_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.employment_requirements_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.educational_background_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.work_history_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.contracts_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.performance_records_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.movement_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.health_records_tab')
                    @include('backend.pages.hris.transaction.201_file.tabs.income_tax_records_tab')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('right-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><span>Juan Dela Cruz</span></h5>
                <h5 class="card-title"><span style="color: gray; font-size: 10px;">REGISTERED NURSE</span></h5>
            </div>
            <div class="col-12">
                <div class="card-body" style="padding: 0px !important;">
                    <div style="padding: 1em;"></div>
                    <img src="/images/hris/employee-information/employee-photo.png" style="width: 100%;" alt="">
                    <div style="padding: 1em;"></div>
                    <table>
                        <tr>
                            <td>EMPLOYEE TYPE:</td>
                            <td>REGULAR</td>
                        </tr>
                        <tr>
                            <td>DATE HIRED:</td>
                            <td>01/01/2022</td>
                        </tr>
                        <tr>
                            <td>MONTHLY SALARY:</td>
                            <td>PHP 20,000.00</td>
                        </tr>

                    </table>
                    <div style="padding: 1em;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="/js/backend/pages/hris/transaction/201_file.js"></script>
@endsection
