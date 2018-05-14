@extends('..app')
@extends('..nav')



@section('content')
    

         
<div id="accordion">
@foreach ($incidencias as $incidencia)
  
  @if($incidencia->finalizada=='S')
  <div class="card bg-success-personal">
  @else
  <div class="card bg-danger-personal">
  @endif
    <div class="card-header text-success" id="heading{{$incidencia->cod_incidencia}}">
      <h5 class="mb-0">
        <button class="btn btn-link color-madisa" data-toggle="collapse" data-target="#collapse{{$incidencia->cod_incidencia}}" aria-expanded="true" aria-controls="collapse{{$incidencia->cod_incidencia}}">
        <div class="row">
            <div class="col">
            #{{$incidencia->cod_incidencia}}# -
            <i class="far fa-calendar-alt"></i> {{$incidencia->fecha}} 
            <i class="far fa-clock"></i> {{$incidencia->hora}}: 
            <i class="fas fa-user-tag"></i> {{$incidencia->quien}} 
            </div>
            <div class="col">
                Estado:
                @if($incidencia->finalizada=='S')
                    Terminada  <i class="fas fa-check"></i>
                @else
                    En proceso <i class="fas fa-hourglass-half"></i>
                @endif
            </div>

        </div>
        </button>
      </h5>
    </div>
    <div id="collapse{{$incidencia->cod_incidencia}}" class="collapse" aria-labelledby="heading{{$incidencia->cod_incidencia}}" data-parent="#accordion">
      <div class="card-body">
       <p><b>Cliente:</b>{{$incidencia->cod_cliente}} - {{$incidencia->nom_cliente}}</p>
       <p><b>Centro:</b>{{$incidencia->cod_centro}} - {{$incidencia->nom_centro}}</p>
       <p><b>Local:</b>{{$incidencia->cod_local}} - {{$incidencia->nom_local}}</p>
       <p>{{$incidencia->descripcion}}</p>
       
        @include('Incidencias.respuestas')

      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection