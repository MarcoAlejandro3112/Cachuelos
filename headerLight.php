<div class="containerNav">
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
      <li class="nav-item"> 
        <a class="nav-link hide2" href="register.html">Registrarse</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" id="formAcceso">
      <ul class="navbar-nav mr-auto acceso">
        <li class="nav-item" id="liAcceso">
        <a class="nav-link" href="#openModal"><span id="acceso">Acceso Trabajadores</span></a>
      </li>
      <li class="nav-item" id="liAcceso">
        <a class="nav-link" href="#openModal2"><span id="acceso">Acceso Contratistas</span></a>
      </li>
      </ul>
      <button class="btn my-2 my-sm-0 naranja hide" type="submit"><a href="register.html">Registrarse</a></button>
      
    </form>
  </div>
</nav>
<div id="openModal" class="modalDialog">
  <div class="row">
    <a href="#close" title="Close" class="close">X</a>
    <div class="col-6 loginTraba">
    <form method="post" action="login.php">
      <h2>Acceso Trabajadores</h2>
      <div class="form-group">
        <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="ejemplo1234@gmail.com">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña:</label>
      <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
      </div>
      <a href="#">¿Olvidaste tu contraseña?</a>
      <button type="submit" class="btn btnLogin work naranja">ENVIAR</button>
    </form>
    </div>
  </div>
</div>
<div id="openModal2" class="modalDialog">
  <div class="row">
    <a href="#close" title="Close" class="close">X</a>
    <div class="col-6 loginTraba">
    <form method="post" action="login.php">
      <h2>Acceso Contratistas</h2>
      <div class="form-group">
        <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="ejemplo1234@gmail.com">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña:</label>
      <input type="password" class="form-control" name="pass" placeholder="Ingresa tu contraseña">
      </div>
      <a href="#">¿Olvidaste tu contraseña?</a>
      <button type="submit" class="btn btnLogin work naranja">ENVIAR</button>
    </form>
    </div>

  </div>
</div>
</div>