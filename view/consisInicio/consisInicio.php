<main>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">

               <div id="carinicio" class="carousel slide mt-5" data-interval="2000" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./assets/images/carouselConsis/1.2.png" alt="img1" width="1100" height="500">
                  </div>

                  <div class="carousel-item">
                    <img src="./assets/images/carouselConsis/2.png" alt="img2" width="1100" height="500">
                </div>

                <div class="carousel-item">
                    <img src="./assets/images/carouselConsis/3.png" alt="img3" width="1100" height="500">
                </div>

                <!-- controles -->
                <a class="carousel-control-prev" href="#carinicio" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carinicio" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>

              
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <br>
          <large class="text-muted"><b>¿QUÉ HACEMOS?</b></large>
          <br>
          <hr color="#01B1EF" width="350" align="left" style="height:2px;border-width:2;">
          <p style="font-size: 30px;"><b>NUESTROS PRINCIPALES SERVICIOS</b></p>
        </div>        
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card-deck">
            <div class="card  border border-info">
              <img src="./assets/images/inicioMin/1.PNG" class="card-img-top" alt="1">
              <div class="card-body">
                <p style="font-size: large;" align="center"><b>Asesoría contable</b></p>
                <p class="card-text">El objetivo principal de la Asesoría Contable es brindarles a nuestros clientes</p>
                <a href="?c=consisAsesoriaCont&a=index" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
            <div class="card  border border-info">
              <img src="./assets/images/inicioMin/2.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p style="font-size: large;" align="center"><b>Asesoría Laboral</b></p>
                <p class="card-text">El objetivo principal de nuestro servicio de asesoría laboral es pretender ser el departamento de</p>
                <a href="?c=consisAsesoriaLab&a=index" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
            <div class="card border border-info">
              <img src="./assets/images/inicioMin/3.1.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p style="font-size: large;" align="center"><b>Cableado Estructurado</b></p>
                <p class="card-text">El cableado estructurado consiste en el tendido de cables en </p>
                <a href="?c=consisCableadoEstruc&a=index" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
            <div class="card border border-info">
              <img src="./assets/images/inicioMin/4.1.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p style="font-size: larger;" align="center"><b>Instalación de fibra óptica</b></p>
                <p class="card-text">Las redes basadas en cableado de fibra óptica están muy extendidas</p>
                <a href="?c=consisFibraOptica&a=index" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
            <div class="card border border-info">
              <img src="./assets/images/inicioMin/5.1.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p style="font-size: large;" align="center"><b>Asesoría Tributaria</b></p>
                <p class="card-text"> Asesoría Tributaria consiste en analizar, establecer y diseñar.</p>
                <a href="?c=consisAsesoriaTri&a=index" class="btn btn-primary btn-block">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal de Bienvenida - Pop up	 -->
<!--     <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true" id="mymodalini1">
        <div class="modal-dialog modal-md">
            <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
            <div class="modal-content bg-warning">                
                <img class="card-img-top mvima" src="./assets/images/bienvenida1.gif" alt="...">
            </div>
        </div>
    </div> -->

    <!-- BOTON TOP -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" style="font-size: 1.2em"></i></button>
</main>


<script>
    $(document).ready(function () {
        $('#mymodalini1').modal('show')
    });
</script>

<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
}
</style>