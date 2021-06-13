<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Patient::all();
        return view('patient.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->gsm = $request->gsm;
        $patient->disease_id = $request->disease_id;
        $patient->dietitian_id = Auth::user()->id;
        $patient->diet_method_id = $request->diet_method_id;
        $patient->save();
        return redirect('patient/'.$patient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Patient::all()->find($id);
        //return json_decode($data->dietMethod->method , true)["week"];
        return view('patient.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Patient::all()->find($id);
        return view('patient.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::all()->find($id);
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->gsm = $request->gsm;
        $patient->disease_id = $request->disease_id;
        $patient->diet_method_id = $request->diet_method_id;
        $patient->save();
        return redirect('/patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::all()->find($id);
        $patient->delete();
        //return redirect('/patient');
        return back();
    }

    public function changeMethod(Request $request){
        $patient = Patient::find($request->patientId);
        $patient->diet_method_id = $request->newId;
        return $patient->save();

    }
}
