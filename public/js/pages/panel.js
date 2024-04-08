$(document).ready(function () {
  $.get(
    "../controllers/panel.php",
    { op: "tas" },
    function (data, textStatus, jqXHR) {
      $("#tas").text(data.respuesta.tas);
    },
    "JSON"
  );
});
