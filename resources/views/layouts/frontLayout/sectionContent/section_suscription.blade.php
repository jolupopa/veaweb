<section id="suscripcion" class="container text-center my-5 sombra py-5">
    <h2 class="title">Registrate para recibir nuestro
        <span>Magazine Digital
        </span>
    </h2>
    <p>Recibe los ultimos proyectos en desarrollo y todas las nuevas ofertas del mercado inmobiliario oportunamente en tu inbox.</p>
    <form method="POST" action="">
        {{ csrf_field()}}
        <div class="form-group row">
            <div class="col-12 col-md-5 input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="morado fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese su nombre" value="{{ old('name')}}" name="name">
                {!! $errors->first('name', '<span class=error>:message</span>') !!}
            </div>

            <div class="col-12 col-md-5 input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="morado fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" placeholder="Ingrese su correo" value="{{ old('email')}}" name="email">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </div>
            <div class="col-12 col-md-2">
                <button class="btn btn-primary btn-block" type="submit">Enviar</button>
            </div>
        </div>

    </form>
</section>