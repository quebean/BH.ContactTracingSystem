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
                      <button data-id="<?php echo $row->personID; ?>" data-id2="<?php echo $row->personalInfoID; ?>"
                        data-id3="<?php echo $row->contactInformationID; ?>" data-id4="<?php echo $row->employeeID; ?>"
                        class="btn btn-outline-primary btnUpdate"><i class="fa-solid fa-pen"></i></button>
                      <button data-id="<?php echo $row->personID; ?>" data-id2="<?php echo $row->personalInfoID; ?>"
                        data-id3="<?php echo $row->contactInformationID; ?>" data-id4="<?php echo $row->employeeID; ?>"
                        class="btn btn-outline-secondary btnView"><i class="fa-solid fa-eye"></i></button>
                      <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?php echo $row->personID; ?>"
                        data-id2="<?php echo $row->personalInfoID; ?>"
                        data-id3="<?php echo $row->contactInformationID; ?>" data-id4="<?php echo $row->employeeID; ?>"
                        class="btn btn-outline-danger btnDelete"><i class="fa-solid fa-trash"></i></button>
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


<!-- Modal Create -->
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
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
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
                <select class="form-select" id="txtEmpPosition" name="txtEmpPosition" aria-label="Position">
                  <option selected value="Doctor">Doctor</option>
                  <option value="Guard">Guard</option>
                  <option value="Nurse">Nurse</option>
                </select>
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
                <select class="form-select" id="isNurseCreateEmpSelect" name="txtIsNurse" aria-label="Registered Nurse"
                  disabled>
                  <option selected value="No">No</option>
                  <option value="Yes">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="text-muted" for=" floatingInput">License Number</label>
                <input type="text" class="form-control" name="txtLicenseNumber" id="txtLicenseNumber"
                  placeholder="License Number" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-4">
            <div class="form-group">
              <label class="" for="floatingInput">Address <span class="text-muted">(house number and street name)<span
                    class="required">*</span></label>
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
                <label for="floatingInput">Zip Code<span class="required">*</span></label>
                <input type="text" id="" class="form-control" name="txtZipCode" placeholder="Zip Code">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="textCityCreate">City<span class="required">*</span></label>
                <input type="text" class="form-control" id="textCityCreate" name="txtCity" placeholder="City">
              </div>
            </div>
            <div class="col-6">
              <label for="floatingInput">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="txtBarangayCreate" name="txtBarangay"
                  placeholder="Barangay Number">
              </div>
              <label id="txtBarangayCreate-error" class="error manual-error" for="txtBarangayCreate"></label>
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


<!-- Modal View -->
<div class="modal fade" id="viewEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">View Employee</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="addEmployee" class="form-floating" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <input type="hidden" id="hdnviewemployeeID">
              <input type="hidden" id="hdnviewpersonalInfoID">
              <input type="hidden" id="hdnviewcontactInfoID">
              <input type="hidden" id="hdnviewFinalEmployeeID">
              <label for="txtViewEmpNumber">Employee Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHEID -</span>
                <input type="text" class="form-control" name="txtViewEmpNumber" id="txtViewEmpNumber"
                  placeholder="Employee Number" disabled>
              </div>
              <label id="txtEmpNumber-error" class="error manual-error" for="txtEmpNumber"></label>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewEmpPosition">Position<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewEmpPosition" id="txtViewEmpPosition"
                  placeholder="Position" disabled>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtEmpViewFirstName">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpViewFirstName" id="txtEmpViewFirstName"
                  placeholder="First Name" disabled>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtEmpViewMiddleName">Middle Name<span class="required"></span></label>
                <input type="text" class="form-control" name="txtEmpViewMiddleName" id="txtEmpViewMiddleName"
                  placeholder="Middle Name" aria-describedby="helpMiddle" disabled>
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtEmpViewLastName">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtEmpViewLastName" id="txtEmpViewLastName"
                  placeholder="Last Name" disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewEmpBirthdate">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" name="txtViewEmpBirthdate" id="txtViewEmpBirthdate"
                  placeholder="Birthdate" disabled>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewEmpSex">Sex<span class="required"></span></label>
                <select class="form-select" name="txtViewEmpSex" id="txtViewEmpSex" aria-label="Sex" disabled>
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewEmpBloodType">Blood Type<span class="required"></span></label>
                <select class="form-select" name="txtViewEmpBloodType" id="txtViewEmpBloodType" aria-label="Blood Type"
                  disabled>
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
              <label for="txtViewEmpHeight">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtViewEmpHeight" id="txtViewEmpHeight"
                  placeholder="Height in centimeters" aria-describedby="helpCm" disabled>
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
              <label id="txtEmpHeight-error" class="error manual-error" for="txtEmpHeight"></label>

            </div>
            <div class="col-6">
              <label for="txtViewEmpWeight">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtViewEmpWeight" id="txtViewEmpWeight"
                  placeholder="Weight in pounds" disabled>
                <span class="input-group-text" id="helpLbs">lbs.</span>
              </div>
              <label id="txtEmpWeight-error" class="error manual-error" for="txtEmpWeight"></label>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewEmpCitizenship">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewEmpCitizenship" id="txtViewEmpCitizenship"
                  placeholder="Citizenship" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewEmpMaritalStatus">Marital Status<span class="required"></span></label>
                <select class="form-select" id="txtViewEmpMaritalStatus" name="txtViewEmpMaritalStatus"
                  aria-label="Marital Status" disabled>
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
                <label for="txtViewEmpSSS">SSS Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewEmpSSS" id="txtViewEmpSSS" placeholder="SSS Number"
                  disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewEmpPhilNum">PhilHealth Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewEmpPhilNum" id="txtViewEmpPhilNum"
                  placeholder="PhilHealth Number" disabled>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewIsNurse">Registered Nurse<span class="required"></span></label>
                <select class="form-select" name="txtViewIsNurse" id="txtViewIsNurse" aria-label="Registered Nurse"
                  disabled>
                  <option selected value="No">No</option>
                  <option value="No">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="text-muted" for="txtViewLicenseNumber">License Number</label>
                <input type="text" class="form-control" name="txtViewLicenseNumber" id="txtViewLicenseNumber"
                  placeholder="License Number" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-4">
            <div class="form-group">
              <label class="" for="txtViewEmpAddress">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></label>
              <input type="text" class="form-control" name="txtViewEmpAddress" id="txtViewEmpAddress"
                placeholder="Address" disabled>

            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewProvince">Province<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewProvince" id="txtViewProvince"
                  placeholder="Province" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewZipCode">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewZipCode" id="txtViewZipCode" placeholder="Zip Code"
                  disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewCity">City<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewCity" id="txtViewCity" placeholder="City" disabled>
              </div>
            </div>
            <div class="col-6">
              <label for="txtViewBarangay">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="txtViewBarangay" name="txtViewBarangay"
                  placeholder="Barangay Number" disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewContactNumber">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtViewContactNumber" id="txtViewContactNumber"
                  placeholder="Contact Number" disabled>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="txtViewEmpEmail">Email Address<span class="reqpuired">*</span></label>
                <input type="text" class="form-control" name="txtViewEmpEmail" id="txtViewEmpEmail"
                  placeholder="Email Address" disabled>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal -->

<div class="modal fade" id="updateEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Update Employee</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="updateEmployee" class="form-floating" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <input type="hidden" id="hdnupdateEmployeeID">
              <input type="hidden" id="hdnupdatePersonalInfoID">
              <input type="hidden" id="hdnupdateContactInfoID">
              <input type="hidden" id="hdnupdateFinalEmployeeID">
              <label for="txtUpdateEmpNumber">Employee Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHEID -</span>
                <input type="text" class="form-control" name="txtUpdateEmpNumber" id="txtUpdateEmpNumber"
                  placeholder="Employee Number">
              </div>
              <label id="txtUpdateEmpNumber-error" class="error manual-error" for="txtUpdateEmpNumber"></label>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateEmpPosition">Position<span class="required">*</span></label>
                <select class="form-select" name="txtUpdateEmpPosition" id="txtUpdateEmpPosition" aria-label="Position">
                  <option selected value="Doctor">Doctor</option>
                  <option value="Guard">Guard</option>
                  <option value="Nurse">Nurse</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateEmpFirstName">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpFirstName" id="txtUpdateEmpFirstName"
                  placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateEmpMiddleName">Middle Name<span class="required"></span></label>
                <input type="text" class="form-control" name="txtUpdateEmpMiddleName" id="txtUpdateEmpMiddleName"
                  placeholder="Middle Name" aria-describedby="helpMiddle">
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateEmpLastName">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpLastName" id="txtUpdateEmpLastName"
                  placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateEmpBirthdate">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" name="txtUpdateEmpBirthdate" id="txtUpdateEmpBirthdate"
                  placeholder="Birthdate">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateEmpSex">Sex<span class="required"></span></label>
                <select class="form-select" name="txtUpdateEmpSex" id="txtUpdateEmpSex" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateEmpBloodType">Blood Type<span class="required"></span></label>
                <select class="form-select" name="txtUpdateEmpBloodType" id="txtUpdateEmpBloodType"
                  aria-label="Blood Type">
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
              <label for="txtUpdateEmpHeight">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtUpdateEmpHeight" id="txtUpdateEmpHeight"
                  placeholder="Height in centimeters" aria-describedby="helpCm">
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
              <label id="txtUpdateEmpHeight-error" class="error manual-error" for="txtUpdateEmpHeight"></label>
            </div>
            <div class="col-6">
              <label for="txtUpdateEmpWeight">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="txtUpdateEmpWeight" id="txtUpdateEmpWeight"
                  placeholder="Weight in pounds">
                <span class="input-group-text" id="helpLbs">lbs.</span>
              </div>
              <label id="txtUpdateEmpWeight-error" class="error manual-error" for="txtUpdateEmpWeight"></label>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateEmpCitizenship">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpCitizenship" id="txtUpdateEmpCitizenship"
                  placeholder="Citizenship">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateEmpMaritalStatus">Marital Status<span class="required"></span></label>
                <select class="form-select" id="txtUpdateEmpMaritalStatus" name="txtUpdateEmpMaritalStatus"
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
                <label for="txtUpdateEmpSSS">SSS Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpSSS" id="txtUpdateEmpSSS"
                  placeholder="SSS Number">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateEmpPhilNum">PhilHealth Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpPhilNum" id="txtUpdateEmpPhilNum"
                  placeholder="PhilHealth Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateIsNurse">Registered Nurse<span class="required"></span></label>
                <select class="form-select" id="txtUpdateIsNurse" name="txtUpdateIsNurse" aria-label="Registered Nurse"
                  disabled>
                  <option selected value="No">No</option>
                  <option value="Yes">Yes</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="text-muted" for="txtUpdateLicenseNumber">License Number</label>
                <input type="text" class="form-control" name="txtUpdateLicenseNumber" id="txtUpdateLicenseNumber"
                  placeholder="License Number" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-4">
            <div class="form-group">
              <label class="" for="txtUpdateEmpAddress">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></label>
              <input type="text" class="form-control" name="txtUpdateEmpAddress" id="txtUpdateEmpAddress"
                placeholder="Address">

            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateProvince">Province<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateProvince" name="txtUpdateProvince"
                  placeholder="Province">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateZipCode">Zip Code<span class="required">*</span></label>
                <input type="text" id="txtUpdateZipCode" class="form-control" name="txtUpdateZipCode"
                  placeholder="Zip Code">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateCity">City<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateCity" name="txtUpdateCity" placeholder="City">
              </div>
            </div>
            <div class="col-6">
              <label for="txtUpdateBarangay">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="txtUpdateBarangay" name="txtUpdateBarangay"
                  placeholder="Barangay Number">
              </div>
              <label id="txtUpdateBarangay-error" class="error manual-error" for="txtUpdateBarangay"></label>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateContactNumber">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateContactNumber" id="txtUpdateContactNumber"
                  placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="txtUpdateEmpEmail">Email Address<span class="required">*</span></label>
                <input type="text" class="form-control" name="txtUpdateEmpEmail" id="txtUpdateEmpEmail"
                  placeholder="Email Address">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btnUpdateEmployee">Save changes</button>
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
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="hdnemployeeID" id="hdnemployeeID" />
        <input type="hidden" name="hdnrealemployeeID" id="hdnrealemployeeID" />
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

    window.localStorage.setItem('show_popup_update', 'false');
    window.localStorage.setItem('show_popup_add', 'false');
  });

  if (window.localStorage.getItem('show_popup_update') == 'true') {
    alertify.success('Employee Updated');

  }

  if (window.localStorage.getItem('show_popup_add') == 'true') {
    alertify.success('Employee Added');

  }

  // conditional is nurse liscense
  let isNurseSelectTagCreateElement = document.querySelector('#isNurseCreateEmpSelect');
  let txtLicenseNumberCreateElement = document.querySelector('#txtLicenseNumber');
  let txtPositionEnable = document.querySelector('#txtEmpPosition');
  let txtisNurseEnable = document.querySelector('#isNurseCreateEmpSelect');
  txtPositionEnable.addEventListener('change', (event) => {
    if (txtPositionEnable.value.toLowerCase() == "nurse") {
      txtisNurseEnable.disabled = false;
      isNurseSelectTagCreateElement.addEventListener('change', (event) => {
        if (isNurseSelectTagCreateElement.value.toLowerCase() == "yes") {
          txtLicenseNumberCreateElement.disabled = false;
        } else if (isNurseSelectTagCreateElement.value.toLowerCase() == "no") {
          txtLicenseNumberCreateElement.disabled = true;
          txtLicenseNumberCreateElement.value = "";
          txtLicenseNumberCreateElement.placeholder = "License Number";
        }
      })
    } else {
      txtisNurseEnable.disabled = true;
      txtLicenseNumberCreateElement.disabled = true;
      txtLicenseNumberCreateElement.value = "";
      txtLicenseNumber.disabled = true;
      txtLicenseNumberCreateElement.placeholder = "License Number";
      $("#isNurseCreateEmpSelect").val("No");
    }
  })


  let isUpdateNurseSelectTagCreateElement = document.querySelector('#txtUpdateIsNurse');
  let txtUpdateLicenseNumberCreateElement = document.querySelector('#txtUpdateLicenseNumber');
  let txtUpdatePositionEnable = document.querySelector('#txtUpdateEmpPosition');
  let txtUpdateisNurseEnable = document.querySelector('#txtUpdateIsNurse');
  txtUpdatePositionEnable.addEventListener('change', (event) => {
    if (txtUpdatePositionEnable.value.toLowerCase() == "nurse") {
      txtUpdateisNurseEnable.disabled = false;
      isUpdateNurseSelectTagCreateElement.addEventListener('change', (event) => {
        if (isUpdateNurseSelectTagCreateElement.value.toLowerCase() == "yes") {
          txtUpdateLicenseNumberCreateElement.disabled = false;
        } else if (isUpdateNurseSelectTagCreateElement.value.toLowerCase() == "no") {
          txtUpdateLicenseNumberCreateElement.disabled = true;
          txtUpdateLicenseNumberCreateElement.value = "";
          txtUpdateLicenseNumberCreateElement.placeholder = "License Number";
        }
      })
    } else {
      txtUpdateisNurseEnable.disabled = true;
      txtUpdateLicenseNumberCreateElement.disabled = true;
      txtUpdateLicenseNumberCreateElement.value = "";
      txtUpdateLicenseNumberCreateElement.placeholder = "License Number";
      txtUpdateLicenseNumber.disabled = true;
      $("#txtUpdateIsNurse").val("No");
    }
  })



  $("#addEmployee").validate({
    rules: {
      txtEmpNumber: {
        required: true,
        noSpace: true
      },
      txtLicenseNumber: {
        required: true,
        noSpace: true,
        rangelength: [6, 7]
      },
      txtCity: {
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
        lettersonly: true,
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
      txtLicenseNumber: {
        rangelength: "Please enter a valid Nurse License Number"
      },
    },
  });



  $("#updateEmployee").validate({
    rules: {
      txtUpdateEmpNumber: {
        required: true,
        noSpace: true
      },
      txtUpdateLicenseNumber: {
        required: true,
        noSpace: true,
        rangelength: [6, 7]
      },
      txtUpdateCity: {
        required: true,
        noSpace: true
      },
      txtUpdateEmpPosition: {
        required: true,
        noSpace: true
      },
      txtUpdateEmpFirstName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtUpdateEmpMiddleName: {
        lettersonly: true,
      },
      txtUpdateEmpLastName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtUpdateEmpBirthdate: {
        required: true
      },
      txtUpdateEmpSex: {
        required: true
      },
      txtUpdateEmpBloodType: {
        required: true
      },
      txtUpdateEmpHeight: {
        required: true,
        digits: true
      },
      txtUpdateEmpWeight: {
        required: true,
        digits: true
      },
      txtUpdateEmpCitizenship: {
        required: true
      },
      txtUpdateEmpMaritalStatus: {
        required: true
      },
      txtUpdateEmpSSS: {
        required: true,
        digits: true,
        rangelength: [9, 12]
      },
      txtUpdateEmpPhilNum: {
        required: true,
        card: true,
        rangelength: [12, 14]
      },
      txtUpdateEmpAddress: {
        required: true,
        noSpace: true
      },
      txtUpdateProvince: {
        required: true,
        noSpace: true
      },
      txtUpdateZipCode: {
        required: true,
        digits: true,
        rangelength: [4, 4]
      },
      txtUpdateBarangay: {
        required: true
      },
      txtUpdateContactNumber: {
        required: true,
        digits: true,
        rangelength: [7, 11]
      },
      txtUpdateEmpEmail: {
        required: true,
        email: true
      },
    },
    messages: {
      txtUpdateEmpHeight: {
        digits: "Please enter a valid height"
      },
      txtUpdateEmpWeight: {
        digits: "Please enter a valid weight"
      },
      txtUpdateEmpSSS: {
        digits: "Please enter a valid SSS ID Number",
        rangelength: "Please enter a valid SSS ID Number"
      },
      txtUpdateZipCode: {
        digits: "Please enter a valid Zip Code",
        rangelength: "Please enter a valid Zip Code"
      },
      txtUpdateContactNumber: {
        digits: "Please enter a valid Contact Number",
        rangelength: "Please enter a valid Contact Number"
      },
      txtUpdateEmpFirstName: {
        lettersonly: "Please enter a valid name"
      },
      txtUpdateEmpMiddleName: {
        lettersonly: "Please enter a valid name"
      },
      txtUpdateEmpLastName: {
        lettersonly: "Please enter a valid name"
      },
      txtUpdateEmpPhilNum: {
        rangelength: "Please enter a valid PhilHealth Number"
      },
      txtUpdateLicenseNumber: {
        rangelength: "Please enter a valid Nurse License Number"
      },
    },
    submitHandler: function (form) {
      var employeeID = $("#hdnupdateEmployeeID").val();
      var personalInfoID = $("#hdnupdatePersonalInfoID").val();
      var contactInfoID = $("#hdnupdateContactInfoID").val();
      var employeeIDfinal = $("#hdnupdateFinalEmployeeID").val();
      var txtNumber = $("#txtUpdateEmpNumber").val();
      var txtPosition = $("#txtUpdateEmpPosition").val();
      var txtFirstName = $("#txtUpdateEmpFirstName").val();
      var txtMiddleName = $("#txtUpdateEmpMiddleName").val();
      var txtLastName = $("#txtUpdateEmpLastName").val();
      var txtBirthDate = $("#txtUpdateEmpBirthdate").val();
      var txtSex = $("#txtUpdateEmpSex").val();
      var txtBloodType = $("#txtUpdateEmpBloodType").val();
      var txtWeight = $("#txtUpdateEmpWeight").val();
      var txtHeight = $("#txtUpdateEmpHeight").val();
      var txtCitizenship = $("#txtUpdateEmpCitizenship").val();
      var txtMaritalStatus = $("#txtUpdateEmpMaritalStatus").val();
      var txtSSS = $("#txtUpdateEmpSSS").val();
      var txtPhilNum = $("#txtUpdateEmpPhilNum").val();
      var txtNurse = $("#txtUpdateIsNurse").val();
      var txtAddress = $("#txtUpdateEmpAddress").val();
      var txtProvince = $("#txtUpdateProvince").val();
      var txtCity = $("#txtUpdateCity").val();
      var txtBarangay = $("#txtUpdateBarangay").val();
      var txtContactNum = $("#txtUpdateContactNumber").val();
      var txtEmail = $("#txtUpdateEmpEmail").val();
      var txtZipCode = $("#txtUpdateZipCode").val();
      var txtLicenseNum = $("#txtUpdateLicenseNumber").val();
      console.log(employeeID, personalInfoID, contactInfoID, employeeIDfinal);
      $.ajax({
        url: '/update-employee',
        type: 'POST',
        data: {
          employeeID: employeeID, personalInfoID: personalInfoID, contactInfoID: contactInfoID, employeeIDfinal: employeeIDfinal, txtNumber, txtPosition, txtFirstName, txtMiddleName, txtLastName, txtBirthDate,
          txtSex, txtBloodType, txtWeight, txtHeight, txtCitizenship, txtMaritalStatus, txtSSS, txtPhilNum, txtNurse, txtAddress, txtProvince, txtCity, txtBarangay, txtContactNum, txtEmail,
          txtZipCode, txtLicenseNum
        },
        success: function (data) {
          $('#updateEmployeeModal').modal('hide');
          window.localStorage.setItem('show_popup_update', 'true');
          window.location.reload();

          // $.get('delete-employee/' + employeeID, function (data) {
          //   $('#employeeTable tbody #' + employeeIDfinal).remove();
          // })
          // alertify.alert('Confirmation', 'Employee Deleted!', function () { alertify.success('Ok'); });
        }
      });

    }

  });

  $('body').on('click', '.btnDelete', function () {
    var employeeID = $(this).attr('data-id');
    var personalInfoID = $(this).attr('data-id2');
    var contactInfoID = $(this).attr('data-id3');
    var employeeIDfinal = $(this).attr('data-id4');
    $('#deleteModal #hdnemployeeID').val(employeeID);
    $('#deleteModal #hdnpersonalInfoID').val(personalInfoID);
    $('#deleteModal #hdncontactInfoID').val(contactInfoID);
    $('#deleteModal #hdnrealemployeeID').val(employeeIDfinal);
  });


  $('body').on('click', '.btnConfirmDelete', function () {
    var employeeID = $("#hdnemployeeID").val();
    var personalInfoID = $("#hdnpersonalInfoID").val();
    var contactInfoID = $("#hdncontactInfoID").val();
    var employeeIDfinal = $("#hdnrealemployeeID").val();
    $.ajax({
      url: '/getIDs',
      type: 'POST',
      data: { personalInfoID: personalInfoID, contactInfoID: contactInfoID },
      success: function (data) {
        console.log(data);
        $.get('delete-employee/' + employeeID, function (data) {
          $('#employeeTable tbody #' + employeeIDfinal).remove();
        })
        alertify.success('Employee Deleted');
      }
    });
    $('#deleteModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
  });




  $('body').on('click', '.btnView', function () {
    var employeeID = $(this).attr('data-id');
    var personalInfoID = $(this).attr('data-id2');
    var contactInfoID = $(this).attr('data-id3');
    var employeeIDfinal = $(this).attr('data-id4');
    console.log(employeeID, personalInfoID, contactInfoID, employeeIDfinal);
    $('#viewEmployeeModal #hdnviewemployeeID').val(employeeID);
    $('#viewEmployeeModal #hdnviewpersonalInfoID').val(personalInfoID);
    $('#viewEmployeeModal #hdnviewcontactInfoID').val(contactInfoID);
    $('#viewEmployeeModal #hdnviewFinalEmployeeID').val(employeeIDfinal);
    $.ajax({
      url: 'view-employee/' + employeeID,
      type: "GET",
      dataType: 'json',
      success: function (res) {
        let result = res.find(employee => employee.employeeID == employeeIDfinal);
        console.log(res);
        // let result = res.find(position => position.employeeID == employeeID);
        $('#viewEmployeeModal').modal('show');
        $('#viewEmployeeModal #txtViewEmpNumber').val(result.employeeNumber);
        $('#viewEmployeeModal #txtViewEmpPosition').val(result.position);
        $('#viewEmployeeModal #txtEmpViewFirstName').val(result.firstName);
        $('#viewEmployeeModal #txtEmpViewMiddleName').val(result.middleName);
        $('#viewEmployeeModal #txtEmpViewLastName').val(result.lastName);
        $('#viewEmployeeModal #txtViewEmpBirthdate').val(result.birthDate);
        $('#viewEmployeeModal #txtViewEmpSex').val(result.sex);
        $('#viewEmployeeModal #txtViewEmpBloodType').val(result.bloodType);
        $('#viewEmployeeModal #txtViewEmpHeight').val(result.height);
        $('#viewEmployeeModal #txtViewEmpWeight').val(result.weight);
        $('#viewEmployeeModal #txtViewEmpCitizenship').val(result.citizenship);
        $('#viewEmployeeModal #txtViewEmpMaritalStatus').val(result.maritalStatus);
        $('#viewEmployeeModal #txtViewEmpSSS').val(result.sssNumber);
        $('#viewEmployeeModal #txtViewEmpPhilNum').val(result.philHealthNumber);
        $('#viewEmployeeModal #txtViewEmpAddress').val(result.address);
        $('#viewEmployeeModal #txtViewProvince').val(result.province);
        $('#viewEmployeeModal #txtViewZipCode').val(result.zipcode);
        $('#viewEmployeeModal #txtViewCity').val(result.city);
        $('#viewEmployeeModal #txtViewBarangay').val(result.barangay);
        $('#viewEmployeeModal #txtViewContactNumber').val(result.cellphoneNumber);
        $('#viewEmployeeModal #txtViewEmpEmail').val(result.emailAddress);
        $('#viewEmployeeModal #txtViewIsNurse').val(result.isNurse);
        $('#viewEmployeeModal #txtViewLicenseNumber').val(result.nurseLicenseNumber);
      },
      error: function (data) {
      }
    });
  });


  $('body').on('click', '.btnUpdate', function () {
    var employeeID = $(this).attr('data-id');
    var personalInfoID = $(this).attr('data-id2');
    var contactInfoID = $(this).attr('data-id3');
    var employeeIDfinal = $(this).attr('data-id4');
    console.log(employeeID, personalInfoID, contactInfoID, employeeIDfinal);
    $('#updateEmployeeModal #hdnupdateEmployeeID').val(employeeID);
    $('#updateEmployeeModal #hdnupdatePersonalInfoID').val(personalInfoID);
    $('#updateEmployeeModal #hdnupdateContactInfoID').val(contactInfoID);
    $('#updateEmployeeModal #hdnupdateFinalEmployeeID').val(employeeIDfinal);
    $.ajax({
      url: 'fetch-employee/' + employeeID,
      type: "GET",
      dataType: 'json',
      success: function (res) {
        let result = res.find(employee => employee.employeeID == employeeIDfinal);
        console.log(res);
        // let result = res.find(position => position.employeeID == employeeID);
        $('#updateEmployeeModal').modal('show');
        $('#updateEmployeeModal #txtUpdateEmpNumber').val(result.employeeNumber);
        $('#updateEmployeeModal #txtUpdateEmpPosition').val(result.position);
        $('#updateEmployeeModal #txtUpdateEmpFirstName').val(result.firstName);
        $('#updateEmployeeModal #txtUpdateEmpMiddleName').val(result.middleName);
        $('#updateEmployeeModal #txtUpdateEmpLastName').val(result.lastName);
        $('#updateEmployeeModal #txtUpdateEmpBirthdate').val(result.birthDate);
        $('#updateEmployeeModal #txtUpdateEmpSex').val(result.sex);
        $('#updateEmployeeModal #txtUpdateEmpBloodType').val(result.bloodType);
        $('#updateEmployeeModal #txtUpdateEmpHeight').val(result.height);
        $('#updateEmployeeModal #txtUpdateEmpWeight').val(result.weight);
        $('#updateEmployeeModal #txtUpdateEmpCitizenship').val(result.citizenship);
        $('#updateEmployeeModal #txtUpdateEmpMaritalStatus').val(result.maritalStatus);
        $('#updateEmployeeModal #txtUpdateEmpSSS').val(result.sssNumber);
        $('#updateEmployeeModal #txtUpdateEmpPhilNum').val(result.philHealthNumber);
        $('#updateEmployeeModal #txtUpdateIsNurse').val(result.isNurse);
        $('#updateEmployeeModal #txtUpdateEmpAddress').val(result.address);
        $('#updateEmployeeModal #txtUpdateProvince').val(result.province);
        $('#updateEmployeeModal #txtUpdateCity').val(result.city);
        $('#updateEmployeeModal #txtUpdateBarangay').val(result.barangay);
        $('#updateEmployeeModal #txtUpdateContactNumber').val(result.cellphoneNumber);
        $('#updateEmployeeModal #txtUpdateEmpEmail').val(result.emailAddress);
        $('#updateEmployeeModal #txtUpdateZipCode').val(result.zipcode);
        $('#updateEmployeeModal #txtUpdateLicenseNumber').val(result.nurseLicenseNumber);
      },
      error: function (data) {
      }
    });

    $('body').on('click', '.btnUpdateEmployee', function () {

      // $('#deleteModal').modal('hide');
      // $('body').removeClass('modal-open');
      // $('.modal-backdrop').remove();
    });
  });

</script>

<?php include("shared/bottom.php"); ?>