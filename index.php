<?php require 'dbConfig/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Bootstrap Libraries-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Fontawesome-->
    <link href="css/fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header -->
    <?php require 'Common/LogedOutHeader.php'; ?>

    <!-- Caurousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Carousel1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Carousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Carousel3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<hr>

    <!-- Paragraph -->
    <p class="text-black fw-bold fst-itallic p-1">  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <hr>

    <!-- Example Pizza -->
    <div class="container-fluid pb-5">
    <div class="row align-items-center">

<?php $query = "SELECT * FROM food";
      $query_Solution = mysqli_query($con,$query);

      if (mysqli_num_rows($query_Solution) > 0) {
        while ($row = mysqli_fetch_array($query_Solution)) { ?>

      <div class="col-4">
        <center>
        <div class="card" style="width: 18rem;">
  <img src="images/Food_Images/<?php echo $row['Image']; ?>" class="card-img-top" alt="Image" style="height:16rem">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['Name']; ?></h5>
    <p class="card-text"><?php echo $row['Description']; ?>.</p>
    <p class="card-text"><strong><?php echo $row['Price']; ?>/-</strong>.</p>
    <a href="#" onclick="ren_login()" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</center>
      </div>
    <?php        }
          }
    ?>
    </div>
</div>
<!-- Footer -->
<?php require 'Common/footer.php'; ?>
    <!--JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>

<script type="text/javascript">
  function ren_login(){
    alert("You have to login first");
    window.location.href = "User/UserLogin.php";
  }
</script>
