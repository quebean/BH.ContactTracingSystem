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
                  <th class="text-center">Patient Number</th>
                  <th class="text-center">Personal Information ID</th>
                  <th class="text-center">Person ID</th>
                  <th class="text-center">Contact Information ID</th>
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
                      <?php echo $row->patientNumber ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row->personalInformationID ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row->personID ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row->contactInformationID ?>
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
                      <button data-id="<?php echo $row->patientID; ?>" data-id2="<?php echo $row->personID; ?>" data-id3="<?php echo $row->personalInformationID; ?>" data-id4="<?php echo $row->contactInformationID; ?>" class="btn btn-outline-primary btnUpdate"><i class="fa-solid fa-pen"></i></button>
                      <button data-id="<?php echo $row->patientID; ?>" data-id2="<?php echo $row->personID; ?>" data-id3="<?php echo $row->personalInformationID; ?>" data-id4="<?php echo $row->contactInformationID; ?>" class="btn btn-outline-secondary btnView"><i class="fa-solid fa-eye"></i></button>
                      <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?php echo $row->patientID; ?>" data-id2="<?php echo $row->personID; ?>" data-id3="<?php echo $row->personalInformationID; ?>" data-id4="<?php echo $row->contactInformationID; ?>" class="btn btn-outline-danger btnDelete"><i class="fa-solid fa-trash"></i></button>
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
</div>

<!-- Modal Update -->
<div class="modal fade" id="patientUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Update Patient</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="updatePatient" class="form-group" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
            <input type="hidden" name="hdnUpdatePatientID" id="hdnUpdatePatientID" />
            <input type="hidden" name="hdnUpdatePersonID" id="hdnUpdatePersonID" />
            <input type="hidden" name="hdnUpdatePersonalInfoID" id="hdnUpdatePersonalInfoID" />
            <input type="hidden" name="hdnUpdateContactInfoID" id="hdnUpdateContactInfoID" />
              <label for="txtUpdatePatientNumber">Patient Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHPID -</span>
                <input type="text" class="form-control" id="txtUpdatePatientNumber" name="txtUpdatePatientNumber" placeholder="Patient Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateFirstName">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateFirstName" name="txtUpdateFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateMiddleName">Middle Name</label>
                <input type="text" class="form-control" id="txtUpdateMiddleName" name="txtUpdateMiddleName" placeholder="Middle Name"
                  aria-describedby="helpMiddle">
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateLastName">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateLastName" name="txtUpdateLastName" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateBirthDate">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" id="txtUpdateBirthDate" name="txtUpdateBirthDate" placeholder="Birthdate">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateSex">Sex</label>
                <select class="form-select" id="txtUpdateSex" name="txtUpdateSex" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtUpdateBloodType">Blood Type</label>
                <select class="form-select" id="txtUpdateBloodType" name="txtUpdateBloodType" aria-label="Blood Type">
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
              <label for="txtUpdateHeight">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="txtUpdateHeight" name="txtUpdateHeight" placeholder="Height in centimeters"
                  aria-describedby="helpCm">
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
            </div>
            <div class="col-6">
              <label for="txtUpdateWeight">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="txtUpdateWeight" name="txtUpdateWeight" placeholder="Weight in pounds"
                  aria-describedby="basic-addon3">
                <span class="input-group-text" id="basic-addon3">lbs.</span>
              </div>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateCitizenship">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateCitizenship" name="txtUpdateCitizenship" placeholder="Citizenship">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateMaritalStatus">Marital Status</label>
                <select class="form-select" id="txtUpdateMaritalStatus"  name="txtUpdateMaritalStatus" aria-label="Marital Status">
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
                <label for="txtUpdateSSSNum">SSS Number</label>
                <input type="text" class="form-control" id="txtUpdateSSSNum" name="txtUpdateSSSNum" placeholder="SSS Number"
                  aria-describedby="helpSSS">
                <div id="helpSSS" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdatePhilHealthNum">PhilHealth Number</label>
                <input type="text" class="form-control" id="txtUpdatePhilHealthNum" name="txtUpdatePhilHealthNum" placeholder="PhilHealth Number"
                  aria-describedby="helpPhil">
                <div id="helpPhil" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtUpdateDiagnoses">Diagnoses<span class="required">*</span></label>
                <textarea class="form-control" id="txtUpdateDiagnoses" name="txtUpdateDiagnoses" rows="2" placeholder="Diagnoses"></textarea>
                <div id="help" class="form-text ms-2">Multiple inputs are accepted.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdatePhysician">Physician<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdatePhysician" name="txtUpdatePhysician" placeholder="Physician">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateNextAppointment">Next Appointment<span class="required"></span></label>
                <input type="datetime-local" class="form-control" id="txtUpdateNextAppointment" name="txtUpdateNextAppointment" placeholder="Next Appointment">
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-group">
              <label for="txtUpdateAddress">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></span></label>
              <input type="text" class="form-control" id="txtUpdateAddress" name="txtUpdateAddress" placeholder="Address">
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateProvince">Province<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateProvince" name="txtUpdateProvince" placeholder="Province">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateZipCode">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateZipCode" name="txtUpdateZipCode" placeholder="Zip Code">
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
                <input type="text" class="form-control" id="txtUpdateBarangay" name="txtUpdateBarangay" placeholder="Barangay Number">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtUpdateContactNum">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtUpdateContactNum" name="txtUpdateContactNum" placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="txtUpdateEmail">Email Address</label>
                <input type="text" class="form-control" id="txtUpdateEmail" name="txtUpdateEmail" placeholder="Email Address"
                  aria-describedby="helpEmail">
                <div id="helpEmail" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Patient</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal View -->
<div class="modal fade" id="patientViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Update Patient</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- Modal Personal Information -->
      <div class="modal-body">
        <form id="updatePatient" class="form-group" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
            <input type="hidden" name="hdnViewPatientID" id="hdnViewPatientID" />
            <input type="hidden" name="hdnViewPersonID" id="hdnViewPersonID" />
            <input type="hidden" name="hdnViewPersonalInfoID" id="hdnViewPersonalInfoID" />
            <input type="hidden" name="hdnViewContactInfoID" id="hdnViewContactInfoID" />
              <label for="txtViewPatientNumber">Patient Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHPID -</span>
                <input type="text" class="form-control" id="txtViewPatientNumber" name="txtViewPatientNumber" placeholder="Patient Number" disabled>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtViewFirstName">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewFirstName" name="txtViewFirstName" placeholder="First Name" disabled>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtViewMiddleName">Middle Name</label>
                <input type="text" class="form-control" id="txtViewMiddleName" name="txtViewMiddleName" placeholder="Middle Name"
                  aria-describedby="helpMiddle" disabled>
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="txtViewLastName">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewLastName" name="txtViewLastName" placeholder="Last Name" disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewBirthDate">Birthdate<span class="required">*</span></label>
                <input type="date" class="form-control" id="txtViewBirthDate" name="txtViewBirthDate" placeholder="Birthdate" disabled>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewSex">Sex</label>
                <select class="form-select" id="txtViewSex" name="txtViewSex" aria-label="Sex" disabled>
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="txtViewBloodType">Blood Type</label>
                <select class="form-select" id="txtViewBloodType" name="txtViewBloodType" aria-label="Blood Type" disabled>
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
              <label for="txtViewHeight">Height<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="txtViewHeight" name="txtViewHeight" placeholder="Height in centimeters"
                  aria-describedby="helpCm" disabled>
                <span class="input-group-text" id="helpCm">cm.</span>
              </div>
            </div>
            <div class="col-6">
              <label for="txtViewWeight">Weight<span class="required">*</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="txtViewWeight" name="txtViewWeight" placeholder="Weight in pounds"
                  aria-describedby="basic-addon3" disabled>
                <span class="input-group-text" id="basic-addon3">lbs.</span>
              </div>
            </div>

          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewCitizenship">Citizenship<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewCitizenship" name="txtViewCitizenship" placeholder="Citizenship" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewMaritalStatus">Marital Status</label>
                <select class="form-select" id="txtViewMaritalStatus"  name="txtViewMaritalStatus" aria-label="Marital Status" disabled>
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
                <label for="txtViewSSSNum">SSS Number</label>
                <input type="text" class="form-control" id="txtViewSSSNum" name="txtViewSSSNum" placeholder="SSS Number"
                  aria-describedby="helpSSS" disabled>
                <div id="helpSSS" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewPhilHealthNum">PhilHealth Number</label>
                <input type="text" class="form-control" id="txtViewPhilHealthNum" name="txtViewPhilHealthNum" placeholder="PhilHealth Number"
                  aria-describedby="helpPhil" disabled>
                <div id="helpPhil" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for="txtViewDiagnoses">Diagnoses<span class="required">*</span></label>
                <textarea class="form-control" id="txtViewDiagnoses" name="txtViewDiagnoses" rows="2" placeholder="Diagnoses" disabled></textarea>
                <div id="help" class="form-text ms-2">Multiple inputs are accepted.</div>
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewPhysician">Physician<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewPhysician" name="txtViewPhysician" placeholder="Physician" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewNextAppointment">Next Appointment<span class="required"></span></label>
                <input type="datetime-local" class="form-control" id="txtViewNextAppointment" name="txtViewNextAppointment" placeholder="Next Appointment" disabled>
              </div>
            </div>
          </div>

          <!-- Modal Contact Information -->

          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-group">
              <label for="txtViewAddress">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></span></label>
              <input type="text" class="form-control" id="txtViewAddress" name="txtViewAddress" placeholder="Address" disabled>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewProvince">Province<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewProvince" name="txtViewProvince" placeholder="Province" disabled>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewZipCode">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewZipCode" name="txtViewZipCode" placeholder="Zip Code" disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewCity">City<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewCity" name="txtViewCity" placeholder="City" disabled>
              </div>
            </div>
            <div class="col-6">
              <label for="txtViewBarangay">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="txtViewBarangay" name="txtViewBarangay" placeholder="Barangay Number" disabled>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="txtViewContactNum">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" id="txtViewContactNum" name="txtViewContactNum" placeholder="Contact Number" disabled>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="txtViewEmail">Email Address</label>
                <input type="text" class="form-control" id="txtViewEmail" name="txtViewEmail" placeholder="Email Address"
                  aria-describedby="helpEmail" disabled>
                <div id="helpEmail" class="form-text ms-2">Leave blank if none.</div>
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

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="hdnPatientID" id="hdnPatientID" />
        <input type="hidden" name="hdnPersonID" id="hdnPersonID" />
        <input type="hidden" name="hdnPersonalInfoID" id="hdnPersonalInfoID" />
        <input type="hidden" name="hdnContactInfoID" id="hdnContactInfoID" />
        <p>Do you want to delete the selected patient?</p>
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
      $('#patientTable').DataTable();
    
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
    alertify.success('Patient Updated');

    }

    if (window.localStorage.getItem('show_popup_add') == 'true') {
      alertify.success('Patient Added');

    }


   
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

//Delete
  $('body').on('click', '.btnDelete', function () {
    var patientID = $(this).attr('data-id');
    var personID = $(this).attr('data-id2');
    var personalInfoID = $(this).attr('data-id3');
    var contactInformationID = $(this).attr('data-id4');
    $('#deleteModal #hdnPatientID').val(patientID);
    $('#deleteModal #hdnPersonID').val(personID);
    $('#deleteModal #hdnPersonalInfoID').val(personalInfoID);
    $('#deleteModal #hdnContactInfoID').val(contactInformationID);
  });

  $('body').on('click', '.btnConfirmDelete', function () {
    var patientID = $("#hdnPatientID").val();
    var personID = $("#hdnPersonID").val();
    var personalInfoID = $("#hdnPersonalInfoID").val();
    var contactInformationID = $("#hdnContactInfoID").val();
    $.ajax({
      url: '/getPatientID',
      type: 'POST',
      data: { personalInfoID: personalInfoID, contactInformationID: contactInformationID },
      success: function (data) {
        console.log(data);
        $.get('delete-patient/' + personID, function (data) {
          $('#patientTable tbody #' + patientID).remove();
        })
        alertify.success('Patient Deleted');
      }
    });
    $('#deleteModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
  });

  
  //Update
  $('body').on('click', '.btnUpdate', function () {
    var patientID = $(this).attr('data-id');
    var personID = $(this).attr('data-id2');
    var personalInfoID = $(this).attr('data-id3');
    var contactInformationID = $(this).attr('data-id4');
    console.log(patientID, personID, personalInfoID, contactInformationID);
    $('#patientUpdateModal #hdnUpdatePatientID').val(patientID);
    $('#patientUpdateModal #hdnUpdatePersonID').val(personID);
    $('#patientUpdateModal #hdnUpdatePersonalInfoID').val(personalInfoID);
    $('#patientUpdateModal #hdnUpdateContactInfoID').val(contactInformationID);
    $.ajax({
      url: 'fetch-patient/' + patientID,
      type: "GET",
      dataType: 'json',
      success: function (res) {
        let result = res.find(patient => patient.patientID == patientID);
        console.log(res);
        $('#patientUpdateModal').modal('show');
        $('#patientUpdateModal #txtUpdatePatientNumber').val(result.patientNumber);
        $('#patientUpdateModal #txtUpdateFirstName').val(result.firstName);
        $('#patientUpdateModal #txtUpdateMiddleName').val(result.middleName);
        $('#patientUpdateModal #txtUpdateLastName').val(result.lastName);
        $('#patientUpdateModal #txtUpdateBirthDate').val(result.birthDate);
        $('#patientUpdateModal #txtUpdateSex').val(result.sex);
        $('#patientUpdateModal #txtUpdateBloodType').val(result.bloodType);
        $('#patientUpdateModal #txtUpdateHeight').val(result.height);
        $('#patientUpdateModal #txtUpdateWeight').val(result.weight);
        $('#patientUpdateModal #txtUpdateCitizenship').val(result.citizenship);
        $('#patientUpdateModal #txtUpdateMaritalStatus').val(result.maritalStatus);
        $('#patientUpdateModal #txtUpdateSSSNum').val(result.sssNumber);
        $('#patientUpdateModal #txtUpdatePhilHealthNum').val(result.philHealthNumber);
        $('#patientUpdateModal #txtUpdateDiagnoses').val(result.diagnoses);
        $('#patientUpdateModal #txtUpdatePhysician').val(result.physician);
        $('#patientUpdateModal #txtUpdateNextAppointment').val(result.nextConsultation);
        $('#patientUpdateModal #txtUpdateAddress').val(result.address);
        $('#patientUpdateModal #txtUpdateProvince').val(result.province);
        $('#patientUpdateModal #txtUpdateZipCode').val(result.zipcode);
        $('#patientUpdateModal #txtUpdateCity').val(result.city);
        $('#patientUpdateModal #txtUpdateBarangay').val(result.barangay);
        $('#patientUpdateModal #txtUpdateContactNum').val(result.cellphoneNumber);
        $('#patientUpdateModal #txtUpdateEmail').val(result.emailAddress);
      },
      error: function (data) {
      }
    });
  });

  $("#updatePatient").validate({
    rules: {
      txtUpdatePatientNumber: {
        required: true,
        noSpace: true
      },
      txtUpdateCity: {
        required: true,
        noSpace: true
      },
      txtUpdateFirstName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtUpdateMiddleName: {
        lettersonly: true,
      },
      txtUpdateLastName: {
        required: true,
        lettersonly: true,
        noSpace: true
      },
      txtUpdateBirthDate: {
        required: true
      },
      txtUpdateSex: {
        required: true
      },
      txtUpdateBloodType: {
        required: true
      },
      txtUpdateHeight: {
        required: true,
        digits: true
      },
      txtUpdateWeight: {
        required: true,
        digits: true
      },
      txtUpdateCitizenship: {
        required: true
      },
      txtUpdateMaritalStatus: {
        required: true
      },
      txtUpdateSSSNum: {
        required: true,
        digits: true,
        rangelength: [9, 12]
      },
      txtUpdatePhilHealthNum: {
        required: true,
        card: true,
        rangelength: [12, 14]
      },
      txtUpdateAddress: {
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
      txtUpdateContactNum: {
        required: true,
        digits: true,
        rangelength: [7, 11]
      },
      txtUpdateEmail: {
        required: true,
        email: true
      },
      txtUpdatePhysician: {
        required: true,
        lettersonly:true,
      },
      txtUpdateNextAppointment: {
        required: true,
      },
      txtUpdateDiagnoses: {
        required: true,
      },
    },
    messages: {
    },
    submitHandler: function (form) {
      var patientID = $("#hdnUpdatePatientID").val();
      var personID = $("#hdnUpdatePersonID").val();
      var personalInfoID = $("#hdnUpdatePersonalInfoID").val();
      var contactInformationID = $("#hdnUpdateContactInfoID").val();
      var txtNumber = $("#txtUpdatePatientNumber").val();
      var txtFirstName = $("#txtUpdateFirstName").val();
      var txtMiddleName = $("#txtUpdateMiddleName").val();
      var txtLastName = $("#txtUpdateLastName").val();
      var txtBirthDate = $("#txtUpdateBirthDate").val();
      var txtSex = $("#txtUpdateSex").val();
      var txtBloodType = $("#txtUpdateBloodType").val();
      var txtWeight = $("#txtUpdateWeight").val();
      var txtHeight = $("#txtUpdateHeight").val();
      var txtCitizenship = $("#txtUpdateCitizenship").val();
      var txtMaritalStatus = $("#txtUpdateMaritalStatus").val();
      var txtSSS = $("#txtUpdateSSSNum").val();
      var txtPhilNum = $("#txtUpdatePhilHealthNum").val();
      var txtDiagnoses = $("#txtUpdateDiagnoses").val();
      var txtUpdatePhysician = $("#txtUpdatePhysician").val();
      var txtNextPatientAppointment = $("#txtUpdateNextAppointment").val();
      var txtAddress = $("#txtUpdateAddress").val();
      var txtProvince = $("#txtUpdateProvince").val();
      var txtCity = $("#txtUpdateCity").val();
      var txtBarangay = $("#txtUpdateBarangay").val();
      var txtUpdatedContactNum = $("#txtUpdateContactNum").val();
      var txtUpdatedEmail = $("#txtUpdateEmail").val();
      var txtZipCode = $("#txtUpdateZipCode").val();
      console.log(patientID, personID, personalInfoID, contactInformationID);
      $.ajax({
        url: '/update-patient',
        type: 'POST',
        data: {
          patientID: patientID, personID: personID, personalInfoID: personalInfoID, contactInformationID: contactInformationID, txtNumber, txtFirstName, txtMiddleName, txtLastName, txtBirthDate,
          txtSex, txtBloodType, txtWeight, txtHeight, txtCitizenship, txtMaritalStatus, txtSSS, txtPhilNum, txtDiagnoses, txtUpdatePhysician, txtNextPatientAppointment, 
          txtAddress, txtProvince, txtCity, txtBarangay, txtUpdatedContactNum, txtUpdatedEmail, txtZipCode
        },
        success: function (data) {
          console.log(data);
          $('#patientUpdateModal').modal('hide');
          window.localStorage.setItem('show_popup_update', 'true');
          window.location.reload();
        }
      });

    }

  });


  // View
  $('body').on('click', '.btnView', function () {
    var patientID = $(this).attr('data-id');
    var personID = $(this).attr('data-id2');
    var personalInfoID = $(this).attr('data-id3');
    var contactInformationID = $(this).attr('data-id4');
    console.log(patientID, personID, personalInfoID, contactInformationID);
    $('#patientViewModal #hdnViewPatientID').val(patientID);
    $('#patientViewModal #hdnViewPersonID').val(personID);
    $('#patientViewModal #hdnViewPersonalInfoID').val(personalInfoID);
    $('#patientViewModal #hdnViewContactInfoID').val(contactInformationID);
    $.ajax({
      url: 'view-patient/' + patientID,
      type: "GET",
      dataType: 'json',
      success: function (res) {
        let result = res.find(patient => patient.patientID == patientID);
        console.log(res);
        $('#patientViewModal').modal('show');
        $('#patientViewModal #txtViewPatientNumber').val(result.patientNumber);
        $('#patientViewModal #txtViewFirstName').val(result.firstName);
        $('#patientViewModal #txtViewMiddleName').val(result.middleName);
        $('#patientViewModal #txtViewLastName').val(result.lastName);
        $('#patientViewModal #txtViewBirthDate').val(result.birthDate);
        $('#patientViewModal #txtViewSex').val(result.sex);
        $('#patientViewModal #txtViewBloodType').val(result.bloodType);
        $('#patientViewModal #txtViewHeight').val(result.height);
        $('#patientViewModal #txtViewWeight').val(result.weight);
        $('#patientViewModal #txtViewCitizenship').val(result.citizenship);
        $('#patientViewModal #txtViewMaritalStatus').val(result.maritalStatus);
        $('#patientViewModal #txtViewSSSNum').val(result.sssNumber);
        $('#patientViewModal #txtViewPhilHealthNum').val(result.philHealthNumber);
        $('#patientViewModal #txtViewDiagnoses').val(result.diagnoses);
        $('#patientViewModal #txtViewPhysician').val(result.physician);
        $('#patientViewModal #txtViewNextAppointment').val(result.nextConsultation);
        $('#patientViewModal #txtViewAddress').val(result.address);
        $('#patientViewModal #txtViewProvince').val(result.province);
        $('#patientViewModal #txtViewZipCode').val(result.zipcode);
        $('#patientViewModal #txtViewCity').val(result.city);
        $('#patientViewModal #txtViewBarangay').val(result.barangay);
        $('#patientViewModal #txtViewContactNum').val(result.cellphoneNumber);
        $('#patientViewModal #txtViewEmail').val(result.emailAddress);
      },
      error: function (data) {
      }
    });
  });



  </script>


  <?php include("shared/bottom.php"); ?>