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
    <?php require '../common/UserHeader.php'; ?>
    <!-- Table -->
    <div class="container-fluid py-5">
			<form class="" action="UserHome.php" method="POST">
    <table id="myTable" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>

				<tbody>
        <?php
        $query = "select * from food";
        $query_Solution = mysqli_query($con, $query);
        if(mysqli_num_rows($query_Solution) > 0)
        {
            while($row = mysqli_fetch_array($query_Solution)){
         ?>
            <tr>
							<input type="hidden" name="hidden_id" value="<?php echo $row['ID'] ?>">
							<input type="hidden" name="hidden_name" value="<?php echo $row['Name'] ?>">
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Type']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Price']; ?></td>
								hello
                <!-- <td><button class="btn btn-sm btn-success" type="submit" name="btn-add" value="">Order</button></td> -->
								<td><button class="btn btn-primary" type="submit" name="button-login">Login</button></td>
            </tr>
          <?php
				}
			}
           ?>
			 </tbody>

        </table>
				</form>
</div>
<!--Footer-->
<?php require '../common/footer.php'; ?>
    <!--JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--DT Script-->
    <script type="text/javascript">
        $(document).ready( function () {
          $('#myTable').DataTable();
        } );
        </script>
  </body>
</html>
<?php
	if(isset($_POST['button-login'])) {
		$ID = $_POST['hidden_id'];
		$Name = $_POST['hidden_name'];
		$user_id = $_SESSION['user_id'];
		$username = $_SESSION['user'];
		$query = "Insert into cart values('','$username','$user_id','$ID','$Name','','','','Added')";
		$query_Solution = mysqli_query($con, $query);
		if ($query_Solution) {
			echo'<script type="text/javascript"> alert("Added to cart")</script>';
		}
		else {
			echo'<script type="text/javascript"> alert("Error occured")</script>';
		}
	}
 ?>
