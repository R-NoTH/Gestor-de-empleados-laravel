@include('layout.head')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@include('layout.header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

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
        background:#C06C84;
    }

    .social-twitter:hover,
    .social-twitter:focus {
        background:#50438d;
        
    }

</style>
<br>

<div class='container'>
    <div>
        <h3> Funcionarios <i>({{ $count }})</i> </h3>

        <div>
            <a href="{{ route('employees.create') }}" class="social-link rounded py-2 px-4 my-2 social-twitter"><i
                    class="fas fa-user-plus"></i> Agregar un registro</a>
        </div>
    </div>

</div>
<br>
<div class="container">

    <div id="message">

    <table id="employesDatatable" class="table table-dark" style="color: #ffffff">
        <thead class="" style="background-color:#C06C84;">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cargo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
    </table>
    <div class="modal" id="miModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            let gg = 1;
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
        });
        $(".show-btn").on("click", function() {

            $(".modal").modal("show");

        });
        // 

        function deleteFunc(id){
            var token = '{{ csrf_token() }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token,
                    'X-Requested-With': 'XMLHttpRequest',
                }
            });
            if (confirm("Delete Record?") == true) {
            var id = id;
            alert(id);
        // ajax
        $.ajax({
        type:"POST",
        url: "{{ url('delete-company')}}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
        var oTable = $('#employesDatatable').dataTable();
        oTable.fnDraw(false);
        }
        });
            }
        }


    </script>
</div>
