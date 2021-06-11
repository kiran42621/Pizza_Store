<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Bootstrap Libraries-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Fontawesome-->
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
    <!--Header-->
    <?php require '../common/UserHeader.php'; ?>

    <!--My Orders-->
    <div class="container-fluid bg-light pb-5">
      <center><h3>My Orders</h3></center>
      <table class="table table-stripped py-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Order ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Order Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Margherita</td>
            <td>Image</td>
            <td>Veg</td>
            <td>350</td>
            <td>1</td>
            <td>350</td>
            </tr>
        </tbody>
      </table>
    </div>

    <!--Footer-->
    <?php require '../common/footer.php'; ?>
    <!--JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
