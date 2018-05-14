
<div class="container-fluit">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="/img/MADISA.png" alt="" style="width:3em">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-wrench"></i> Incidencias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/incidencias/nueva"><i class="fas fa-plus-circle"></i> Crear Incidencia</a>
            <a class="dropdown-item" href="/incidencias/propias"><i class="far fa-eye"></i> Revisar Mis Incidenicas</a>
            <a class="dropdown-item" href="/incidencias/todas"><i class="fas fa-building"></i> Revisar Incidencias Cliente</a>
            </div>
        </li>
        
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Mis Mensajes</a>
        </li>
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i> {{$user->nombre}} {{$user->apellidos}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/perfil"><i class="fas fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                </div>
            </li>
            </ul>
        </div>
    </div>
    </nav>
    <div id="zona-visitada">
        <p> {{$zona}}</p>
    </div>
</div>