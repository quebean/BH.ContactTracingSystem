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
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#patientModal"><i
                class="fa-solid fa-person-circle-plus me-2"></i>Create New Patient</button>
          </div>
          <div class="border p-2 rounded">
            <table id="patientTable" class="display" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center">Patient ID</th>
                  <th class="text-center">Patient Name</th>
                  <th class="text-center">Contact Number</th>
                  <th class="text-center">Physician</th>
                  <th class="text-center">Next Consultation</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $row) {
                  ?>
                  <tr id="<?php echo $row->patientID ?>">
                    <td class="text-center">
                      <?php echo $row->patientID ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->fullName ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->cellphoneNumber ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->physician ?>
                    </td>
                    <td class="text-center">
                      <?php echo $row->nextConsultation ?>
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


<div class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Create New Patient</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="addPatient" action="<?php echo base_url('add-patient'); ?>" class="form-group" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <label for=" floatingInput">Patient Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHPID -</span>
                <input type="text" class="form-control" id="floatingInput" name="txtPatientNumber" placeholder="Patient Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Middle Name</label>
                <input type="text" class="form-control" id="txtMiddleName" name="txtMiddleName" placeholder="Middle Name"
                  aria-describedby="helpMiddle">
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" id="txtBirthDate" name="txtBirthDate" placeholder="Birthdate">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="floatingSelectGrid">Sex</label>
                <select class="form-select" id="floatingSelectGrid" name="txtSex" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="floatingSelectGrid">Blood Type</label>
                <select class="form-select" id="floatingSelectGrid" name="txtBloodType" aria-label="Blood Type">
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
              <label for=" floatingInput">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="floatingInput" name="txtHeight" placeholder="Height in centimeters"
                  aria-describedby="helpCm">
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
            </div>
            <div class="col-6">
              <label for=" floatingInput">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="floatingInput" name="txtWeight" placeholder="Weight in pounds"
                  aria-describedby="basic-addon3">
                <span class="input-group-text" id="basic-addon3">lbs.</span>
              </div>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" name="txtCitizenship" placeholder="Citizenship">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="floatingSelectGrid">Marital Status</label>
                <select class="form-select" id="floatingSelectGrid"  name="txtMaritalStatus" aria-label="Marital Status">
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
                <input type="text" class="form-control" id="floatingInput" name="txtSSSNum" placeholder="SSS Number"
                  aria-describedby="helpSSS">
                <div id="helpSSS" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">PhilHealth Number</label>
                <input type="text" class="form-control" id="floatingInput" name="txtPhilHealthNum" placeholder="PhilHealth Number"
                  aria-describedby="helpPhil">
                <div id="helpPhil" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Diagnoses<span class="required">*</span></label>
                <textarea class="form-control" id="smsText" name="txtDiagnoses" rows="2" placeholder="Diagnoses"></textarea>
                <div id="help" class="form-text ms-2">Multiple inputs are accepted.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Physician<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" name="txtPhysician" placeholder="Physician">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Next Appointment<span class="required"></span></label>
                <input type="datetime-local" class="form-control" id="floatingInput2" name="txtNextAppointment" placeholder="Next Appointment">
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-group">
              <label for="floatingInput">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></span></label>
              <input type="text" class="form-control" id="floatingInput" name="txtAddress" placeholder="Address">
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Province<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" name="txtProvince" placeholder="Province">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" name="txtZipCode" placeholder="Zip Code">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">City<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" name="txtCity" placeholder="City">
              </div>
            </div>
            <div class="col-6">
              <label for=" floatingInput">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="floatingInput" name="txtBarangay" placeholder="Barangay Number">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="floatingInput">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtContactNum" name="txtContactNum" placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="floatingInput">Email Address</label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email Address"
                  aria-describedby="helpEmail">
                <div id="helpEmail" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Patient</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script defer type="text/javascript">
    $(document).ready(function () {
      $('#patientTable').DataTable();
    });

    jQuery.validator.addMethod("noSpace", function (value, element) {
      let newValue = value.trim();

      return (newValue) ? true : false;
    }, "This field is required");

    const element = document.querySelector('#floatingInput2')

    element.addEventListener('change', () => {
      console.log(new Date(element.value).toISOString());
    })

    $("#addPatient").validate({
    rules: {
      txtPatientNumber: {
        required: true,
        noSpace: true
      },
      txtCity: {
        required: true,
        noSpace: true
      },
      txtFirstName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtMiddleName: {
        lettersonly: true,
      },
      txtLastName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtBirthDate: {
        required: true
      },
      txtSex: {
        required: true
      },
      txtBloodType: {
        required: true
      },
      txtHeight: {
        required: true,
        digits: true
      },
      txtWeight: {
        required: true,
        digits: true
      },
      txtCitizenship: {
        required: true
      },
      txtMaritalStatus: {
        required: true
      },
      txtSSSNum: {
        required: true,
        digits: true,
        rangelength: [9, 12]
      },
      txtPhilHealthNum: {
        required: true,
        card: true,
        rangelength: [12, 14]
      },
      txtAddress: {
        required: true,
        noSpace: true
      },
      txtProvince: {
        required: true,
        noSpace: true
      },
      txtZipCode: {
        required: true,
        digits: true,
        rangelength: [4, 4]
      },
      txtBarangay: {
        required: true
      },
      txtContactNum: {
        required: true,
        digits: true,
        rangelength: [7, 11]
      },
      txtEmail: {
        required: true,
        email: true
      },
      txtPhysician: {
        required: true,
        lettersonly:true,
      },
      txtNextAppointment: {
        required: true,
      },
      txtDiagnoses: {
        required: true,
      },
    },
    messages: {
    },
  });

  </script>


  <?php include("shared/bottom.php"); ?>