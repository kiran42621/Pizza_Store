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
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Header-->
    <?php require '../common/UserHeader.php'; ?>

    <?php
      $query = "SELECT * FROM cart as a, food as b where a.ItemID = b.ID";
      $query_Solution = mysqli_query($con, $query);

      if (mysqli_num_rows($query_Solution) > 0) {
        while ($rows = mysqli_fetch_array($query_Solution)) {
          ?>

    <!--Cart-->
    <div class="container pt-2 cart">
      <div class="col border">
        <div class="row">
          <div class="col-md-4 m-2">
            <img src="../images/Food_Images/<?php echo $rows['Image'] ?>" alt="" style="width:20rem;height:15rem">
          </div>
          <div class="col-md-7">
            <div class="row">
              <h3><?php echo $rows['ItemName'] ?></h3>
            </div>
            <div class="row">
              <p><?php echo $rows['Description'] ?>.</p>
            </div>
            <div class="row">
              <div class="col-4">
                <h4><strong><?php echo $rows['Price'] ?> </strong><i class="fas fa-rupee-sign"></i></h4>
              </div>
              <div class="col-8 d-flex flex-row-reverse">
                  <button class="btn btn-success" type="button" name="button">Checkout</button>
                  <input class="border mt-1 me-3" type="text" name="" value="" placeholder="0" style="width:2rem;height:2rem">
                  <button class="btn" type="button" name="button"><i class="fas fa-trash-alt"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <?php
    }
    }
    ?>

    <!--Footer-->
    <?php require '../common/footer.php'; ?>
    <!--JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
