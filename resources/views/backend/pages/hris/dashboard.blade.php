@extends('backend.master.index')

@section('title', 'OVERVIEW')

@section('breadcrumbs')
    <span>HRIS</span> / <span class="highlight">OVERVIEW</span>
@endsection

@section('left-content')
<div class="row">
   
    
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Planned vs Unplanned Leaves (Work week)</label>
                        </div>
                        <div class="col-md-12">
                            <div class="chart">
                                <canvas id="chartjs-bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Sick Leave Applications</label>
                        </div>
                        <div class="col-md-12">
                            <div class="chart">
                                <canvas id="chartjs-polar-area"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Approved Overtime Daily (Work Week)</label>
                        </div>
                        <div class="col-md-12">
                            <div class="chart">
                                <canvas id="chartjs-line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Employee Attendance based on Shift Schedule</label>
                        </div>
                        <div class="col-md-12">
                            <div class="chart">
                                <canvas id="chartjs-bar-2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <label class="section-label">United Laboratories, Inc.</label>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Today's Attendance (March 01, 2023)</label>
                        </div>
                        <div class="col-md-12">
                        <table class="wks">
                            <tr>
                                <th>Employee Name</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                            </tr>
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>Registered Nurse</td>
                                <td>Medical</td>
                                <td>8:00AM</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Marie Reyes</td>
                                <td>Registered Nurse</td>
                                <td>Medical</td>
                                <td>8:00AM</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Arnold Samson</td>
                                <td>Registered Nurse</td>
                                <td>Medical</td>
                                <td>8:00AM</td>
                                <td>5:00PM</td>
                            </tr>
                            <tr>
                                <td>Shane Castro</td>
                                <td>Registered Nurse</td>
                                <td>Medical</td>
                                <td>9:00AM</td>
                                <td>6:00PM</td>
                            </tr>
                            <tr>
                                <td>Randy Ortega</td>
                                <td>Registered Nurse</td>
                                <td>Medical</td>
                                <td>8:00AM</td>
                                <td>-</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Payroll Issue/Dispute</label>
                        </div>
                        <div class="col-md-12">
                        <table class="dtl">
                            <tr>
                                <th>Date Filed</th>
                                <th>Payroll Date</th>
                                <th>Employee Name</th>
                                <th>Issue/Dispute</th>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>March 1, 2023</td>
                                <td>Randy Ortega</td>
                                <td>No overtime pay</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>March 1, 2023</td>
                                <td>Arnold Samson</td>
                                <td>Huge deductions</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>March 1, 2023</td>
                                <td>Marie Reyes</td>
                                <td>No overtime pay</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>March 1, 2023</td>
                                <td>Coleen Santos</td>
                                <td>No late time in</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>March 1, 2023</td>
                                <td>Juan Dela Cruz</td>
                                <td>No overtime pay</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <button type="button" class="btn btn-primary">View Timelogs</button> --}}
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <button type="button" class="btn btn-primary">View All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Request</label>
                        </div>
                        <div class="col-md-12">
                        <table class="dtl">
                            <tr>
                                <th>Date Filed</th>
                                <th>Employee Name</th>
                                <th>Request</th>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>Randy Ortega</td>
                                <td>Salary Increase</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>Arnold Samson</td>
                                <td>Transfer Site</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>Marie Reyes</td>
                                <td>Overtime Request</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>Coleen Santos</td>
                                <td>Reimbursement</td>
                            </tr>
                            <tr>
                                <td>May 1, 2023</td>
                                <td>Juan Dela Cruz</td>
                                <td>Leave Request</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <button type="button" class="btn btn-primary">View Timelogs</button> --}}
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <button type="button" class="btn btn-primary">View All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('right-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">New Hire vs Resigned Count</h5>
				<h6 class="card-subtitle text-muted"></h6>
            </div>
            <div class="col-12">
                <div class="card-body">
                        <div class="chart chart-xs">
                            <canvas id="chartjs-pie"></canvas>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Present vs Total Active </h5>
            </div>
            <div class="col-12">
                <div class="card-body" style="padding: 0px !important;">
                    <div style="padding: 1em;"></div>
                    <h5 class="text-primary">589 <span class="text-percentage">(90.61%)</span></h5>
                    <h6 class="card-subtitle text-muted">Present for the day</h6>
                    <hr>
                    <h5 class="text-primary">61 <span class="text-percentage">(9.39%)</span></h5>
                    <h6 class="card-subtitle text-muted">Absent for the day</h6>
                    <hr>
                    <h5 class="text-primary">650</h5>
                    <h6 class="card-subtitle text-muted">Total active headcounts</h6>
                    <hr>
                    <div style="padding: 1em;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@endsection

@section('styles')
<style>
    .main {
        overflow-x: hidden;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
    }
    .text-percentage {
        font-size: 9px;
        color: gray;
    }
    .text-primary {
        color: #3282b8;
        font-size: 20px;
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
        background: #d3d3d3;
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
    label.section-label {
        color: #3282b8;
    }
  </style>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    {{-- <script src="/js/backend/pages/payroll/transaction/employee/leave_application.js"></script> --}}
@endsection

@section('chart-js')
    <script>
        $(function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-pie"), {
                type: "doughnut",
                data: {
                    labels: ["New Hire", "Resigned Count"],
                    datasets: [{
                        data: [98, 12],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
		$(function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-bar"), {
				type: "bar",
				data: {
					labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
					datasets: [{
						label: "VL - Vacation Leave",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55],
						barPercentage: .75,
						categoryPercentage: .5
					}, {
						label: "SL - Sick Leave",
						backgroundColor: "#E8EAED",
						borderColor: "#E8EAED",
						hoverBackgroundColor: "#E8EAED",
						hoverBorderColor: "#E8EAED",
						data: [69, 66, 24, 48, 52, 51, 44],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
    <script>
		$(function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-bar-2"), {
				type: "bar",
				data: {
					labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
					datasets: [{
						label: "Employee",
						data: [594, 612, 588, 595, 620, 587, 589],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1

					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
    <script>
		$(function() {
			// Polar Area chart
			new Chart(document.getElementById("chartjs-polar-area"), {
				type: "polarArea",
				data: {
					labels: ["Fever/Colds", "Covid", "Typhoid Fever", "Asthma", "Diarrhea", "Sore Eyes", "Dengue"],
					datasets: [{
						label: "Model S",
						data: [35, 38, 65, 70, 24, 13, 8],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info,
                            "#A020F0",
                            "FFFF00"

						]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>
    <script>
		$(function() {
			// Line chart
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: {
					labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
					datasets: [{
						label: "Overtime Transactions",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [211, 156, 154, 182, 147, 223, 296]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>
@endsection