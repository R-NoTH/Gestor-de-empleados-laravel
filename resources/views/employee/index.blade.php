@include('layout.head')
@include('layout.header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<link src="{{ asset('css/fontello.css') }}">
<br>

<div class='container'>
    <div>
        <h3>Tabla : Empleados</h3>
        <div class="col-3">
            <a href="{{ route('employees.create') }}" class="btn btn-info"><i class="fas fa-user-plus"></i> Agregar un
                nuevo Registro</a>
        </div>
    </div>

</div>
<br>
<div class="container">

    <table id="employes" class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cargo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)

                <tr>
                    <th>{{ $employee->id }}</th>
                    <th>
                        <a href="{{ route('employees.show', $employee->id) }}">{{ $employee->documento }}</a>
                    </th>
                    <th>{{ $employee->name }}</th>
                    <th>{{ $employee->cargo }}</th>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                            <a class="btn btn-secondary" href="{{ route('employees.edit', $employee->id) }}"><i
                                    class="far fa-edit"></i></a>
                        </form>

                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#employes').DataTable();
        });

    </script>
</div>
