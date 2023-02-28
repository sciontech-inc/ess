<?php

namespace App\Http\Controllers;

use App\IncidentReports;
use Illuminate\Http\Request;

class IncidentReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incident_reports = IncidentReports::orderBy('id', 'desc')->get();
        return view('backend.pages.hris.concerns.incident_reports', compact('incident_reports'));
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(IncidentReports::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incident_report = $request->validate([
            'date_filed' => ['required'],
            'incident_report' => ['required'],
            'submitted_by' => ['required'],
        ]);

        $request['workstation_id'] = Auth::user()->id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        IncidentReports::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IncidentReports  $incidentReports
     * @return \Illuminate\Http\Response
     */
    public function show(IncidentReports $incidentReports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncidentReports  $incidentReports
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incident_reports = IncidentReports::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('incident_reports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncidentReports  $incidentReports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        IncidentReports::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncidentReports  $incidentReports
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncidentReports $incidentReports)
    {
        $record = $request->data;

        foreach($record as $item) {
            IncidentReports::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
