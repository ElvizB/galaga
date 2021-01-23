<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="home">
    <div class="bg-home">
        <img loading="lazy" src="<?php echo RUTA_IMG?>servicios/bg-servicio.png" draggable="false" height="651" />
        <div class="center-info-home">
            <div class="u-grid-contacto">
                <div class="wrap-ns wow fadeIn" data-wow-delay="0.2s">
                    <div>

                    </div>
                    <div class="info-servicios">
                        <h2>NUESTROS SERVICIOS</h2>
                        <p>
                            La empresa cuenta con unidades nuevas propias, así mismo, ofrecemos servicio para diversas
                            cargas especializados, equipados con dispositivos de rastreo satelital, dispositivos de
                            seguridad y de emergencias conforme a las disposiciones del MTC y de nuestros clientes.
                        </p>
                        <p>
                            Además, cuentan con un programa de mantenimiento preventivo y correctivo acorde a las
                            especificaciones del proveedor y para garantizar su eficiencia y operatividad se realizan en
                            las casas matrices; de esta forma, contribuimos al cuidado del medio ambiente ya que los
                            residuos contaminantes de esta actividad son derivados a través de una EPS especializado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="u-grid-content">
        <div class="p-servicio">
            <div class="content-info-serv wow fadeIn" data-wow-delay="0.3s">
                <div class="title-serv">
                    <h2>ALMACENAMIENTO</h2>
                </div>
                <div class="grid-subservicios">
                    <div class="photo-servicio">
                        <img loading="lazy" src="<?php echo RUTA_IMG?>servicios/s-1.png" draggable="false"
                            class="img-fluid">
                    </div>
                    <div class="descriptions-servicios">
                        <p>Brindamos soluciones integrales de transporte y almacenamiento, así mismo se promueve el
                            desarrollo logístico de manera sobresaliente.</p>
                        <p>
                            Brindamos servicios de almacenamiento, consolidación y fraccionamiento de carga, centro de
                            distribución de carga; durante la operación, bajo estricto seguimiento y monitoreo.
                        </p>
                        <br>
                        <p><b>Servicios Complementarios</b></p>
                        <p><b>Habilitación:</b> Picking, Packing, Ensamblaje y Rehabilitación.</p>
                        <p><b>Distribución:</b> Vertical, Horizontal y Cross Docking.</p>
                        <p>
                            <b>Transporte de Carga.</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-info-serv wow fadeIn" data-wow-delay="0.4s">
                <div class="title-serv">
                    <h2>INTERMEDIACIÓN</h2>
                </div>
                <div class="grid-subservicios">
                    <div class="photo-servicio">
                        <img loading="lazy" src="<?php echo RUTA_IMG?>servicios/s-2.png" draggable="false"
                            class="img-fluid">
                    </div>
                    <div class="descriptions-servicios">
                        <p>Ofrecemos soluciones de gestión de distribución, complementadas con nuestras soluciones de
                            gestión de almacenes.</p>
                        <p>
                            Realizamos la autorización logística (recogida y envasado) según los requisitos e
                            instrucciones
                            del cliente.
                        </p>
                        <p>Continuamos distribuyendo en el área designada y dentro del período designado. A través de
                            nuestra red de sucursales y agentes, se puede realizar a nivel local (principales ciudades)
                            y a
                            nivel nacional. La solución espera que el servicio se desarrolle en las instalaciones del
                            cliente o donde sea dirigido.</p>

                    </div>
                </div>
            </div>

            <div class="content-info-serv wow fadeIn" data-wow-delay="0.5s">
                <div class="title-serv">
                    <h2>TERCERIZACIÓN DE PERSONAL</h2>
                </div>
                <div class="grid-subservicios">
                    <div class="photo-servicio">
                        <img loading="lazy" src="<?php echo RUTA_IMG?>servicios/s-3.png" draggable="false"
                            class="img-fluid">
                    </div>
                    <div class="descriptions-servicios">
                        <p>
                            Contamos con personal calificado para realizar tareas de Picking, Packing List, Cross
                            Docking,
                            Maquila, Inventarios, y cualquier otra tarea que apoye a las operaciones logísticas de
                            almacén y
                            transporte de carga fluvial, multimodal, aéreo, terrestre por el territorio nacional
                            cumpliendo
                            estándares de calidad, seguridad, salud y medio ambiente.
                        </p>
                        <p>
                            Responsabilidad y compromiso garantizados.
                        </p>

                    </div>
                </div>
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