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
    <?php require '../common/DeliverHeader.php'; ?>

    <!-- Register -->
    <div class="container-fluid Register-wrapper py-5">
      <div class="row">
      <div class="col-md-5">

      </div>
      <div class="col-md-7">
        <div class="container bg-light py-3 rounded">
          <center>
            <h2>Update</h2>
          </center>
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputName" class="form-label">Name</label>
              <input type="textarea" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputEmployeeId" class="form-label">Email ID</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
              <label for="inputDepartment" class="form-label">Mobile No.</label>
              <input type="textarea" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputMobile" class="form-label">Address</label>
              <input type="number" class="form-control" id="inputEmail4">
            </div>
            <!--- Password Details -->
            <div class="col-6">
              <label for="inputPassword" class="form-label">Enter Password</label>
              <input type="password" class="form-control" id="inputAddress2">
            </div>
            <div class="col-6">
              <label for="inputRepassword" class="form-label">Re Enter Password</label>
              <input type="password" class="form-control" id="inputAddress2">
            </div>
            <div class="col-6">
              <label for="inputFuturePlans" class="form-label">Password Recovery Question 1</label>
              <label class="visually-hidden" for="RecoveryQuestion1">Preference</label>
              <select class="form-select" id="autoSizingSelect">
                <option selected>Choose...</option>
                <option value="1">What is the name of your first pet?</option>
                <option value="2">Which is your favourite car?</option>
                <option value="3">What was your childhood nickname?</option>
                <option value="4">What is the name of your favorite childhood friend?</option>
                <option value="5">What school did you attend for sixth grade?</option>
              </select>
              <input type="text" class="form-control" id="inputAddress2">
            </div>
            <div class="col-6">
              <label for="inputFuturePlans" class="form-label">Password Recovery Question 2</label>
              <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
              <select class="form-select" id="autoSizingSelect">
                <option selected>Choose...</option>
                <option value="1">What is the name of your first pet?</option>
                <option value="2">Which is your favourite car?</option>
                <option value="3">What was your childhood nickname?</option>
                <option value="4">What is the name of your favorite childhood friend?</option>
                <option value="5">What school did you attend for sixth grade?</option>
              </select>
              <input type="text" class="form-control" id="inputAddress2">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
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
