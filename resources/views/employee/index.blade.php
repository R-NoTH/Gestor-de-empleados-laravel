@include('layout.head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
<div id="confirmModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">hola como estas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Estas seguro de eliminar este usuario ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="confirm"name="confirm">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <table id="employesDatatable" class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cargo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
    </table>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#employesDatatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!!  route('employeesDataTable') !!}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'documento',
                        name: 'documento'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'cargo',
                        name: 'cargo'
                    },

                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
            var employee_id;
            $(document).on('click', '.delete', function() {
                employee_id = $(this).attr('id');
                $('#confirmModal').modal('show')
            });
            $('#confirm').click(function () {
                
                $.ajax({
                    url:"/employees/destroy/"+employee_id,
                    beforeSend:function(){
                        $('#confirmModal').text('Delete');
                        // alert(employee_id);
                        // alert('Data Deleted');
                        
                   },
                   succes:function(data)
                   {
                       setTimeout(function(){
                           $('#confirmModal').modal('hide');
                        //    $('.modal-backdrop').remove();
                           $('#employesDatatable').DataTable().ajax.reload();
                           alert('Data Deleted');
                       },2000);
                   }
               }) 
            });
        });

    </script>
</div>
