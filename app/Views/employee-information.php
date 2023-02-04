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
              <?php
                foreach ($result as $row) {
                  ?>
                  <tr id="<?php echo $row->employeeID ?>">
                    <td class="text-center">
                      <?php echo $row->employeeNumber ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->fullName ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->position ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->sex ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->address ?>
                    </td>
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
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      

      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form action="" class="form-floating" method="post">
          <h5 class="modal-title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Employee Number*">
                <label for=" floatingInput">Patient Number<span class="required">*</span></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Position*">
                <label for="floatingInput">Position<span class="required">*</span></label>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name*">
                <label for=" floatingInput">First Name<span class="required">*</span></label>
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
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name*">
                <label for=" floatingInput">Last Name<span class="required">*</span></label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" placeholder="Birthdate*">
                <label for=" floatingInput">Birthdate<span class="required">*</span></label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label for="floatingSelectGrid">Sex</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Blood Type">
                  <option selected value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
                <label for="floatingSelectGrid">Blood Type</label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Height*">
                <label for=" floatingInput">Height (m)<span class="required">*</span></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Weight*">
                <label for=" floatingInput">Weight (kg)<span class="required">*</span></label>
              </div>
            </div>
            
          </div>
          <div class="row g-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Citizenship*">
                <label for=" floatingInput">Citizenship<span class="required">*</span></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Marital Status">
                  <option selected value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
                </select>
                <label for="floatingSelectGrid">Marital Status</label>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="SSS Number*">
                <label for=" floatingInput">SSS Number</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="PhilHealth Number*">
                <label for=" floatingInput">PhilHealth Number</label>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Registered Nurse">
                  <option selected value="No">No</option>
                  <option value="No">Yes</option>
                </select>
                <label for="floatingSelectGrid">Registered Nurse</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="License Number*" disabled>
                <label class="text-muted" for=" floatingInput">License Number<span class="required">*</span></label>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="modal-title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="Address*">
              <label class="ps-3" for="floatingInput">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></span></label>
            </div>
          </div>
          <div class="row gx-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Provice">
                  <option selected value="Philippines">Cavite</option>
                  <option value="Metro Manila">Metro Manila</option>
                  <option value="Batangas">Batangas</option>
                </select>
                <label for="floatingSelectGrid">Province</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Zip Code*">
                <label for=" floatingInput">Zip Code<span class="required">*</span></label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="City">
                  <option selected value="Cavite City">Cavite City</option>
                  <option value="Dasmariñas City">Dasmariñas City</option>
                  <option value="Bacoor City">Bacoor City</option>
                </select>
                <label for="floatingSelectGrid">City</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" aria-label="Barangay">
                  <option selected value="Barangay 1">Barangay 1</option>
                  <option value="Barangay 2">Barangay 2</option>
                  <option value="Barangay 3">Barangay 3</option>
                </select>
                <label for="floatingSelectGrid">Barangay</label>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Contact Number*">
                <label for="floatingInput">Contact Number<span class="required">*</span></label>
              </div>
            </div>
            <div class="col-6 mb-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Email Address*">
                <label for="floatingInput">Email Address</label>
              </div>
            </div>
          </div>
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