<?php include("shared/top.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
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
        <form id="addEmployee" action="<?php echo base_url('add-employee') ?>" class="form-floating" method="post">
          <h5 class="modal-title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtEmpNumber">Patient Number<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtEmpNumber" placeholder="Employee Number">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtEmpPosition">Position<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtEmpPosition" placeholder="Position">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">First Name<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtEmpFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Middle Name</label>
                <input type="text" class="form-control"  name="txtEmpMiddleName" placeholder="Middle Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtEmpLastName" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control"  name="txtEmpBirthdate" placeholder="Birthdate">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
              <label for="floatingSelectGrid">Sex</label>
                <select class="form-select" id="floatingSelectGrid" name="txtEmpSex" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
              <label for="floatingSelectGrid">Blood Type</label>
                <select class="form-select" id="floatingSelectGrid" name="txtEmpBloodType" aria-label="Blood Type">
                  <option selected value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Height (m)<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpHeight" placeholder="Height">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Weight (kg)<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpWeight" placeholder="Weight">
              </div>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtEmpCitizenship" placeholder="Citizenship">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="floatingSelectGrid">Marital Status</label>
                <select class="form-select" id="floatingSelectGrid" name="txtEmpMaritalStatus" aria-label="Marital Status">
                  <option selected value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">SSS Number</label>
                <input type="text" class="form-control"  name="txtEmpSSS" placeholder="SSS Number">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">PhilHealth Number</label>
                <input type="text" class="form-control"  name="txtEmpPhilNum" placeholder="PhilHealth Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
              <label for="floatingSelectGrid">Registered Nurse</label>
                <select class="form-select" id="floatingSelectGrid" name="txtIsNurse" aria-label="Registered Nurse">
                  <option selected value="No">No</option>
                  <option value="No">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="text-muted" for=" floatingInput">License Number<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtLicenseNumber" placeholder="License Number" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="modal-title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-4">
            <div class="form-group">
              <label class="" for="floatingInput">Address <span class="text-muted">(house number and street name)<span class="required">*</span></span></label>
              <input type="text" class="form-control"  name="txtEmpAddress" placeholder="Address">

            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
              <label for="floatingSelectGrid">Province</label>
                <select class="form-select" id="floatingSelectGrid" name="txtProvince" aria-label="Province">
                  <option selected value="Philippines">Cavite</option>
                  <option value="Metro Manila">Metro Manila</option>
                  <option value="Batangas">Batangas</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtZipCode" placeholder="Zip Code">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
              <label for="floatingSelectGrid">City</label>
                <select class="form-select" id="floatingSelectGrid" name="txtCity" aria-label="City">
                  <option selected value="Cavite City">Cavite City</option>
                  <option value="Dasmariñas City">Dasmariñas City</option>
                  <option value="Bacoor City">Bacoor City</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="floatingSelectGrid">Barangay</label>
                <select class="form-select" id="floatingSelectGrid" name="txtBarangay" aria-label="Barangay">
                  <option selected value="Barangay 1">Barangay 1</option>
                  <option value="Barangay 2">Barangay 2</option>
                  <option value="Barangay 3">Barangay 3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="floatingInput">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control"  name="txtContactNumber" placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="floatingInput">Email Address</label>
                <input type="text" class="form-control"  name="txtEmpEmail" placeholder="Email Address">
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

    $("#addEmployee").validate({
      rules:{
        txtEmpNumber: "required",
        txtEmpPosition:"required",
        txtEmpFirstName:{
          required:true
        }
      },
      messages: {
        
        },
    });
  </script>

  <?php include("shared/bottom.php"); ?>