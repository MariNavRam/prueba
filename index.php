<!DOCTYPE html>
<html lang="es">
<head>
    <title>Store Librery</title>
    <?php include './inc/link.php'; ?>
</head>

<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    
    <section id="slider-store" class="carousel slide" data-ride="carousel" style="padding: 0;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider-store" data-slide-to="0" class="active"></li>
            <li data-target="#slider-store" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./assets/img/b.jpg" alt="slider1">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="./assets/img/a.jpg" alt="slider2">

            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider-store" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#slider-store" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </section>
    
    
    <section id="new-prod-index"> 
    <div class="page-header">
    <br>
    <h2 align=center >Nosotros somos....</h2>
    <br>
    <p align=center>Una libreria catalgoda como una de las mejores, por sus servicios y atencion,
        <br>nosotros siempre queremos que nuestros clientes se lleven una grata experiencia tanto en 
        <br> fisico como en linea. Siempre teniendo los más recientes libros.
        <br>
        <br>
    </p>
</div>   
         <div class="container">
          <div class="col-xs-12 col-md-4 col-md-offset-4">
                     <form action="./searchIndex.php" method="GET">
                             <div class="form-group">
                                  <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                         <input type="text" id="addon1" class="form-control" name="term" required="" title="Escriba nombre o autor del producto">
                                         <span class="input-group-btn">
                                         <button class="btn btn-info btn-raised" type="submit">Buscar</button>
                                      </span>
                                 </div>
                             </div>
                        </form>
                   </div>


            <div class="page-header">
            <br>
                <h2>Libros Más Vendidos</h1>

            </div>
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/maquina.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img-products/00002.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img-products/00011.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assents/img-products/00021.jpg" alt="..." />
                        </div>
                    </div>
                    <




            <div class="row">
              	<?php
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("SELECT * FROM producto WHERE Stock > 0 AND Estado='Activo' ORDER BY id DESC LIMIT 12");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
       
                     }   
                  }else{
                      echo '<h2>No se han registrado lirbos</h2>';
                  }  
              	?>  
            </div>
         </div>
    </section>
   

    <?php include './inc/footer.php'; ?>
</body>
</html>