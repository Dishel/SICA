$(document).ready(function () {
  loadBreadcrumbs(window.location.pathname);
});

function loadBreadcrumbs(rutaActual) {
  // Convertir la ruta en un array de segmentos
  const segmentosRuta = rutaActual.split("/");

  // Obtener el nombre del archivo actual sin la extensión
  const nombrePagina = capitalizar(
    segmentosRuta.pop().replace(/\.[^/.]+$/, "")
  );

  // Crear titulo de página
  const pagetitle = $("<h1>").text(nombrePagina);
  $(".pagetitle").append(pagetitle);

  // Crear contenedor para el breadcrumb
  const nav = $("<nav>");

  // Crear un elemento "ol" para el breadcrumb
  const breadcrumb = $("<ol>").addClass("breadcrumb");
  nav.append(breadcrumb);

  // Crear un elemento "li" para el inicio
  const breadcrumbItemInicio = $("<li>")
    .addClass("breadcrumb-item")
    .html("<a href='javascript:void(0)'>Inicio</a>");
  breadcrumb.append(breadcrumbItemInicio);

  // Crear un elemento "li" activo para el archivo actual
  const breadcrumbItemActual = $("<li>")
    .addClass("breadcrumb-item active")
    .text(nombrePagina);
  breadcrumb.append(breadcrumbItemActual);

  // Insertar el breadcrumb en el elemento contenedor
  $("#main .pagetitle").append(breadcrumb);

  console.log("Breadcrumbs loaded");
}

function capitalizar(palabra) {
  return palabra.replace(/^\w/, (c) => c.toUpperCase());
}
