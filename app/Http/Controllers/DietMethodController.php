<?php

namespace App\Http\Controllers;

use App\Models\DietMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DietMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return DietMethod::all()->first()->dietitian;
        return view('dietMethod.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dietMethod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dietMethod = new DietMethod;
        $dietMethod->name = $request->name;
        $dietMethod->method = $request->methodJson;
        $dietMethod->dietitian_id = Auth::user()->id;
        $dietMethod->save();
        return redirect("/dietMethod");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $method = DietMethod::find($id);
        $method["method"] = json_decode($method['method'],true);

        return view('dietMethod.edit')->with('data',$method);
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
        $dietMethod = DietMethod::find($id);
        $dietMethod->name = $request->name;
        $dietMethod->method = $request->methodJson;
        $dietMethod->save();
        return redirect("/dietMethod");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dietMethod = DietMethod::all()->find($id);
        $dietMethod->delete();
        //return redirect('/disease');
        return back();
    }

    public function print(Request $request){
        return $request;
    }
}
