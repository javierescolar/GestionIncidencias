@extends('..app')

@extends('..nav')


@section('content')

<div class="mt-5">
    <div class="card">
        <div class="card-header bgcolor-madisa">
        Perfil Usuario
        </div>
        <div class="card-body">

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="id">Id:</label>
                    <input type="text" name="id" value="{{$user->id}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value="{{$user->nombre}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" value="{{$user->apellidos}}" class="form-control" disabled>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-2">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" value="{{$user->telefono}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="cargo">Cargo:</label>
                    <input type="text" name="cargo" value="{{$user->cargo}}" class="form-control" disabled>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-2">
                    <label for="cod_cliente">Cdo. Cliente:</label>
                    <input type="text" name="cod_cliente" value="{{$user->cod_cliente}}" class="form-control" disabled>
                </div>
                <div class="form-group col-md-10">
                    <label for="nom_cliente">Nombre Cliente:</label>
                    <input type="text" name="nom_cliente" value="{{$user->nom_cliente}}" class="form-control" disabled>
                </div>
                
            </div>

        </div>
    </div>
</div>
    
    
    



@endsection