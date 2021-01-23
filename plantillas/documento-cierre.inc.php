<!--firebase-->
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.4.1.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo RUTA_JS?>boostrap/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo RUTA_JS?>boostrap/mdb.min.js"></script>

<!-- Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- <script type="text/javascript" src="<?php echo RUTA_JS?>owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>owl/scritps.js"></script> -->
<script type="text/javascript" src="<?php echo RUTA_JS?>loading.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>app.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>drown-down.js"></script>
<!-- <script type="text/javascript" src="<?php echo RUTA_JS?>select.js"></script> -->
<script type="text/javascript">
$('.carousel').carousel({
    interval: 2000
})

function menuToggle() {
    var nav = document.getElementById('menu-overlay');
    nav.classList.toggle('active');
    var nav = document.getElementById('toggleIcon');
    nav.classList.toggle('active');
}

new WOW().init();
</script>
</body>

</html>