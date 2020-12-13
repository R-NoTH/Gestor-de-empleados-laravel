<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view ('employee.index',compact('employees'));
        // dd('dfhfghks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'documento' => 'integer',
            'edad' => 'integer',
            'numero_telefono' => 'integer',
            'telefono_emergencia' => 'integer',
            'rh' => 'max:4',
            
           
        ]);

        $input = request()->except('_token');
       
        Employee::create($input);

        return redirect()->action('EmployeeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Employee::find($id);
        return view('employee.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $data = Employee::find($id);
        return view('employee.edit',compact('data'));
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
       $data = Employee::findOrFail($id);

        $this->validate($request, [
            'documento' => 'integer',
            'edad' => 'integer',
            'numero_telefono' => 'integer',
            'telefono_emergencia' => 'integer',
            'rh' => 'max:4',
            
           
        ]);

        $input = $request->all();
       
        $data->fill($input)->save();

        return redirect()->action('EmployeeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Employee::destroy($id);
        return redirect()->action('EmployeeController@index');
    }
}
