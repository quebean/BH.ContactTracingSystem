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
                foreach ($locations as $row) {
                  ?>
                  <tr id="<?php echo $row['locationID']; ?>">
                    <td>
                      <?php echo $row['locationID']; ?>
                    </td>
                    <td>
                      <?php echo $row['locationName']; ?>
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

<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Location</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('add-location');?>" method="post">
          <div class="mb-3">
            <label for="formLocation" class="form-label">Location Name</label>
            <input type="text" class="form-control" id="formLocation" name="formLocation" aria-describedby="locationHelp">
            <div id="locationHelp" class="form-text">Input unique locations.</div>
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
    $('#locationsTable').DataTable();
  });
</script>

<?php include("shared/bottom.php"); ?>