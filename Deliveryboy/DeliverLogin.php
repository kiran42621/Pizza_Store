<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Bootstrap Libraries-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Fontawesome-->
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css?v=1.1">
  </head>
  <body class="Register-body">
    <!--Header-->
    <?php require '../common/UserHeader.php'; ?>

    <!-- Register -->
    <div class="container-fluid Register-wrapper py-5">
      <div class="row">
      <div class="col-md-5">

      </div>
      <div class="col-md-7">
        <div class="container bg-light py-3 rounded">
          <center>
            <h2>Login</h2>
          </center>
          <form class="g-3">
            <div class="col mt-2">
              <label class="form-label" for="">Email</label>
              <input class="form-control"type="email" name="" value="">
            </div>
            <div class="col mt-2">
              <label class="form-label" for="">Password</label>
              <input class="form-control"type="password" name="" value="">
            </div>
            <p>Don't have account ? <a href="#">Signup Here</a></p>
            <p>Forgot Password ? <a href="#">Click Here</a></p>
            <button class="btn btn-primary" type="button" name="button">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!--Footer-->
    <?php require '../common/footer.php'; ?>
    <!--JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
