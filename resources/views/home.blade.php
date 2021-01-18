@include('layout.head')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Facon-Sst</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #f8b175;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        /* ----------------------- Carpetas link-------------------------------- */

        .social-link {
            color: #fff;
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
            background: #355c7d;
        }

        .social-twitter:hover,
        .social-twitter:focus {
            background: #5a8688;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="container">

                <div class="title m-b-md">
                    Facon-Sst
                </div>

                <div class="links btn-group-vertical">
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employees.index') }}">Table</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employees.index') }}">Enfermedad comun</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employees.index') }}">Patologia Especiales</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employeesIndexCovid') }}">Covid</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employees.index') }}">Accidentes Laboral</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ route('employees.index') }}">Enfermedad laboral ARL</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                        href="{{ url('panelControl') }}">Panel Control</a>




                </div>
            </div>
        </div>
    </div>
</body>

</html>
