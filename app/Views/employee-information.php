<?php include("shared/top.php"); ?>

<div class="main-container d-flex">
  <?php include("shared/sidenav.php"); ?>
  <div class="content">
    <?php include("shared/header.php"); ?>
    <!-- start coding below this comment -->
    <div class="rounded m-2 p-2">
      <div>
        <div class="bg-white m-4 p-4 rounded">
          <div class="pb-3 mb-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#employeeModal"><i
                class="fa-solid fa-pen me-2"></i>Create New Employee</button>
          </div>
          <div class="border p-2 rounded">
            <table id="employeeTable" class="display" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center">Employee ID</th>
                  <th class="text-center">Employee Name</th>
                  <th class="text-center">Position</th>
                  <th class="text-center">Sex</th>
                  <th class="text-center">Address</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->

<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('add-location'); ?>" class="form-floating" method="post">
          <h5 class="modal-title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Employee Number">
                <label for=" floatingInput">Employee Number</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Position">
                <label for="floatingInput">Position</label>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for=" floatingInput">First Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
                <label for=" floatingInput">Middle Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for=" floatingInput">Last Name</label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-8">
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" placeholder="Birthdate">
                <label for=" floatingInput">Birthdate</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Sex">
                  <option selected value="M">Male</option>
                  <option value="F">Female</option>
                </select>
                <label for="floatingSelectGrid">Sex</label>
              </div>
            </div>
          </div>

          <h5 class="modal-title mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="Address">
              <label for="floatingInput">Address</label>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for=" floatingInput">First Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
                <label for=" floatingInput">Middle Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for=" floatingInput">Last Name</label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-8">
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" placeholder="Birthdate">
                <label for=" floatingInput">Birthdate</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Sex">
                  <option selected value="M">Male</option>
                  <option value="F">Female</option>
                </select>
                <label for="floatingSelectGrid">Sex</label>
              </div>
            </div>
          </div>






          <!-- <div class="mb-3">
            <label for="formEmployee" class="form-label">First Name</label>
            <input type="text" class="form-control form-floating" id="formFirstName" name="formFirstName"
              aria-describedby="employeeHelp" placeholder="Enter First Name">

          </div>
          <div class="mb-3">
            <label for="formEmployee" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="formMiddleName" name="formMiddleName"
              aria-describedby="employeeHelp">

          </div>
          <div class="mb-3">
            <label for="formEmployee" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="formLastName" name="formLastName"
              aria-describedby="employeeHelp">

          </div> -->

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script defer type="text/javascript">
    $(document).ready(function () {
      $('#employeeTable').DataTable();
    });
  </script>

  <?php include("shared/bottom.php"); ?>