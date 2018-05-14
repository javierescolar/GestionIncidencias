
@foreach($incidencia->respuestas as $respuesta)

<div id="accordion{{$respuesta->cod_respuesta}}">

  <div class="card">
    <div class="card-header text-success" id="heading{{$respuesta->cod_respuesta}}">
      <h5 class="mb-0">
        <button class="btn btn-link color-madisa" 
                data-toggle="collapse" 
                data-target="#collapse{{$respuesta->cod_respuesta}}" 
                aria-expanded="true" 
                aria-controls="collapse{{$respuesta->cod_respuesta}}">
        <div class="row">
            <div class="col">
            #{{$respuesta->cod_respuesta}}# -
            <i class="far fa-calendar-alt"></i> {{$respuesta->fecha}} 
            <i class="far fa-clock"></i> {{$respuesta->hora}}: 
            <i class="fas fa-user-tag"></i> {{$respuesta->cod_tecnico}} {{$respuesta->nom_tecnico}} 
            </div>
        </div>
        </button>
      </h5>
    </div>
    <div id="collapse{{$respuesta->cod_respuesta}}" class="collapse" aria-labelledby="heading{{$respuesta->cod_respuesta}}" data-parent="#accordion{{$respuesta->cod_respuesta}}">
      <div class="card-body">
       <p>{{$respuesta->descripcion}}</p>
      </div>
    </div>
  </div>

</div>
@endforeach

