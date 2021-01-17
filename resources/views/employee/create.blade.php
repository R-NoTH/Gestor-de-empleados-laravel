@include('layout.head')
@include('layout.header')
<div class="container">
    <br>
    <h5 class="card-header">Registro de Empleados</h5>
    <div class="card">
        <div class="card-body">
            <form action="{{ action('EmployeeController@store') }}" method="post">
                {{ csrf_field() }}

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
                            <input type="text" class="form-control" name="foto" value="{{ old('foto') }}">
                        </div>
                        <div class="col s6">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="documento">Documento</label>

                            <input type="text" class="form-control" name="documento" value="{{ old('documento') }}">
                        </div>

                        <div class="col s6">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" name="sexo">
                                <option value="Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="rh">Rh</label>

                            <input type="text" class="form-control" name="rh" value="{{ old('rh') }}">
                        </div>

                        <div class="col s6">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>

                            <input type="date" class="form-control" name="fecha_nacimiento"
                                value="{{ old('nafecha_nacimientome') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="lugar_nacimiento">Lugar de Nacimiento</label>

                            <input type="text" class="form-control" name="lugar_nacimiento"
                                value="{{ old('lugar_nacimiento') }}">
                        </div>

                        <div class="col s6">
                            <label for="edad">Edad</label>

                            <input type="text" class="form-control"" name=" edad" value="{{ old('edad') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="numero_telefono">Numero de Telefono</label>

                            <input type="text" class="form-control" name="numero_telefono"
                                value="{{ old('numero_telefono') }}">
                        </div>

                        <div class="col s6">
                            <label for="direccion">Direccion</label>

                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="cargo">Cargo</label>

                            <input type="text" class="form-control" name="cargo" value="{{ old('cargo') }}">
                        </div>

                        <div class="col s6">
                            <label for="seccion_id">Seccion</label>
                            <select class="form-control" name="seccion_id">
                                @foreach ($seccions as $seccion)
                                    <option name="seccion_id" id="seccion_id" value="{{ $seccion->id }}">{{ $seccion->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="alergias_medicamento">Alergias a Medicamentos</label>

                            <input type="text" class="form-control" name="alergias_medicamento"
                                value="{{ old('alergias_medicamento') }}">
                        </div>

                        <div class="col s6">
                            <label for="telefono_emergencia">Telefono de Emergencia</label>

                            <input type="text" class="form-control" name="telefono_emergencia"
                                value="{{ old('telefono_emergencia') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_laboral">Enfermedad Laboral</label>

                            <input type="text" class="form-control" name="enfermedad_laboral"
                                value="{{ old('enfermedad_laboral') }}">
                        </div>

                        <div class="col s6">
                            <label for="covid">Covid</label>
                            <select class="form-control" name="covid">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_comun">Enfermedad Comun</label>

                            <input type="text" class="form-control" name="enfermedad_comun"
                                value="{{ old('enfermedad_comun') }}">
                        </div>


                        <div class="col s6">
                            <label for="accidentes_trabajo">Accidentes Laboral</label>

                            <textarea class="form-control" name="accidentes_trabajo" rows="1"
                                value="{{ old('accidentes_trabajo') }}"></textarea>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
        </div>

        </form>

        {{-- <a href="#" class="btn btn-primary">Go somewhere</a>
        --}}
    </div>
</div>

<br>
@include('layout.script')
