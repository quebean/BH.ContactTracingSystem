<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/f38a62f9ed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="dashboard-style.css" />
  <title>Generate Qr Code</title>
</head>

<body>
  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-3 d-flex align-items-center justify-content-center">
        <div class="logo-x"></div>
        <div class="logo-y"></div>
        <h1 class="header-text fs-3">
          <span class="logo ms-2">BH</span><span class="text fs-5 px-2 text-uppercase">Bautista&nbsp;Hospital</span>
        </h1>
      </div>
      <ul class="list-unstyled px-2 pt-4">
        <li class="my-3">
          <a href="<?php echo "dashboard"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-house me-3"></i>Dashboard</a>
        </li>
        <li class="mb-3">
          <a href="<?php echo "visitor-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-users me-3"></i>Visitor Information</a>
        </li>
        <li class="mb-3">
          <a href="<?php echo "employee-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-id-card me-3"></i>Employee Information</a>
        </li>
        <li class="mb-3">
          <a href="<?php echo "patient-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-hospital-user me-3"></i>Patient
            Information</a>
        </li>
        <li class="mb-3">
          <a href="<?php echo "compose-message"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-pen-to-square me-3"></i>Compose Message</a>
        </li>
        <li class="active mb-3">
          <a href="<?php echo "manage-locations"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-location-dot me-3"></i>Manage Locations</a>
        </li>
        <li class="mb-3">
          <a href="<?php echo "activity-tracker"; ?>" class="text-decoration-none d-block px-3 py-2"><i
              class="fa-solid fa-chart-line me-3"></i>Personnel Activity
            Tracker</a>
        </li>
      </ul>
    </div>
    <div class="content">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbrand navbar-brand mb-0 fs-5">Employee Information</span>
        </div>
      </nav>
      <div class="rounded m-2 p-2">
        <div>
          <div class="bg-white m-4 p-4 rounded">
            <div class="pb-3 mb-2">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal"><i
                  class="fa-solid fa-pen me-2"></i>Create new Location</button>
            </div>
            <div class="border p-2 rounded">
              <table id="locationsTable" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($locations as $row){
                ?>
                <tr id="<?php echo $row['locationID']; ?>">
                    <td><?php echo $row['locationID']; ?></td>
                    <td><?php echo $row['locationName']; ?></td>
                    <td class="text-center">
                      <button class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i></button>
                      <button class="btn btn-outline-secondary"><i class="fa-solid fa-eye"></i></button>
                      <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="formLocation" class="form-label">Location Name</label>
              <input type="email" class="form-control" id="formLocation" aria-describedby="locationHelp">
              <div id="locationHelp" class="form-text">Input unique locations.</div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#locationsTable').DataTable();
    });
  </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>