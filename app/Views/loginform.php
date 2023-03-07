<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="login-style.css" />
  <title>
    <?php echo $pageTitle ?>
  </title>
</head>

<body>
  <div class="container">
    <div class="login-card">
      <div class="row">
        <div class="col-4 container-fluid card-left">
          <div class="card-left-header pt-2">
            <h1 class="text-center sign-up fw-bold mt-5">Login</h1>
          </div>
          <div class="card-left-body">
            <form class="mx-4">
              <div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" class="form-control mb-3" id="username" />
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control mb-3" id="pass" />
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkboxRemember" />
                <label class="form-check-label fw-bold" for="checkboxRemember">Remember Me</label>
              </div>
            </form>
          </div>
          <div class="card-left-footer my-5 container-fluid">
            <button type="submit" class="btn-login fw-bold rounded fs-6 mt-4">
              LOGIN
            </button>
          </div>
        </div>
        <div class="col container p-0 card-right">
          <div class="container-fluid p-0 right-top align-items-end justify-content-center d-flex">
            <h1 class="logo-bh mb-0">
              B<img class="cross" src="/cross-logo.png" />H
            </h1>
          </div>
          <div class="container-fluid p-0 right-bottom">
            <div class="container-fluid px-0 py-2 title text-center">
              <h2 class="title-h2 fw-bold m-0">BAUTISTA HOSPITAL</h2>
            </div>
            <div class="container-fluid px-0 py-2 title-date text-center">
              <p class="p-title-date mb-0">&bull; SINCE 1940 &bull;</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>