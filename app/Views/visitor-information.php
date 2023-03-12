<?php include("shared/top.php"); ?>

<div class="main-container d-flex">
  <?php include("shared/sidenav.php"); ?>
  <div class="content">
    <?php include("shared/header.php"); ?>
    <!-- start coding below this comment -->
    <div class="rounded m-2 p-2">
      <div>
        <div class="bg-white rounded m-4 p-4">
          <div class="pb-3 mb-2">
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#visitorModal">
              <i class="fa-solid fa-person-circle-plus me-2"></i></i>Add New Visitor</button>
          </div>
          <div class="border p-2 rounded">
            <table id="visitorTable" class="display" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center">Visitor ID</th>
                  <th class="text-center">Visitor Name</th>
                  <th class="text-center">Building Location</th>
                  <th class="text-center">Place of Visit</th>
                  <th class="text-center">Time In</th>
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

<!-- Modal Create -->

<div class="modal fade" id="visitorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">Create New Visitor</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Create Personal Information -->

      <div class="modal-body">
        <form action="<?php echo base_url('add-location'); ?>" class="form-group" method="post">
          <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <label for=" floatingInput">Visitor Number<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">BHVID -</span>
                <input type="text" class="form-control" id="floatingInput" placeholder=" Visitor Number">
              </div>
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">First Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Middle Name</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name"
                  aria-describedby="helpMiddle">
                <div id="helpMiddle" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for=" floatingInput">Last Name<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Age<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Age">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="floatingSelectGrid">Sex</label>
                <select class="form-select" id="floatingSelectGrid" aria-label="Sex">
                  <option selected value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Body Temperature<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Body Temperature">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Building Location<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Building Location">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Place of Visit<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Place of Visit"
                  aria-describedby="helpPlace">
                <div id="helpPlace" class="form-text ms-2">e.g. Department, Room No.</div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for=" floatingInput">Time In<span class="required">*</span></label>
                <input type="datetime-local" class="form-control" id="floatingInput" placeholder="Time In">
              </div>
            </div>
          </div>


          <!-- Modal Create Contact Information -->
          <h5 class="title mt-5 mb-2" id="exampleModalLabel">Contact Information</h5>
          <div class="row g-3 mb-3">
            <div class="form-group">
              <label for="floatingInput">Address <span class="text-muted">(house number and street
                  name)<span class="required">*</span></span></label>
              <input type="text" class="form-control" id="floatingInput" placeholder="Address">
            </div>
          </div>
          <div class="row gx-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Province<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Province">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">Zip Code<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Zip Code">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for=" floatingInput">City<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="City">
              </div>
            </div>
            <div class="col-6">
              <label for=" floatingInput">Barangay<span class="required">*</span></label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Brgy.</span>
                <input type="text" class="form-control" id="floatingInput" placeholder="Barangay Number">
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-6">
              <div class="form-group">
                <label for="floatingInput">Contact Number<span class="required">*</span></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Contact Number">
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="form-group">
                <label for="floatingInput">Email Address</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Email Address"
                  aria-describedby="helpEmail">
                <div id="helpEmail" class="form-text ms-2">Leave blank if none.</div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#visitorHealthModal">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal Health Declaration Form -->

  <!-- <div class="modal fade" id="visitorHealthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title modal-title-head" id="exampleModalLabel">Health Declaration Form</h5>
          <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->

  <!-- Body Modal Health Declaration Form -->
  <!-- <div class="modal-body">
          <form action="<?php echo base_url(''); ?>" class="form-group" method="post">
            <h5 class="title mb-2" id="exampleModalLabel">Personal Information</h5>
            <div class="row gx-3 mb-4">
              <div class="col-6">
                <label for=" floatingInput">Visitor Number<span class="required">*</span></label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">BHVID -</span>
                  <input type="text" class="form-control" id="floatingInput" placeholder=" Visitor Number">
                </div>
              </div>
            </div> -->

  <!-- Health Modal Footer -->
  <!-- <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-target="#visitorModal">Back</button>
              <button type="submit" class="btn btn-primary">Add Visitor</button>
            </div>
          </form>
        </div>
      </div>
    </div> -->


  <script defer type="text/javascript">
    $(document).ready(function () {
      $('#visitorTable').DataTable();
    });
  </script>

  <?php include("shared/bottom.php"); ?>