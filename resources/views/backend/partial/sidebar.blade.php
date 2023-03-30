<nav id="sidebar" class="sidebar">
    <div class="sidebar-content">

        <a class="sidebar-toggle mr-2">
            <i class="fas fa-bars"></i>
        </a>

        <div class="company-logo">
            <img src="/images/logo.png" class="logo1" alt="company-logo" width="100%"/>
            <img src="/images/logo-2.png" class="logo2" alt="company-logo-2" width="100%"/>
            <div class="company-name">
                Company Name
            </div>
        </div>


        <ul class="sidebar-nav" style="overflow-x: hidden;">
            <li class="sidebar-header">
                MAIN
            </li>
            <li class="sidebar-item">   
                <a href="#employee_dashboard" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">MAIN</span>
                    </span>
                </a>
                <ul id="employee_dashboard" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">MAIN</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/dashboard">OVERVIEW</a></li>
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/employee_profile">EMPLOYEE PROFILE</a></li> -->
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/leave_management">LEAVE MANAGEMENT</a></li>
                    <!-- <li class="sidebar-item"><a class="sidebar-link" href="/masterlist/employee">EMPLOYEE TIMESHEET</a></li> -->
                </ul>

                <a href="#overtime_application" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-user-clock"></i> <span class="align-middle">APPLICATIONS</span>
                    </span>
                </a>
                <ul id="overtime_application" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="list-title">APPLICATIONS</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/overtime_application">APPLY FOR OVERTIME</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/leave_application">APPLY FOR LEAVE</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/reimbursement">APPLY FOR REIMBURSEMENT</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/leave_monetization">APPLY FOR LEAVE MONETIZATION</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/official_business">APPLY FOR OFFICIAL BUSINESS</a></li>

                </ul>
            </li>

            <li class="sidebar-header">
                REPORTS
            </li>
            <li class="sidebar-item"> 
            <a href="#user_reports" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-file-contract"></i> <span class="align-middle">REPORTS</span>
                    </span>
                </a>
                <ul id="user_reports" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">REPORTS</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/employee/employee_reports">EMPLOYEE REPORTS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ess/employee/payroll_register">PAYROLL REGISTER</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ess/employee/attendance_records">ATTENDANCE RECORDS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ess/employee/sss_contributions">SSS CONTRIBUTIONS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ess/employee/pagibig_contributions">PAG-IBIG CONTRIBUTIONS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ess/employee/philhealth_contributions">PhilHealth CONTRIBUTIONS</a></li>

                </ul>
            </li>

            {{-- <li class="sidebar-item">
                <a href="#setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-user"></i> <span class="align-middle">COMPANY</span>
                    </span>
                </a>
                <ul id="setup" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">COMPANY SETUP</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/company-profile">COMPANY PROFILE</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#organizational_setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">ORGANIZATION</span>
                    </span>
                </a>
                <ul id="organizational_setup" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">ORGANIZATIONAL SETUP</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/classes">CLASSES</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/department">DEPARTMENTS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/position">POSITIONS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/leave-type">LEAVE TYPES</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/benefits">BENEFITS</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#payroll_setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">PAYROLL</span>
                    </span>
                </a>
                <ul id="payroll_setup" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">PAYROLL SETUP</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/payroll_calendar">PAYROLL CALENDAR</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/earnings">EARNINGS</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/payroll/work_assignments">WORK ASSIGNMENTS</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#employee_setup" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">EMPLOYEE</span>
                    </span>
                </a>
                <ul id="employee_setup" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="list-title">EMPLOYEE SETUP</li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#roles_permission" data-toggle="collapse" class="sidebar-link collapsed">
                    <span class="item">
                        <i class="align-middle mr-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">ACCESS</span>
                    </span>
                </a>
            </li> --}}
            
            
        </ul>
    </div>
</nav>