<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>


<section class="nosotros">
    <div class="u-grid-content wow fadeIn" data-wow-delay="0.2s">
        <div class="title-nosotros">
            <h2> NOSOTROS </h2>
        </div>
        <div class="grid-n">
            <div class="nosotros-content">
                <p>La empresa Servicios Generales GALAGA SAC, fue constituida el 17 de marzo del 2010, por el Sr. Juan
                    Charles Alvarado Pfuyo, ante la necesidad de servicios con seguridad y con un firme compromiso de
                    brindamos servicios de Almacenamiento, intermediación o Tercerización de Personal.</p>
                <p>
                    Contamos con personal calificado para realizar tareas de Picking, Packing List, Cross Docking,
                    Maquila, inventarios, y cualquier otra tarea que apoye a las operaciones logísticas de almacén y
                    transporte de carga fluvial, multimodal, aéreo, terrestre por el territorio nacional cumpliendo
                    estándares de calidad, seguridad, salud y medio ambiente.
                </p>
            </div>
            <div class="img-n">
                <img loading="lazy" src="<?php echo RUTA_IMG?>nosotros/img-nos.png" alt="" draggable="false"
                    class="img-fluid">
            </div>
        </div>
        <div class="grid-n">
            <div class="content-mv">
                <h2>MISIÓN</h2>
                <p>
                    Brindar servicios de calidad en el transporte de carga de manera segura e incidentes, protegiendo la
                    vida, la seguridad y el medio ambiente.
                </p>
            </div>
            <div class="content-mv">
                <h2>VISIÓN</h2>
                <p>
                    Ser una empresa atractiva, rentable y líder en el servicio preferencial de transporte.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="home">
    <?php  include_once 'plantillas/valores/index.php';?>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>