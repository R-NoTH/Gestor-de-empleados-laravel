@include('layout.head')
@include('layout.header')
<style>
    body {
        background-color: #2a363b;
    }

</style>
<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <form action="{{ action('EmployeeController@store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h5 class="card-title text-center" style="font-size: 1.7625rem;line-height: 1.4em;color:#233e55">
                    Registro de Funcionarios</h5>
                <br>

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
                    @if (session()->has('status'))
                            <div class="alert alert-info" role="alert">
                                {{ session()->get('status') }}
                            </div>
                        @endif
                        @if (session()->has('msg'))
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-alert card" style="background:#808080;color:white;">
                                        <div style="margin-left: 10px">
                                            <p><b>{{ session('msg') }}</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    <div class="row">

                        {{-- <div class="col s6">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="image_name" value="{{ old('foto') }}">
                        </div> --}}
                        <div class="col s6">
                            <label for="foto">Foto</label>
                                <input type="file" name="image_name" class="form-control" id="name" value="">
                            
                        </div>
                        <div class="col s6">
                            <label for="name">Nombre Completo</label>
                            <input type="text" style="border-radius: 10px;" class="form-control" name="name"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="documento">Documento</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="documento"
                                value="{{ old('documento') }}">
                        </div>

                        <div class="col s6">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" name="sexo">
                                <option selected value="">Escoje un Categoria</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="rh">Rh</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="rh"
                                value="{{ old('rh') }}">
                        </div>

                        <div class="col s6">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>

                            <input type="date" style="border-radius: 10px;" class="form-control" name="fecha_nacimiento"
                                value="{{ old('nafecha_nacimientome') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="lugar_nacimiento">Lugar de Nacimiento</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="lugar_nacimiento"
                                value="{{ old('lugar_nacimiento') }}">
                        </div>

                        <div class="col s6">
                            <label for="edad">Edad</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"" name=" edad"
                                value="{{ old('edad') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="numero_telefono">Numero de Telefono</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="numero_telefono"
                                value="{{ old('numero_telefono') }}">
                        </div>

                        <div class="col s6">
                            <label for="direccion">Direccion</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="direccion"
                                value="{{ old('direccion') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="cargo">Cargo</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="cargo"
                                value="{{ old('cargo') }}">
                        </div>

                        <div class="col s6">
                            <label for="seccion_id">Seccion</label>
                            <select class="form-control" name="seccion_id">
                                <option selected value="">Escoje un Categoria</option>
                                @foreach ($seccions as $seccion)
                                    <option name="seccion_id" id="seccion_id" value="{{ $seccion->id }}">
                                        {{ $seccion->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="alergias_medicamento">Alergias a Medicamentos</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"
                                name="alergias_medicamento" value="{{ old('alergias_medicamento') }}">
                        </div>

                        <div class="col s6">
                            <label for="telefono_emergencia">Telefono de Emergencia</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"
                                name="telefono_emergencia" value="{{ old('telefono_emergencia') }}">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_laboral">Enfermedad Laboral</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"
                                name="enfermedad_laboral" value="{{ old('enfermedad_laboral') }}">
                        </div>

                        <div class="col s6">
                            <label for="covid">Covid</label>
                            <select class="form-control" name="covid">
                                <option selected value="">Escoje un Categoria</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="enfermedad_comun">Enfermedad Comun</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="enfermedad_comun"
                                value="{{ old('enfermedad_comun') }}">
                        </div>


                        <div class="col s6">
                            <label for="accidentes_trabajo">Accidentes Laboral</label>

                            <textarea style="border-radius: 10px;" class="form-control" name="accidentes_trabajo"
                                rows="1" value="{{ old('accidentes_trabajo') }}"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="patologia_especial">Patologia Especial</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"
                                name="patologia_especial" value="{{ old('patologia_especial') }}">
                        </div>


                        <div class="col s6">
                            <label for="enfermedad_laboral_arl">Enfermedad laboral ARL</label>

                            <input type="text" style="border-radius: 10px;" class="form-control"
                                name="enfermedad_laboral_arl" value="{{ old('enfermedad_laboral_arl') }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s6">
                            <label for="gestantes">Gestantes (Fecha de posible parto)</label>

                            <input type="date" style="border-radius: 10px;" class="form-control" name="gestantes"
                                value="{{ old('gestantes') }}">
                        </div>


                        <div class="col s6">
                            <label for="lactantes">Lactantes</label>

                            <input type="text" style="border-radius: 10px;" class="form-control" name="lactantes"
                                value="{{ old('lactantes') }}">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
        </div>

        </form>

        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
</div>

<br>
@include('layout.script')
