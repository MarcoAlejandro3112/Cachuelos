<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta name="description" lang="es" content="Tu plataforma para ganar dinero rapido y facil , con trabajos sin experiencia y sin la necesidad de una profesión">
  <meta name="keywords" content="ganar dinero facil , ganar dinero rapido , trabajos sin experiencia , trabajos para estudiantes">
  <meta name="author" content="iDev">
  <meta name="robots" content=""><!--FALTA APRENDER ESTE METADATO-->
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
  
    <title>CACHUELOS | Trabajos rapidos , faciles y sin experiencia</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
  <div id="app-container">
    <?php include("headerSolid.php"); ?>

<div class="container app-box">
<div class=" row">
    <section id="app-filter" class="col-3">
      <div class="card filterBox">
  <div class="card-header">
    <h2>Filtrar</h2>
  </div>
  <div class="card-body">
    <div class="row"> 
    <div class="boxTipo col-12"> 
<h4>Alcance:</h4>
     <ul class="ulTipo"> 
        <li><div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Presencial</label>
    
  </div></li>
        <li><div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Online</label>
    
  </div></li>
     </ul>
    </div>
    <div class="boxTipo col-12"> 
<h4>Tipo de Pago:</h4>
     <ul class="ulTipo"> 
        <li><div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck4">
    <label class="form-check-label" for="exampleCheck4">Trabajo de precio fijo</label>
    
  </div></li>
  <li><div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck5">
    <label class="form-check-label" for="exampleCheck5">Trabajo de pago por hora</label>
    
  </div></li>
     </ul>
    </div>
  </div>
  </div>
</div>
    </section>
    <section id="app-body" class="col-9">
        <form>  
      <div class="searchBox row">
        <div class="col-11 searchMiniBox">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-1 searchMiniBox">
           <input type="submit" value="BUSCAR" class="btn btnSearch col-12">
        </div>
          
        </div>
        </form>
        <div class="container  withoutPd">
          <div class="row withoutPd">
            <div class="col-6 withoutPd hide">
              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ordenar
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Mas Recientes</button>
    <button class="dropdown-item" type="button">Presupuesto Mayor Primero</button>
    <button class="dropdown-item" type="button">Presupuesto Menor Primero</button>
    <button class="dropdown-item" type="button">Mas Postulantes</button>
    <button class="dropdown-item" type="button">Menos Postulantes</button>
  </div>
</div>
            </div>
            
            <div class="col-6 withoutPd hide">
              <nav class="navPag" aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item "><a class="page-link active " href="#">1</a></li>
    <li class="page-item"><a class="page-link " href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>

        <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
            </div>
          </div>
          <div class="row"> 
              <div class="hide col-12 withoutPd" id="numBoxPost"> 
                
               <span><b>   06 </b></span><span> cachuelos encontrados ,  
               precios en US</span>
  
              </div>
          </div>
        </div>
            <div class="posts container">
                
                
              </div>
              
              
            
    </section>
    <div class="container withoutPd">
     <section id="app-foot" class="row withoutPd">
      <div class="col-3 withoutPd"></div>
       <div class="footBody col-9 withoutPd">
                <div class="row withoutPd">
                    
                    <div class="col-6 withoutPd"  id="colFoot"> <div class="dropdown DropnumPost"><span>Resultados por página</span>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    50
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">25</button>
    <button class="dropdown-item" type="button">50</button>
    <button class="dropdown-item" type="button">75</button>
    <button class="dropdown-item" type="button">100</button>
  </div>
</div></div>
            <div class="col-6 withoutPd " id="colFoot">
              <nav class="navPag" aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item "><a class="page-link active " href="#">1</a></li>
    <li class="page-item"><a class="page-link " href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>

        <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
            </div>
            </div>
              </div>
     </section>
     </div>
  </div>
  </div>
    <footer>
  <p>Todos los derechos reservados &copy; | iDev</p>
</footer>
      <!-- BOOTSTRAP JQUERY-->
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_cachuelos&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
</html>