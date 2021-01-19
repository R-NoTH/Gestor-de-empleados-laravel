@include('layout.head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@include('layout.header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<link src="{{ asset('css/fontello.css') }}">
<style>
    body{
        background-color: #2a363b;
        color: #ffffff;
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
        background:#50438d;
    }

    .social-twitter:hover,
    .social-twitter:focus {
        background: #C06C84;
    }

</style>
<br>

<div class='container'>
    <div>
        <h3>Tabla : Empleados</h3>
            <a href="{{ route('employees.create') }}" class="social-link rounded py-2 px-4 my-2 social-twitter"><i class="fas fa-user-plus"></i> Agregar un
                nuevo Registro</a>
       
    </div>

</div>
<br>
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <table id="EnfermedadComunDatatable" class="table table-dark">
        <thead style="background-color:#4a3899;">
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
            $('#EnfermedadComunDatatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!!  route('employeesDataTableEnfermedadComun') !!}',
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
            $(document).on('click', '.deleteItem', function () {
            var id = $(this).data("id");
            confirm("Are You sure want to delete !");
            $.ajax({
                type: "post",
                url: "{{ url('employees') }}/"+id,
                success: function (data) {
                    $('#employesDatatable').DataTable().ajax.reload();
                    console.log('fine');

                },
                error: function (data) {
                    // $('#employesDatatable').DataTable().ajax().reload();
                    console.log('error');
                }
            });
        });
        });

    </script>
</div>
