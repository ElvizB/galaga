<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="contacto">
    <div class="bg-contacto">
        <h2 class="wow fadeIn" data-wow-delay="0.2s"">contacto</h2>
    </div>
</section>

<section class="">
    <!--Google map-->
    <div id=" map-container-section" class="map-container-section" style="height: 500px">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15612.603379015956!2d-77.001378!3d-11.9640562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17f90d8410933e9!2sGALAGA%20SAC!5e0!3m2!1sen!2spe!4v1611390052178!5m2!1sen!2spe"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" tabindex="0"></iframe>
    </div>
</section>

<section class="contacto">
    <div class="bg-contacto-b">
        <div class="grid-info-contact">
            <div class="info-contact wow fadeIn" data-wow-delay="0.4s">
                <div>
                    <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/tel.png" draggable="false" />
                    <span>(+1) 387-8585</span>
                </div>
                <div>
                    <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/cel.png" draggable="false" />
                    <span>RPC: 997882332</span>
                </div>

            </div>
            <div class="info-contact wow fadeIn" data-wow-delay="0.5s">
                <div>
                    <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/email.png" draggable="false" />
                    <span>vmunoz@galagasac.com</span>
                </div>
                <div>
                    <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/map.png" draggable="false" />
                    <span>Av. Canto Grande Mz J Lt 30 </span><br>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urb. Los
                        Álamos S.J.L. -
                        Lima</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>