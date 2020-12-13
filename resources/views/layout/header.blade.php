@include('layout.head')

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #617386;">
    <a class="navbar-brand" href="#">
        <i class="fas fa-home"></i>
        Bootstrap
      </a>
    {{-- <a class="navbar-brand" href="{{ route('employees.index') }}"> Sst </a> --}}
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-bell">
                        <span class="badge badge-info">11</span>
                    </i>
                    Sign out
                </a>
            </li>
        </ul>
    </div>
</nav>
@include('layout.script')
