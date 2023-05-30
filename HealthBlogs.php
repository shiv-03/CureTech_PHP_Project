<?php

include_once 'includes/dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $Name = $_POST['Name'];
  $Blog = $_POST['Article'];

  $sql = "INSERT INTO `healthblogs` (`Name`, `Article`) VALUES ('$Name', '$Blog');";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $insert = true;
  } else {
    echo "Something went wrong " . mysqli_connect_error();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealthBlogs | CureTech</title>
  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include 'header.php'; ?>

  <div class="banner_w3lspvt position-relative">
    <div class="container">
      <div class="d-md-flex">
        <div class="w3ls_banner_txt">
          <h3 class="w3ls_pvt-title">Are blogs <br><span>Healthy?</span></h3>
          <p class="text-sty-banner"><b>Definitely Yes !</b> because sharing your thoughts can help someone else life .Health blogs offer readers a platform to source answers, knowledge, opinion, support and/or guidance while managing their experience. They have brought together users of similar interest closer to finding whatever health information they seek. So, why wait start writing your healthy thoughts here and get accomplished by the Team CURE TECH .</p>
        </div>
        <div class="banner-img">
          <img src="ProjectPhotos/1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <div>

    <!-- form section -->
    <div class="container">

      <form action="/crud/HealthBlogs.php" method="post">
        <div class="form-group">
          <h2 class="">Healthy thoughts are Welcome!!</h2>
          <label for="exampleFormControlInput1" class="my-3">Your Healthy Name</label>
          <input type="Name" class="Name form-control " id="exampleFormControlInput1" placeholder="Enter your name here...">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="my-3">Health Pad</label>
          <textarea class="Blog form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your article here...."> </textarea>
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
      </form>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>