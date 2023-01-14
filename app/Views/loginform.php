<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="login-style.css" />
    <title>Document</title>
  </head>

  <body>
    <div class="login">
      <div class="container-head container-fluid px-2">
        <h1 class="text-center">Bautista Hospital Contact Tracing System</h1>
      </div>

      <form class="needs-validation">
        <div class="form-group was-validated mb-4">
          <label class="form-label" for="username">Username</label>
          <input
            class="form-control was-validated"
            type="text"
            id="username"
            required
          />
          <div class="invalid-feedback">Please enter username</div>
        </div>

        <div class="form-group was-validated mb-4">
          <label class="form-label" for="password">Password</label>
          <input
            class="form-control was-validated"
            type="password"
            id="password"
            required
          />
          <div class="invalid-feedback">Please enter password</div>
        </div>

        <div class="form-group form-check mb-2">
          <input class="form-check-input" type="checkbox" id="remember" />
          <label class="form-check-label" for="checkbox">Remember Me</label>
        </div>

        <div class="login-footer">
          <input class="btn btn-success w-100" type="submit" value="LOGIN" />
        </div>
      </form>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>
