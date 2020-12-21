@include('layout.head')
@include('layout.header')
<div class="container">
    <br>
    <div class="card">
        <h5 class="card-header">Employee</h5>
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
                            <input type="text" class="form-control" placeholder="foto" name="foto"
                                value="{{ old('foto') }}">
                        </div>
                        <div class="col s6">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" placeholder="name" name="name"
                                value="{{ old('name') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="documento">Documento</label>

                            <input type="text" class="form-control" placeholder="documento" name="documento"
                                value="{{ old('documento') }}">
                        </div>

                        <div class="col s6">
                            <label for="sexo">Sexo</label>

                            <input type="text" class="form-control" placeholder="sexo" name="sexo"
                                value="{{ old('sexo') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="rh">Rh</label>

                            <input type="text" class="form-control" placeholder="rh" name="rh" value="{{ old('rh') }}">
                        </div>

                        <div class="col s6">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>

                            <input type="date" class="form-control" placeholder="fecha de nacimiento"
                                name="fecha_nacimiento" value="{{ old('nafecha_nacimientome') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="lugar_nacimiento">Lugar de Nacimiento</label>

                            <input type="text" class="form-control" placeholder="lugar de nacimiento"
                                name="lugar_nacimiento" value="{{ old('lugar_nacimiento') }}">
                        </div>

                        <div class="col s6">
                            <label for="edad">Edad</label>

                            <input type="text" class="form-control" placeholder="edad" name="edad"
                                value="{{ old('edad') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="numero_telefono">Numero de Telefono</label>

                            <input type="text" class="form-control" placeholder="numero de telefono"
                                name="numero_telefono" value="{{ old('numero_telefono') }}">
                        </div>

                        <div class="col s6">
                            <label for="direccion">Direccion</label>

                            <input type="text" class="form-control" placeholder="direccion" name="direccion"
                                value="{{ old('direccion') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="cargo">Cargo</label>

                            <input type="text" class="form-control" placeholder="cargo" name="cargo"
                                value="{{ old('cargo') }}">
                        </div>

                        <div class="col s6">
                            <label for="seccion">Seccion</label>

                            <input type="text" class="form-control" placeholder="seccion" name="seccion"
                                value="{{ old('seccion') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="alergias_medicamento">Alergias a Medicamento</label>

                            <input type="text" class="form-control" placeholder="alergias de medicamento"
                                name="alergias_medicamento" value="{{ old('alergias_medicamento') }}">
                        </div>

                        <div class="col s6">
                            <label for="telefono_emergencia">Telefono de Emergencia</label>

                            <input type="text" class="form-control" placeholder="telefono de emergencia"
                                name="telefono_emergencia" value="{{ old('telefono_emergencia') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_laboral">Enfermedad Laboral</label>

                            <input type="text" class="form-control" placeholder="enfermedad laboral"
                                name="enfermedad_laboral" value="{{ old('enfermedad_laboral') }}">
                        </div>

                        <div class="col s6">
                            <label for="accidentes_trabajo">Accidentes de Trabajo</label>

                            <input type="text" class="form-control" placeholder="accidentes de trabajo"
                                name="accidentes_trabajo" value="{{ old('accidentes_trabajo') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_comun">Enfermedad Comun</label>

                            <input type="text" class="form-control" placeholder="enfermedad comun"
                                name="enfermedad_comun" value="{{ old('enfermedad_comun') }}">
                        </div>

                        <div class="col s6">
                            <label for="covid">covid</label>

                            <input type="text" class="form-control" placeholder="covid" name="covid"
                                value="{{ old('covid') }}">
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