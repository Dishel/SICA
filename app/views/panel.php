<?php
include_once 'head.php';
include_once 'header.php';
include_once 'sidebar.php';
?>

<section class="section dashboard">
  <div class="row">

    <!-- Customers Card -->
    <div class="col-xxl-4 col-xl-4">

      <div class="card info-card customers-card">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filtro</h6>
            </li>

            <li><a class="dropdown-item" href="#">Hoy</a></li>
            <li><a class="dropdown-item" href="#">Este Mes</a></li>
            <li><a class="dropdown-item" href="#">Este Semestre</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Asistencia <span>| Hoy</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h6 id="tas"></h6>
              <span class="text-muted small pt-2 ps-1">Alumnos</span>

            </div>
          </div>

        </div>
      </div>

    </div><!-- End Customers Card -->

    <!-- Recent Sales -->
    <div class="col-8">
      <div class="card recent-sales overflow-auto">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filtro</h6>
            </li>

            <li><a class="dropdown-item" href="#">Hoy</a></li>
            <li><a class="dropdown-item" href="#">Este Mes</a></li>
            <li><a class="dropdown-item" href="#">Este Semestre</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Alumnos</h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

        </div>

      </div>
    </div><!-- End Recent Sales -->

  </div>
</section>

<?php include_once 'footer.php' ?>
<script src="../../assets/js/pages/panel.js"></script>