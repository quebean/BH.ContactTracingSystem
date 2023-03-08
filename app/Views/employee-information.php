<?php include("shared/top.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<!-- Datatables -->
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
                  <th class="text-center d-none">Person ID</th>
                  <th class="text-center d-none">Personal Info ID</th>
                  <th class="text-center d-none">Contact Info ID</th>
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
                    <td class="text-center d-none">
                      <?php echo $row->personID ?>
                    </td>
                    <td class="text-center d-none">
                      <?php echo $row->personalInfoID ?>
                    </td>
                    <td class="text-center d-none">
                      <?php echo $row->contactInformationID ?>
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
                      <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?php echo $row->personID; ?>"
                        data-id2="<?php echo $row->personalInfoID; ?>"
                        data-id3="<?php echo $row->contactInformationID; ?>" class="btn btn-outline-danger btnDelete"><i
                          class="fa-solid fa-trash"></i></button>
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
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Create New Employee</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="addEmployee" action="<?php echo base_url('add-employee') ?>" class="form-floating" method="post">
          <h5 class="modal-title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <label for="txtEmpNumber">Employee Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHEID -</span>
                <input type="text" class="form-control" name="txtEmpNumber" placeholder="Employee Number">
              </div>
              <label id="txtEmpNumber-error" class="error manual-error" for="txtEmpNumber"></label>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtEmpPosition">Position<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpPosition" placeholder="Position">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Middle Name<span class="required"></span></label>
                <input type="text" class="form-control" name="txtEmpMiddleName" placeholder="Middle Name"
                  aria-describedby="helpMiddle">
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpLastName" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" name="txtEmpBirthdate" placeholder="Birthdate">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="floatingSelectGrid">Sex<span class="required"></span></label>
                <select class="form-select" id="floatingSelectGrid" name="txtEmpSex" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="floatingSelectGrid">Blood Type<span class="required"></span></label>
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
              <label for=" floatingInput">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtEmpHeight" placeholder="Height in centimeters"
                  aria-describedby="helpCm">
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
              <label id="txtEmpHeight-error" class="error manual-error" for="txtEmpHeight"></label>

            </div>
            <div class="col-6">
              <label for=" floatingInput">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtEmpWeight" placeholder="Weight in pounds">
                <span class="input-group-text" id="helpLbs">lbs.</span>
              </div>
              <label id="txtEmpWeight-error" class="error manual-error" for="txtEmpWeight"></label>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpCitizenship" placeholder="Citizenship">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="floatingSelectGrid">Marital Status<span class="required"></span></label>
                <select class="form-select" id="floatingSelectGrid" name="txtEmpMaritalStatus"
                  aria-label="Marital Status">
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
                <label for=" floatingInput">SSS Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpSSS" placeholder="SSS Number">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">PhilHealth Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpPhilNum" placeholder="PhilHealth Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="floatingSelectGrid">Registered Nurse<span class="required"></span></label>
                <select class="form-select" id="floatingSelectGrid" name="txtIsNurse" aria-label="Registered Nurse">
                  <option selected value="No">No</option>
                  <option value="No">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="text-muted" for=" floatingInput">License Number</label>
                <input type="text" class="form-control" name="txtLicenseNumber" placeholder="License Number" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="modal-title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-4">
            <div class="form-group">
              <label class="" for="floatingInput">Address <span class="text-muted">(house number and street name)<span
                    class="required">*</span></span></label>
              <input type="text" class="form-control" name="txtEmpAddress" placeholder="Address">

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
                <input type="text" class="form-control" name="txtZipCode" placeholder="Zip Code">
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
                <input type="text" class="form-control" id="floatingInput" name="txtBarangay"
                  placeholder="Barangay Number">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="floatingInput">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtContactNumber" placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="floatingInput">Email Address<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpEmail" placeholder="Email Address">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btnAddEmployee">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="hdnemployeeID" id="hdnemployeeID" />
        <input type="hidden" name="hdnpersonalInfoID" id="hdnpersonalInfoID" />
        <input type="hidden" name="hdncontactInfoID" id="hdncontactInfoID" />
        <p>Do you want to delete the selected employee?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary btnConfirmDelete">Yes</button>
      </div>
    </div>
  </div>
</div>

<script defer type="text/javascript">
  $(document).ready(function () {
    $('#employeeTable').DataTable();

    jQuery.validator.addMethod("lettersonly", function (value, element) {
      return this.optional(element) || /^[a-z " "]+$/i.test(value);
    }, "Letters only please");

    jQuery.validator.addMethod("card", function (value, element) {
      return this.optional(element) || /^[0-9 -]+$/i.test(value);
    }, "Please enter a valid PhilHealth Number");

    jQuery.validator.addMethod("noSpace", function (value, element) {
      let newValue = value.trim();

      return (newValue) ? true : false;
    }, "This field is required");
  });

  $("#addEmployee").validate({
    rules: {
      txtEmpNumber: {
        required: true,
        noSpace: true
      },
      txtEmpPosition: {
        required: true,
        noSpace: true
      },
      txtEmpFirstName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtEmpMiddleName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtEmpLastName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtEmpBirthdate: {
        required: true
      },
      txtEmpSex: {
        required: true
      },
      txtEmpBloodType: {
        required: true
      },
      txtEmpHeight: {
        required: true,
        digits: true
      },
      txtEmpWeight: {
        required: true,
        digits: true
      },
      txtEmpCitizenship: {
        required: true
      },
      txtEmpMaritalStatus: {
        required: true
      },
      txtEmpSSS: {
        required: true,
        digits: true,
        rangelength: [9, 12]
      },
      txtEmpPhilNum: {
        required: true,
        card: true,
        rangelength: [12, 14]
      },
      txtEmpAddress: {
        required: true,
        noSpace: true
      },
      txtProvince: {
        required: true
      },
      txtZipCode: {
        required: true,
        digits: true,
        rangelength: [4, 4]
      },
      txtBarangay: {
        required: true
      },
      txtContactNumber: {
        required: true,
        digits: true,
        rangelength: [7, 11]
      },
      txtEmpEmail: {
        required: true,
        email: true
      },
    },
    messages: {
      txtEmpHeight: {
        digits: "Please enter a valid height"
      },
      txtEmpWeight: {
        digits: "Please enter a valid weight"
      },
      txtEmpSSS: {
        digits: "Please enter a valid SSS ID Number",
        rangelength: "Please enter a valid SSS ID Number"
      },
      txtZipCode: {
        digits: "Please enter a valid Zip Code",
        rangelength: "Please enter a valid Zip Code"
      },
      txtContactNumber: {
        digits: "Please enter a valid Contact Number",
        rangelength: "Please enter a valid Contact Number"
      },
      txtEmpFirstName: {
        lettersonly: "Please enter a valid name"
      },
      txtEmpMiddleName: {
        lettersonly: "Please enter a valid name"
      },
      txtEmpLastName: {
        lettersonly: "Please enter a valid name"
      },
      txtEmpPhilNum: {
        rangelength: "Please enter a valid PhilHealth Number"
      },
    },
  });

  $('body').on('click', '.btnDelete', function () {
    var employeeID = $(this).attr('data-id');
    var personalInfoID = $(this).attr('data-id2');
    var contactInfoID = $(this).attr('data-id3');
    $('#deleteModal #hdnemployeeID').val(employeeID);
    $('#deleteModal #hdnpersonalInfoID').val(personalInfoID);
    $('#deleteModal #hdncontactInfoID').val(contactInfoID);
  });


  $('body').on('click', '.btnConfirmDelete', function () {
    var employeeID = $("#hdnemployeeID").val();
    var personalInfoID = $("#hdnpersonalInfoID").val();
    var contactInfoID = $("#hdncontactInfoID").val();
    $.ajax({
      url: '/getIDs',
      type: 'POST',
      data: { personalInfoID: personalInfoID, contactInfoID: contactInfoID },
      success: function (data) {
        console.log(data);
        $.get('delete-employee/' + employeeID, function (data) {
          $('#employeeTable tbody #' + employeeID).remove();
        })
        alertify.alert('Confirmation', 'Employee Deleted!', function () { alertify.success('Ok'); });
      }
    });
    $('#deleteModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
  });

</script>

<?php include("shared/bottom.php"); ?>