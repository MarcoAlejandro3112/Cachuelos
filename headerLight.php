<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav">
  <a class="navbar-brand" href="index.php">CACHUELOS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="cachuelos.php">Buscar un Cachuelo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contratar.php">Contratar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contacto.php">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto acceso">
        <li class="nav-item">
        <a class="nav-link" href="#openModal"><span>Acceso Trabajadores</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#openModal2"><span>Acceso Contratistas</span></a>
      </li>
      </ul>
      <button class="btn  my-2 my-sm-0 naranja" type="submit"><a href="register.html">Registrarse</a></button>
      
    </form>
  </div>
</nav>
<div id="openModal" class="modalDialog">
  <div class="row">
    <a href="#close" title="Close" class="close">X</a>
    <div class="col-6 loginTraba">
    <form action="login.php">
      <h2>Acceso Trabajadores</h2>
      <div class="form-group">
        <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="ejemplo1234@gmail.com">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
      <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
      </div>
      <a href="#">¿Olvidaste tu contraseña?</a>
      <button type="submit" class="btn btnLogin work naranja"><a href="#">ENVIAR</a></button>
    </form>
    </div>
    <div class="col-6 loginReg">
      <h2>Regístrate gratis</h2>
      <p>Regístrate con nosotros para poder acceder a las ofertas de empleo que más te interesen. Una vez creada tu cuenta podrás solicitar los empleos y editar tu perfil.</p>
      <button type="submit" class="btn work naranja"><a href="#">Registrar</a></button>
    </div>
  </div>
</div>
<div id="openModal2" class="modalDialog">
  <div class="row">
    <a href="#close" title="Close" class="close">X</a>
    <div class="col-6 loginTraba">
    <form action="login.php">
      <h2>Acceso Contratistas</h2>
      <div class="form-group">
        <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="ejemplo1234@gmail.com">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
      <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
      </div>
      <a href="#">¿Olvidaste tu contraseña?</a>
      <button type="submit" class="btn btnLogin work naranja"><a href="#">ENVIAR</a></button>
    </form>
    </div>
    <div class="col-6 loginReg">
      <h2>Regístrate gratis</h2>
      <p>Regístrate con nosotros para poder acceder a las ofertas de empleo que más te interesen. Una vez creada tu cuenta podrás solicitar los empleos y editar tu perfil.</p>
      <button type="submit" class="btn work naranja"><a href="#">REGISTRAR</a></button>
    </div>
  </div>
</div>