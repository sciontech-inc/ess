<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\PayrollCalendarHeaders;
use App\PayrollCalendarDetails;
use Auth;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function payrun() {
        return view('backend.pages.payroll.transaction.payrun.index');
    }

    public function calendar() {
        return view('backend.pages.payroll.maintenance.payroll_calendar');
    }

    public function save_payroll_calendar(Request $request) {
        if($request->calendar_type !== 'custom') {
            $validate = $request->validate([
                'name' => 'required|unique:payroll_calendar_headers',
                'calendar_type' => 'required',
                'start_date' => 'required',
            ]);
        }
        else {
            $validate = $request->validate([
                'name' => 'required|unique:payroll_calendar_headers',
                'calendar_type' => 'required',
                'start_date' => 'required',
                'frequency' => 'required'
            ]);
        }

        $header = array(
            "workstation_id" => Auth::user()->workstation_id,
            "name" => $request->name,
            "calendar_type" => $request->calendar_type,
            "frequency" => $request->frequency,
            "set_as_default" => $request->set_as_default,
            "status" => 1,
            "created_by" => Auth::user()->id,
            "updated_by" => Auth::user()->id
        );

        $p_headers = PayrollCalendarHeaders::create($header);

        $details = array(
            "payroll_calendar_header_id" => $p_headers->id,
            "start_date" => $request->start_date,
            "first_payment" => $request->first_payment,
            "start_of_week" => $request->start_of_week,
            "end_of_week" => $request->end_of_week
        );
        PayrollCalendarDetails::create($details);

        return response()->json(compact('validate'));
    }

    public function getPayrollCalendar() {
        if(request()->ajax()) {
            return datatables()->of(PayrollCalendarHeaders::with('details')->get())
            ->addIndexColumn()
            ->make(true);
        }
    }
}
