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
                            <input type="text" class="form-control" name="foto"
                                value="{{ $data->foto }}">
                        </div>
                        <div class="col s6">
                            <label for="name">Nombre</label>

                            <input type="text" class="form-control" name="name"
                                value="{{ $data->name }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="documento">Documento</label>
                            <input type="text" class="form-control"  name="documento"
                                value="{{ $data->documento }}">
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
                            <input type="text" class="form-control"  name="rh" value="{{ $data->rh }}">
                        </div>

                        <div class="col s6">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" placeholder="fecha de nacimiento"
                                name="fecha_nacimiento" value="{{ $data->fecha_nacimiento }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="lugar_nacimiento">Lugar de Nacimiento</label>
                            <input type="text" class="form-control" name="lugar_nacimiento" value="{{ $data->lugar_nacimiento }}">
                        </div>

                        <div class="col s6">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" name="edad"
                                value="{{ $data->edad }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="numero_telefono">Numero de Telefono</label>
                            <input type="text" class="form-control" name="numero_telefono" value="{{ $data->numero_telefono }}">
                        </div>

                        <div class="col s6">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control"name="direccion"
                                value="{{ $data->direccion }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="cargo">Cargo</label>

                            <input type="text" class="form-control" name="cargo"
                                value="{{ $data->cargo }}">
                        </div>

                        <div class="col s6">
                            <label for="seccion_id">Seccion</label>
                            <select class="form-control" name="seccion_id">
                                @if ($data->seccion_id != null)

                                    @foreach ($seccions as $seccion)
                                        <option value="{{ $seccion->id }}"
                                            {{ $seccion->id == $data->seccion_id ? 'selected' : '' }}>
                                            {{ $seccion->name }}</option>
                                    @endforeach

                                @else
                                    <option selected value="">Escoje un Categoria</option>
                                    @foreach ($seccions as $seccion)
                                        <option value="{{ $seccion->id }}"
                                            {{ $seccion->id == $data->seccion_id ? 'selected' : '' }}>
                                            {{ $seccion->name }}</option>
                                    @endforeach

                                @endif
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="alergias_medicamento">Alergias a Medicamento</label>
                            <input type="text" class="form-control" name="alergias_medicamento" value="{{ $data->alergias_medicamento }}">
                        </div>

                        <div class="col s6">
                            <label for="telefono_emergencia">Telefono de Emergencia</label>
                            <input type="text" class="form-control" name="telefono_emergencia" value="{{ $data->telefono_emergencia }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_laboral">Enfermedad Laboral</label>
                            <input type="text" class="form-control" name="enfermedad_laboral" value="{{ $data->enfermedad_laboral }}">
                        </div>

                        {{-- <div class="col s6">
                            <label for="covid">covid</label>
                            <input type="text" class="form-control" placeholder="covid" name="covid"
                                value="{{ $data->covid }}">
                        </div> --}}
                        <div class="col s6">
                            <label for="covid">Covid</label>
                            @if ($data->covid == 'Si')
                                <select class="form-control" name="covid">
                                    <option selected value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            @endif
                            @if ($data->covid == 'No')
                                <select class="form-control" name="covid">
                                    <option selected value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            @endif
                            @if ($data->covid == null)
                                <select class="form-control" name="covid">
                                    <option selected value="">Escoje un Categoria</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            @endif
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_comun">Enfermedad Comun</label>
                            <input type="text" class="form-control" name="enfermedad_comun" value="{{ $data->enfermedad_comun }}">
                        </div>

                        <div class="col s6">
                            <label for="accidentes_trabajo">Accidentes Laboral</label>
                            <textarea class="form-control" name="accidentes_trabajo" rows="1"
                                value="{{ old('accidentes_trabajo') }}">{{ $data->accidentes_trabajo }}</textarea>
                        </div>


                    </div>
                    <br>

                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
                {{-- <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="@lang('app.name')" id="name" type="text" name="name"
                            value="{{ old('name') }}">
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
