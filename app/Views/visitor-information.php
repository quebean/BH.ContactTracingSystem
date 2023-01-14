<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/f38a62f9ed.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="dashboard-style.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <div class="main-container d-flex">
      <div class="sidebar" id="side_nav">
        <div
          class="header-box px-3 d-flex align-items-center justify-content-center"
        >
          <div class="logo-x"></div>
          <div class="logo-y"></div>
          <h1 class="header-text fs-3">
            <span class="logo ms-2">BH</span
            ><span class="text fs-5 px-2 text-uppercase"
              >Bautista&nbsp;Hospital</span
            >
          </h1>
        </div>
        <ul class="list-unstyled px-2 pt-4">
          <li class="my-3">
            <a href="<?php echo "dashboard.php"?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-house me-3"></i>Dashboard</a
            >
          </li>
          <li class="active mb-3">
            <a href="#" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-users me-3"></i>Visitor Information</a
            >
          </li>
          <li class="mb-3">
            <a href="<?php echo "employee-information.php";?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-id-card me-3"></i>Employee Information</a
            >
          </li>
          <li class="mb-3">
            <a href="<?php echo "patient-information.php";?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-hospital-user me-3"></i>Patient
              Information</a
            >
          </li>
          <li class="mb-3">
            <a href="<?php echo "compose-message.php";?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-pen-to-square me-3"></i>Compose Message</a
            >
          </li>
          <li class="mb-3">
            <a href="<?php echo "generate-qrcode.php";?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-qrcode me-3"></i>Generate QR Code</a
            >
          </li>
          <li class="mb-3">
            <a href="<?php echo "activity-tracker.php";?>" class="text-decoration-none d-block px-3 py-2"
              ><i class="fa-solid fa-chart-line me-3"></i>Personnel Activity
              Tracker</a
            >
          </li>
        </ul>
      </div>
      <div class="content">
      </div>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>