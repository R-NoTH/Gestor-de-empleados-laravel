@include('layout.head')
@include('layout.header')
<div class="container">

    <br>
    <div class="card">
        <h5 class="card-header">Edit del Empleado</h5>
        <div class="card-body">
            <form action="{{ action('EmployeeController@update', $data->id) }}" method="post">
                {{ csrf_field() }}
                @method('PUT')
                <div class="container">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row">
                        
                        <div class="col s6">
                            <label for="foto">Foto</label>
                            <input type="text" class="form-control" placeholder="foto" name="foto" value="{{ $data->foto}}">
                        </div>
                        <div class="col s6">
                        <label for="name">Nombre</label>
                        
                        <input type="text" class="form-control" placeholder="name" name="name" value="{{ $data->name}}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="documento">Documento</label>
                        <input type="text" class="form-control" placeholder="documento" name="documento" value="{{ $data->documento}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="sexo">Sexo</label>
                        @if ($data->sexo == 'Mujer')
                        <select class="form-control" name="sexo">
                            <option selected value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                          </select>    
                        @endif
                        @if ($data->sexo == 'Hombre')
                        <select class="form-control" name="sexo">
                            <option value="Mujer">Mujer</option>
                            <option selected value="Hombre">Hombre</option>
                        </select>
                        @endif
                         @if ($data->sexo == null)
                        <select class="form-control" name="sexo">
                            <option selected value="">Escoje un Categoria</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                        </select> 
                        @endif
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="rh">Rh</label>
                        <input type="text" class="form-control" placeholder="rh" name="rh" value="{{ $data->rh}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" placeholder="fecha de nacimiento" name="fecha_nacimiento" value="{{ $data->fecha_nacimiento}}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="lugar_nacimiento">Lugar de Nacimiento</label>
                        <input type="text" class="form-control" placeholder="lugar de nacimiento" name="lugar_nacimiento" value="{{ $data->lugar_nacimiento}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" placeholder="edad" name="edad" value="{{ $data->edad}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="numero_telefono">Numero de Telefono</label>
                        <input type="text" class="form-control" placeholder="numero de telefono" name="numero_telefono" value="{{ $data->numero_telefono}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" placeholder="direccion" name="direccion" value="{{ $data->direccion}}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="cargo">Cargo</label>
                        
                        <input type="text" class="form-control" placeholder="cargo" name="cargo" value="{{ $data->cargo}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="seccion">Seccion</label>
                        
                        <input type="text" class="form-control" placeholder="seccion" name="seccion" value="{{ $data->seccion}}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="alergias_medicamento">Alergias a Medicamento</label>
                        <input type="text" class="form-control" placeholder="alergias de medicamento" name="alergias_medicamento" value="{{ $data->alergias_medicamento}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="telefono_emergencia">Telefono de Emergencia</label>
                        <input type="text" class="form-control" placeholder="telefono de emergencia" name="telefono_emergencia" value="{{ $data->telefono_emergencia}}" >
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="enfermedad_laboral">Enfermedad Laboral</label>
                        <input type="text" class="form-control" placeholder="enfermedad laboral" name="enfermedad_laboral" value="{{ $data->enfermedad_laboral}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="accidentes_trabajo">Accidentes de Trabajo</label>
                        <input type="text" class="form-control" placeholder="accidentes de trabajo" name="accidentes_trabajo" value="{{ $data->accidentes_trabajo}}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col s6">
                        <label for="enfermedad_comun">Enfermedad Comun</label>
                        <input type="text" class="form-control" placeholder="enfermedad comun" name="enfermedad_comun" value="{{ $data->enfermedad_comun}}">
                    </div>
                    
                    <div class="col s6">
                        <label for="covid">covid</label>
                        <input type="text" class="form-control" placeholder="covid" name="covid" value="{{ $data->covid}}">
                    </div>
                    
                </div>
                <br>
                
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
            {{-- <div class="row">
                <div class="input-field col s12">
                    <input placeholder="@lang('app.name')" id="name" type="text" name="name" value="{{ old('name') }}">
                    <label for="name">@lang('app.name')</label>
                </div>
            </div> --}}
        </form>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a>
        --}}
    </div>
</div>
<br>
</div>
@include('layout.script')