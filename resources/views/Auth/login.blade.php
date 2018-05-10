@extends('..app')


@section('content')
    
    
<div class="row mt-10">
      <div class="col-md-6">
        <div class="col">
            <h1>Madisa Tecnología Ibérica</h1>
        </div>

        <div class="col text-center">
          <img src="/img/madisa.jpg" class="img img-responsive" alt="foto">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card col-md-8">
          <div class="card-header bgcolor-madisa">
            Formulario de Acceso
          </div>
          <div class="card-body">
            <form method="POST" action="/login">
            @csrf
              <div class="col">
                <label for="username">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                  </div>
                  <input  name="username" type="text" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>

              <div class="col">
                <label for="username">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                  </div>
                  <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="inputGroupPrepend" required>

                </div>
              </div>
              <br>
              <div class="col-md-6">
                  <input type="submit"  value="Acceder" class="btn bgcolor-madisa">
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
</div>

@endsection