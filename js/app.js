//Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: "AIzaSyB16Q9qIXSU4nbzOhkJCbUq0WTnivhos1s",
  authDomain: "barrigafong-bd.firebaseapp.com",
  projectId: "barrigafong-bd",
});

var db = firebase.firestore();

// Primera
const formulario = document.getElementById("formulario"),
  modalenviado = document.getElementById("modalenviado"),
  respuesta = document.getElementById("respuesta");

formulario.addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();
  $(".bg-alerta").remove();
  $(".bg-advertencia").remove();
  const nombre = getInputVal("nombre"),
    telefono = getInputVal("telefono"),
    email = getInputVal("email"),
    clinica = getInputVal("clinica"),
    hora = getInputVal("hora"),
    mensaje = getInputVal("mensaje"),
    recaptchaValidate = getInputVal("g-recaptcha-error");

  if (nombre == "" || nombre == null) {
    formulario.nombre.focus();
    cambiarColor("nombre");
    mostrarAlert("¿Cuál es tu nombre?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(nombre)) {
      formulario.nombre.focus();
      cambiarColor("nombre");
      showAdvert("Nombre inválido");
      return false;
    }
  }

  if (telefono == "" || telefono == null) {
    formulario.telefono.focus();
    cambiarColor("telefono");
    mostrarAlert("¿Cuál es tu teléfono?");
    return false;
  } else {
    const expresion = /^[0-9]{9}$/;
    if (!expresion.test(telefono)) {
      formulario.telefono.focus();
      cambiarColor("telefono");
      showAdvert("Número de teléfono inválido");
      return false;
    }
  }

  if (email == "" || email == null) {
    formulario.email.focus();
    cambiarColor("email");
    mostrarAlert("¿Cuál es tu email?");
    return false;
  } else {
    const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expresion.test(email)) {
      formulario.email.focus();
      cambiarColor("email");
      showAdvert("Email inválido");
      return false;
    }
  }

  if (clinica == "" || clinica == null) {
    formulario.clinica.focus();
    //cambiarColor("email");
    mostrarAlert("Elige una Clínica");
    return false;
  }

  if (hora == "" || hora == null) {
    formulario.hora.focus();
    //cambiarColor("email");
    mostrarAlert("Elige una hora");
    return false;
  }

  if (mensaje == "" || mensaje == null) {
    formulario.mensaje.focus();
    //cambiarColor("mensaje");
    mostrarAlert("Escriba su mensaje por favor");
    return false;
  } else {
    const expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(mensaje)) {
      formulario.mensaje.focus();
      cambiarColor("mensaje");
      showAdvert("Mensaje inválido");
      return false;
    }
  }

  const response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<div class="bg-alerta z-depth-2 animated bounceIn fast">Marque la opción</div>';
    return false;
  } else {
    document.getElementById("g-recaptcha-error").innerHTML = "";
  }

  var datos = new FormData(formulario);
  fetch("app/form.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });

  showEnviado("Los datos del registro han sido enviados exitosamente");
  guardar();

  document.getElementById("formulario").reset();
  grecaptcha.reset();
  return true;
}

// Agregar documentos
function guardar() {
  var nombre = document.getElementById("nombre").value;
  var telefono = document.getElementById("telefono").value;
  var email = document.getElementById("email").value;
  var clinica = document.getElementById("clinica").value;
  var hora = document.getElementById("hora").value;
  var mensaje = document.getElementById("mensaje").value;

  db.collection("contactos").add({
    nombre: nombre,
    telefono: telefono,
    email: email,
    clinica: clinica,
    hora: hora,
    mensaje: mensaje,
    fecha: firebase.firestore.Timestamp.fromDate(new Date()),
  });
  //db.collection("contactos").orderBy("fecha", "desc");
}

$("input").focus(function () {
  $(".bg-alerta").remove();
  colorDefault("nombre");
  colorDefault("telefono");
  colorDefault("email");
});

function getInputVal(id) {
  return document.getElementById(id).value;
}

function colorDefault(dato) {
  return document
    .getElementById(dato)
    .setAttribute("style", "border-bottom: 1px solid #ced4da");
}

function cambiarColor(dato) {
  return document
    .getElementById(dato)
    .setAttribute(
      "style",
      "border-bottom: 1px solid #ced4da !important;box-shadow: 0 1px 0 0 #ced4da !important;"
    );
}

function mostrarAlert(texto) {
  respuesta.innerHTML =
    '<div class="bg-alerta z-depth-2 animated bounceIn fast"> ' +
    texto +
    "</div>";
}

function showAdvert(texto) {
  respuesta.innerHTML =
    '<div class="bg-advertencia z-depth-2 bounceIn fast">' + texto + "</div>";
}

function showEnviado(texto) {
  var mensajemodal = `<div class="modal-wrap" id="modalenviado">
                              <div class="mensaje-modal-content z-depth-3 animated bounceIn fast">
                                  <div class="mensaje-modal-header ">
                                      <p class="heading lead text-center">Mensaje Enviado</p>
                                      <button type="button" class="close" id="btnremove">
                                        <span aria-hidden="true" class="white-text">×</span>
                                      </button>
                                  </div>
                                  <div class="mensaje-modal-body">
                                      <div class="text-center">
                                          <i class="fas fa-check fa-3x green-text mb-3 animated rotateIn"></i>
                                          <p>${texto}</p>
                                      </div>
                                  </div>
                                  <div class="modal-footer justify-content-center">
                                     
                                  </div>
                              </div>
                            </div>
                            `;
  $("body").append(mensajemodal);
  //cerrando modal
  $("#btnremove").click(function () {
    $(".modal-wrap").remove();
  });
}

/*function desaparecerenviado() {
  respuesta
    .querySelector(".bg-enviando")
    .setAttribute("style", "display: none");
}*/
