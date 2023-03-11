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
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#smsModal">
              <i class="fa-solid fa-comment-sms me-2"></i>Send SMS</button>
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#emailModal">
              <i class="fa-solid fa-envelope me-2"></i>Send Email</button>
          </div>
          <div class="border p-2 rounded">
            <table id="composeMessageTable" class="display" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center">Message ID</th>
                  <th class="text-center">Recepient Name</th>
                  <th class="text-center">Contact Details</th>
                  <th class="text-center">Sender</th>
                  <th class="text-center">Time Sent</th>
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

<!-- SMS Modal -->

<div class="modal fade" id="smsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">New SMS</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recepient Number:</label>
            <input type="text" class="form-control" id="smsRecipient" placeholder="Enter Recipient Number">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="smsText" rows="6" placeholder="Enter Message Here"></textarea>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Email Modal -->

<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-title-head" id="exampleModalLabel">New Email</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient Email:</label>
            <input type="text" class="form-control" id="emailRecipient" placeholder="Enter Recipient Email">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="emailText" rows="6" placeholder="Enter Message Here"></textarea>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send Email</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('#composeMessageTable').DataTable();
  });

</script>
<?php include("shared/bottom.php"); ?>