$(document).ready(function () {
  $(".menuresponsive li:has(ul)").click(function (e) {
    e.preventDefault();
    if ($(this).hasClass("activado")) {
      $(this).removeClass("activado");
      $(this).children("ul").slideUp();
    } else {
      $(".menuresponsive li ul").slideUp();
      $(".menuresponsive li").removeClass("activado");
      $(this).addClass("activado");
      $(this).children("ul").slideDown();
    }
  });
  $(".menuresponsive li ul li a").click(function () {
    window.location.href = $(this).attr("href");
  });
});
