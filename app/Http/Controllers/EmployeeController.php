<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Seccion;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Covid
    public function indexCovid()
    {
        $Covid = Employee::where('covid','Si')->get();
        $count = 0;
        for ($i=0; $i <count($Covid); $i++) { 
            $count++;
        }
        return view ('employee.indexCovid',compact('count'));
    }
    public function dataTableCovid()
    {
        $Covid = Employee::where('covid','Si');
        return DataTables::of($Covid)
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';
            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    // Enfermedad Comun
    public function indexEnfermedadComun()
    {
        $EnfermedadComun = Employee::where('enfermedad_comun','!=',null)->get();
        $count = 0;
        for ($i=0; $i <count($EnfermedadComun); $i++) { 
            $count++;
        }
        return view ('employee.indexEnfermedadComun',compact('count'));
    }
    public function dataTableEnfermedadComun()
    {
        $enfermedadComun = Employee::where('enfermedad_comun', '!=',null);
        return DataTables::of($enfermedadComun)
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';
            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    // Accidente Laboral
    public function indexAccidenteLaboral()
    {
        $accidenteLaboral = Employee::where('accidentes_trabajo','!=',null)->get();
        $count = 0;
        for ($i=0; $i <count($accidenteLaboral); $i++) { 
            $count++;
        }
        // dd($count);
        return view ('employee.indexAccidenteLaboral',compact('count'));
    }
    public function dataTableAccidenteLaboral()
    {
        $accidenteLaboral = Employee::where('accidentes_trabajo', '!=',null);
        return DataTables::of($accidenteLaboral)
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';
            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    public function indexPatologiaEspecial()
    {
        $PatologiaEspecial = Employee::where('patologia_especial','!=',null)->get();
        $count = 0;
        for ($i=0; $i <count($PatologiaEspecial); $i++) { 
            $count++;
        }
        return view ('employee.indexPatologiaEspecial',compact('count'));
    }
    public function dataTablePatologiaEspecial()
    {
        $patologiaespecial = Employee::where('patologia_especial', '!=',null);
        return DataTables::of($patologiaespecial)
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';
            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    public function indexEnfermedadlaboralArl()
    {
        $Enfermedadlaboralarl = Employee::where('enfermedad_laboral_arl','!=',null)->get();
        $count = 0;
        for ($i=0; $i <count($Enfermedadlaboralarl); $i++) { 
            $count++;
        }
        return view ('employee.indexEnfermedadlaboralArl',compact('count'));
    }
    public function dataTableEnfermedadlaboralArl()
    {
        $Enfermedadlaboralarl = Employee::where('enfermedad_laboral_arl', '!=',null);
        return DataTables::of($Enfermedadlaboralarl)
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';
            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    // Datatable
    public function dataTable()
    {
        return DataTables::of(Employee::query())
        ->addColumn('action', function(Employee $employee){
            $actionBtn = '<a class="btn  btn-sm" style="background-color:#519D9E;" href="' . route('employees.edit', $employee->id) .'"><i
            class="far fa-edit"></i></a>';
            $actionBtn .= '&nbsp;<a class="btn btn-sm show-btn" style="background-color:#519D9E;" href="' . route('employees.show', $employee->id) .'"><i class="far fa-eye"></i></a>';
            //Boton para eliminar
            $actionBtn .= '&nbsp;<a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc('. $employee->id.' )" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm" style="background-color:#519D9E;">
            <i class="fas fa-trash-alt"></i>
            </a>';

            return $actionBtn;
        })
        ->rawColumns(['action'])
        ->toJson();
    }
    public function index()
    {
        $employee= Employee::all();
        $count = 0;
        for ($i=0; $i <count($employee) ; $i++) { 
            # code...
            $count++;
        }
        // dd($count);
        return view ('employee.index',compact('count'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seccions=Seccion::all();
        // dd($seccion);
        return view('employee.create',compact('seccions'));
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
            'name'=> 'required',
            'sexo'=> 'required',
            'rh'=> 'required',
            'fecha_nacimiento'=>'required',
            'lugar_nacimiento'=> 'required',
            'documento' => 'integer',
            'edad' => 'integer',
            'numero_telefono' => 'integer',
            'telefono_emergencia' => 'integer',
            'rh' => 'max:4',
        ]);
        $input = request()->except('_token');
        // dd($input);
       
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

        // dd($data->seccion->name);
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
       $seccions=Seccion::all(); 
    //    dd();
        return view('employee.edit',compact('data','seccions'));
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
    public function destroy(Request $request)
    {
        $employee = Employee::where('id',$request->id)->delete();
      
        return Response()->json($employee);

    }
}
