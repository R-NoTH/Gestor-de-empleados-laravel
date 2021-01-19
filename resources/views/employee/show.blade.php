@include('layout.head')
@include('layout.header')
<style>
  body{
      background-color: #2a363b;
  }
  .social-link {
        color: #ffffff;
        background: #ff3f3f;
        display: block;
        transition: all 0.3s;
    }

    .social-link:hover,
    .social-link:focus {
        color: white;
        text-decoration: none;
    }


    .social-twitter {
        background:#5341a5;
    }

    .social-twitter:hover,
    .social-twitter:focus {
        background: #C06C84;
    }
</style>
<div class="container">

    <br>
    <div class="card" style="background-color: #2a363b;" >
        {{-- <h5 >Edit del Empleado</h5> --}}
        <h5 class="card-title text-center" style="font-size: 1.7625rem;line-height: 1.4em;color:#ffffff" >Show del Funcionarios</h5>
        <table id="table_id" class="table table-bordered table-dark">
          <thead>
            <tr>
              
              <th>Nombre</th>
              <td>{{ $data->name}}</td> 
            </tr>
            <tr>
              
              <th>Documento</th>
              <td>{{ $data->documento}}</td> 
            </tr>
            <tr>
              
              <th>Sexo</th>
              <td>{{ $data->sexo}}</td> 
            </tr>
            <tr>
              
              <th>Rh</th>
              <td>{{ $data->rh}}</td> 
            </tr>
            <tr>
              
              <th>Fecha de Nacimiento</th>
              <td>{{ $data->fecha_nacimiento}}</td> 
            </tr>
            <tr>
              
              <th>Lugar de Nacimiento</th>
              <td>{{ $data->lugar_nacimiento}}</td> 
            </tr>
            <tr>
              
              <th>Edad</th>
              <td>{{ $data->edad}}</td> 
            </tr>
            <tr>
              
              <th>Numero de Telefono</th>
              <td>{{ $data->numero_telefono}}</td> 
            </tr>
            <tr>
              
              <th>Direccion</th>
              <td>{{ $data->direccion}}</td> 
            </tr>
            <tr>
              
              <th>Cargo</th>
              <td>{{ $data->cargo}}</td> 
            </tr>
            <tr>
              
              <th>Seccion</th>
              @if ($data->seccion_id != null)
              <td>{{ $data->seccion->name}}</td> 
                  
              @else
              <td>Sin asignar</td> 
              @endif
            </tr>
            <tr>
              
              <th>Alergias a Medicamento</th>
              <td>{{ $data->alergias_medicamento}}</td> 
            </tr>
            <tr>
              
              <th>Telefono de Emergencia</th>
              <td>{{ $data->telefono_emergencia}}</td> 
            </tr>
            <tr>
              
              <th>Enfermedad Laboral</th>
              <td>{{ $data->enfermedad_laboral}}</td> 
            </tr>
            <tr>
              
              <th>Covid</th>
              <td>{{ $data->covid}}</td> 
            </tr>
            <tr>
              
              <th>Enfermedad Comun</th>
              <td>{{ $data->enfermedad_comun}}</td> 
            </tr>
            <tr>
              
              <th>Accidentes Laboral</th>
              <td>{{ $data->accidentes_trabajo}}</td> 
            </tr>
            



          </thead>
          
        </table>
                  <a class="btn btn-sm social-link social-twitter" href="javascript:history.back()"> Volver Atrás</a> 
            
        </div>
    </div>
    <br>
</div>
@include('layout.script')
