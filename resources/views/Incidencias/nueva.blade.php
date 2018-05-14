@extends('..app')
@extends('..nav')


@section('content')
    
<div class="card mt-5 bg-card-personal">
    <div class="card-header bgcolor-madisa">
    <h5>Nueva Incidencia</h5>
    </div>
    <div class="card-body">
        <form action="/incidencias/nueva" method="POST">
        @csrf
            <div class="form-group">
                <label for="cod_centro">Centro:</label>
                <select name="cod_centro" id="select_centro" class="form-control">
                    <option value=""></option>
                    @foreach ($centros as $centro)
                        <option value="{{ $centro->cod_centro }}">{{ $centro->cod_centro }} - {{ $centro->nom_centro }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cod_local">Local:</label>
                <select name="cod_local" id="selec_local" class="form-control">
                <option value=""></option>
                  
                </select>
            </div>
            

            <div class="form-group">
            <hr>
                <textarea name="incidencia" id="incidencia" rows="5" class="form-control" style="border:solid 0.05em blue"></textarea>
            </div>

            <div class="form-group">
                
                <input type="submit" value="Crear" class="btn bgcolor-madisa col-md-2">
            </div>
        </form>
    </div>
</div>




<script>
    var centros = <?php echo json_encode($centros) ?>;
    console.log(centros);
    document.getElementById('select_centro').addEventListener("change", function(){
        var centroSeleccionado= $(this).val();
        for(key in centros){
            if(centroSeleccionado == centros[key].cod_centro){
                vaciarSelect('selec_local');
                for(k in centros[key].locales){
                    var local = centros[key].locales[k];
                    var option = createOption(local.cod_local,local.nom_local);
                    console.log(option);
                    document.getElementById('selec_local').appendChild(option);
  
                }   
            }
            
        }
    });

    function createOption(key,value){
        var option;
        option=document.createElement("option");
        option.value=key;
        option.innerHTML=key+" - "+value;
        return option;
    }

    function vaciarSelect(id){
        var selectbox = document.getElementById(id);
        console.log(selectbox);

        var i;
        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
        {
            selectbox.remove(i);
        
        }
        
    }
</script>
@endsection