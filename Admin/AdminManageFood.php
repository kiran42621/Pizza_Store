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
    <!--Datatable-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <!--Header-->
    <?php require '../common/AdminHeader.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
          <div class="container p-5">
            <form class="" action="AdminManageFood.php" method="post" enctype="multipart/form-data">
              <center>
                <h3>Add Food</h3>
              </center>
              <div class="row my-2">
                <label for="" class="form-label">Enter Name </label>
                <input type="text" class="form-control" name="Name" value="">
              </div>
              <div class="row my-2">
								<div class="col">
                <label for="" class="form-label" name="">Select Type </label>
                <select class="form-control" name="Type">
                  <option value="Veg">Veg</option>
                  <option value="Non-Veg">Non-Veg</option>
                  <option value="Beverages">Beverages</option>
                  <option value="Deserts">Deserts</option>
                </select>
								</div>
								<div class="col">
									<label for="" class="form-label"></label>
									<input type="file" name="Image" value="">
								</div>
              </div>
              <div class="row my-2">
                <label for="" class="form-label">Enter Description </label>
                <input type="textarea" rows="3" class="form-control" name="Description" value="">
              </div>
              <div class="row my-2">
                <label for="" class="form-label">Enter Price </label>
                <input type="number" class="form-control" name="Price" value="">
              </div>
              <input type="submit" class="btn btn-primary my-2" name="btn-Add" value="Add">
            </form>
          </div>
        </div>
        <div class="col-md-1 ms-5 my-2" style="border-left: 3px solid #a9f1df;height: 500px;">

        </div>
        <div class="col-md ps-0" style="margin-left:-80px">
          <div class="container">
            <div class="container p-5">
              <form class="" action="index.html" method="post">
                <center>
                  <h3>Manage Food</h3>
                </center>
                <div class="row my-2">
                  <label for="" class="form-label">Select Food </label>
                  <?php
                  $query = "select * from Food";
                  $query_Solution = mysqli_query($con,$query); ?>
                  <select class="form-control" name="Foodselect">
                  <?php while($row = mysqli_fetch_array($query_Solution)){?>
                    <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
                <?php } ?>
                </select>
                </div>
                <div class="row my-2">
                  <label for="" class="form-label">Enter Price </label>
                  <input type="number" class="form-control" name="" value="">
                </div>
                <input type="submit" class="btn btn-danger my-2" name="btn-available" value="Make Unavailable">
                <input type="submit" class="btn btn-success my-2" name="btn-unavailable" value="Make Available">
                <input type="submit" class="btn btn-primary my-2" name="btn-chng-price" value="Change Price">
              </form>
            </div>
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
if(isset($_POST['btn-Add'])){
  $Name = $_POST['Name'];
  $Type = $_POST['Type'];
  $Description = $_POST['Description'];
  $Price = $_POST['Price'];
	$image_name = $_FILES['Image']['name'];
	$tmp_name = $_FILES['Image']['tmp_name'];
	$folder= "../images/Food_Images/$image_name";
	move_uploaded_file($tmp_name, "../images/Food_Images/$image_name");

  $query = "select * from Food where Name ='$Name'";
  $query_Solution = mysqli_query($con,$query);


  try{
  if(mysqli_num_rows($query_Solution)>0){
    echo'<script type="text/javascript"> alert("Food already exist try make it Available")</script>';
  }
  else
  {
    $query = "insert into Food values('','$Name','$Type','$Description','$Price','$image_name','Available')";
    $query_Solution = mysqli_query($con, $query);

    if($query_Solution)
    {
      echo'<script type="text/javascript"> alert("Food Added")</script>';
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
 ?>
