<?php
	session_start();
	require '../dbConfig/config.php';
?>
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
    <?php require '../common/LogedOutHeader.php'; ?>

    <!-- Register -->
    <div class="container-fluid Register-wrapper py-5">
      <div class="row">
      <div class="col-md-5">

      </div>
      <div class="col-md-7">
        <div class="container bg-light py-3 rounded">
          <center>
            <h2>Sign Up</h2>
          </center>
          <form class="row g-3" action="UserRegister.php" method="post">
            <div class="col-md-6">
              <label for="inputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="Name">
            </div>
            <div class="col-md-6">
              <label for="inputEmployeeId" class="form-label">Email ID</label>
              <input type="email" class="form-control" id="inputPassword4" name="Email">
            </div>
            <div class="col-md-6">
              <label for="inputDepartment" class="form-label">Mobile No.</label>
              <input type="number" class="form-control" id="inputEmail4" name="Mobile">
            </div>
            <div class="col-md-6">
              <label for="inputMobile" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputEmail4" name="Address">
            </div>
            <!--- Password Details -->
            <div class="col-6">
              <label for="inputPassword" class="form-label">Enter Password</label>
              <input type="password" class="form-control" id="inputAddress2" name="Pass1">
            </div>
            <div class="col-6">
              <label for="inputRepassword" class="form-label">Re Enter Password</label>
              <input type="password" class="form-control" id="inputAddress2" name="Pass2">
            </div>
            <div class="col-6">
              <label for="inputFuturePlans" class="form-label">Password Recovery Question 1</label>
              <label class="visually-hidden" for="RecoveryQuestion1">Preference</label>
              <select class="form-select" id="autoSizingSelect" name="PQ1">
                <option selected>Choose...</option>
                <option value="1">What is the name of your first pet?</option>
                <option value="2">Which is your favourite car?</option>
                <option value="3">What was your childhood nickname?</option>
                <option value="4">What is the name of your favorite childhood friend?</option>
                <option value="5">What school did you attend for sixth grade?</option>
              </select>
              <input type="text" class="form-control" id="inputAddress2" name="PA1">
            </div>
            <div class="col-6">
              <label for="inputFuturePlans" class="form-label">Password Recovery Question 2</label>
              <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
              <select class="form-select" id="autoSizingSelect" name="PQ2">
                <option selected>Choose...</option>
                <option value="1">What is the name of your first pet?</option>
                <option value="2">Which is your favourite car?</option>
                <option value="3">What was your childhood nickname?</option>
                <option value="4">What is the name of your favorite childhood friend?</option>
                <option value="5">What school did you attend for sixth grade?</option>
              </select>
              <input type="text" class="form-control" id="inputAddress2" name="PA2">
            </div>
						<p>Already have account ? <a href="UserLogin.php">Login Here</a></p>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" name="btn-submit">Sign up</button>
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
<?php
if(isset($_POST['btn-submit']))
{
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Mobile = $_POST['Mobile'];
  $Address = $_POST['Address'];
  $Pass1 = $_POST['Pass1'];
  $Pass2 = $_POST['Pass2'];
  $PQ1 = $_POST['PQ1'];
  $PA1 = $_POST['PA1'];
  $PQ2 = $_POST['PQ2'];
  $PA2 = $_POST['PA2'];

  $query = "select * from user where Email ='$Email'";
  $query_Solution = mysqli_query($con,$query);

  if ($Pass1 == $Pass2) {
  try{
  if(mysqli_num_rows($query_Solution)>0){
    echo'<script type="text/javascript"> alert("User already exist")</script>';
  }
  else
  {
    $query = "insert into user values('','$Name','$Email','$Mobile','$Address','$Pass1','$PQ1','$PA1','$PQ2','$PA2')";
    $query_Solution = mysqli_query($con, $query);

    if($query_Solution)
    {
      echo'<script type="text/javascript"> alert("User Registered")</script>';
    }
    else{
      echo'<script type="text/javascript"> alert("Error Occured")</script>';
    }
  }
  }
  catch(Exception $e)
  {
    echo 'Message: ' .$e->getMessage();
  }
}
else {
  echo '<script type="text/javascript"> alert("Both Password should be same")</script>';
}
}
