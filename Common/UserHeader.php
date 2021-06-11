<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
<a class="navbar-brand" href="#">Pizza Store</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="../User/UserCart.php">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">My Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Completed Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Update Info</a>
    </li>
  </ul>
  <ul class="navbar-nav navbar-right ms-auto mb-2 mb-lg-0">
    <li>
      <p class="me-4">Hello <?php echo $_SESSION['user']; ?></p>
    </li>
    <li><button type="button" class="btn btn-danger" name="button">Logout</button></li>
  </ul>
</div>
</div>
</nav>
