<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view bg-home">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/banner_1.png" draggable="false" class="img-slider"
                    height="651" />
            </div>
            <div class="center-info-home">
                <div class="u-grid-content wp-banner wow fadeIn" data-wow-delay="0.2s">
                    <div class="title-banner">
                        <h1>almacenamiento,</h1>
                        <h1> transporte y distribución</h1>
                        <h1> a nivel nacional</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/banner_2.png" draggable="false" class="img-slider"
                    height="651" />

            </div>
            <div class="center-info-home">
                <div class="u-grid-content wp-banner wow fadeIn" data-wow-delay="0.2s">
                    <div class="title-banner">
                        <h1>almacenamiento,</h1>
                        <h1> transporte y distribución</h1>
                        <h1> a nivel nacional</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/banner_3.png" draggable="false" class="img-slider"
                    height="651" />

            </div>
            <div class="center-info-home">
                <div class="u-grid-content wp-banner wow fadeIn" data-wow-delay="0.2s">
                    <div class="title-banner">
                        <h1>almacenamiento,</h1>
                        <h1> transporte y distribución</h1>
                        <h1> a nivel nacional</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!--/.Carousel Wrapper-->


<section>
    <div class="u-grid-content">
        <div class="title-s wow fadeInDown" data-wow-delay="0.2s">
            <img loading="lazy" src="<?php echo RUTA_IMG?>home/triangulo.png" alt="" draggable="false">
            <h2>servicios</h2>
        </div>
        <div class="grid-service">
            <div class="item-service wow fadeIn" data-wow-delay="0.3s">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/almacenamiento.png" alt="" draggable="false">
                <!-- <div class="transparent-back">
                    <div class="back-content">
                        <span>almacenamiento</span>
                    </div>
                </div> -->
            </div>
            <div class="item-service wow fadeIn" data-wow-delay="0.4s">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/intermediacion.png" alt="" draggable="false">
                <!-- <div class="transparent-back">
                    <div class="back-content2">
                        <span>intermediación</span>
                    </div>
                </div> -->
            </div>
            <div class="item-service wow fadeIn" data-wow-delay=s">
                <img loading="lazy" src="<?php echo RUTA_IMG?>home/tercerizacion.png" alt="" draggable="false">
                <!-- <div class="transparent-back">
                    <div class="back-content3">
                        <span>tercerización de personal</span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>