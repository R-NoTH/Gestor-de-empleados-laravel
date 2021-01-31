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
            background-color:#2a363b;
            color: #ffffff;
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
            font-size: 94px;
        }

        .links>a {
            color: #ffffff;
            /* padding: 100px; */
            font-size: 15px;
            font-weight: 400;
            letter-spacing: .1rem;
            text-decoration: none;
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
            background: #C06C84;
        }

        .social-twitter:hover,
        .social-twitter:focus {
            background:#5643ac;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="container">

                <div class="title m-b-md">
                  <b>FACON-SST </b>  
                </div>

                <div class="links btn-group-vertical ">
                    <div class="container links btn-group-vertical" >

                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employees.index') }}">General</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employeesIndexCovid') }}">Covid-19</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employeesIndexAccidentesLaboral') }}">Accidentes Laboral</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employeesIndexEnfermedadComun') }}">Enfermedad comun</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employeesIndexPatologiaEspecial') }}">Patologia Especiales</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="{{ route('employeesIndexEnfermedadlaboralArl') }}">Enfermedad laboral ARL</a>
                    <a class="social-link rounded py-2 px-4 my-2 social-twitter"
                    href="#">Gestantes / Lactantes</a>
                    
                    
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
