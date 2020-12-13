@include('layout.head')
@include('layout.header')

{{--
<link rel="stylesheet" href="../../../public/css/fontello.css"> --}}
<link src="{{ asset('css/fontello.css') }}">
{{-- <style>
    .contenedor {
        width: 90px;
        height: 240px;
        position: absolute;
        right: 0px;
        bottom: 0px;
    }

    .botonF1 {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #3f3f3f;
        right: 0;
        bottom: 0;
        position: absolute;
        margin-right: 20px;
        margin-bottom: 20px;
        border: none;
        outline: none;
        color: #FFF;
        font-size: 30px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        transition: .3s;
    }

    span {
        transition: .5s;
    }

    .botonF1:hover span {
        transform: rotate(360deg);
    }

    .botonF1:active {
        transform: scale(1.3);
    }

    .btn {
        width: 40px;
        height: 40px;
        border-radius: 100%;
        border: none;
        color: #FFF;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        font-size: 28px;
        outline: none;
        position: absolute;
        right: 0;
        bottom: 0;
        margin-right: 26px;
        transform: scale(0);
    }

    .animacionVer {
        transform: scale(1);
    }

</style> --}}
<br>
<div class="container-fluid">

    <table class="table table-striped compact">
        <thead class="thead-dark">
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cargo</th>
                <th>@lang('app.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)

                <tr>
                    <th>{{ $employee->documento }}</th>
                    <th>{{ $employee->name }}</th>
                    <th>{{ $employee->cargo }}</th>
                    <td>
                        <a  class="btn btn-primary" href="{{ route('employees.show', $employee->id) }}">Show | </a>
                        <a class="btn btn-warning" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1">Delete User</button>
                        </form>

                    </td>

                    {{-- <td>
                        <div class="btn-group">
                            <button type="button" class="btn a_neumor" data-toggle="dropdown" aria-expanded="false">
                                @lang('messages.action')
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">

                                <li align="center">
                                    <a id="animation-switcher"
                                        val-route="{!!  route('employees.destroy', $employee->id) !!}"
                                        class=" delete-anime">
                                        <div class="item-checked" data-effect="mfp-rotateRight">@lang('messages.delete')
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td> --}}
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a href="#"
        class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"></a>
    <div class="contenedor">
        <a href="{{ route('employees.create') }}">
            <button class="botonF1">
                <span>+</span>
            </button>
        </a>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('.botonF1').hover(function() {
        $('.btn').addClass('animacionVer');
    })
    $('.contenedor').mouseleave(function() {
        $('.btn').removeClass('animacionVer');
    })

</script>
