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
    </ul>
    <div class="form-inline my-2 my-lg-0" id="formAcceso">
      <ul class="navbar-nav mr-auto">
        
      <li class="nav-item">
        <a class="nav-link " href="misProyectos.php">Mis Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="tablero.php">Tablero</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#notificaciones"><i class="fas fa-bell"></i></a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="#perfil" id="aImg"><i class="fas fa-user"></i></a>
      </li>
      </ul>     
    </div>
  </div>
</nav>
</div>
<div id="perfil">
  <div class="topPerfil">
    <div class="topUser"> 
       <a href="#close" title="Close" class="closePerfil">X</a>
    </div>
    <div class="midUser"> 
       <img src="img/user.png">
    </div>
    <div class="botUser"> 
       <h5><?php echo $_SESSION['user']?></h5>
       <p>Miembro desde 25/11/18</p>
    </div>
  </div>
  <div class="bottomPerfil">
    <ul>  
      <li><i class="fas fa-user-circle"></i><a href="#">Perfil</a></li>
      <li><i class="fas fa-cog"></i><a href="#">Configuración</a></li>
      <li><i class="far fa-question-circle"></i><a href="contacto.php">¿Ayuda?</a></li>
      <li><i class="fas fa-sign-out-alt"></i><a href="out.php">Salir</a></li>
    </ul>
  </div>
</div>