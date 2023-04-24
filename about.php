<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .frames {
      border: 1px solid grey;
      border-radius: 5px;
      margin: 1rem;
      padding: 2rem 2rem;
      text-align: center;
    }

    .person {
      display: inline-block;
      padding: 1rem 1rem;
      vertical-align: middle
    }
   .shiv-card{
    box-shadow: 0 0 20px -5px #aaa;
   }

    .card:hover {
      transform: scale(1.2);
      border: 1px solid;
      box-shadow: 5px 10px 20px grey;
    }
  </style>
</head>

<body>
  <?php include 'header.php' ?>
  <h1 align="center">About Us</h1>
  <div class="frames">
    <div class="person">
      <div class="card my-4" style="width: 18rem;">
        <img src="ProjectPhotos/Saurabh.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Saurabh Singh</h4>
          <p class="card-text">LIC AGENT | #dalla</p>
          <a href="" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>

    <div class="person">
      <div class="card shiv-card my-4" style="width: 18rem;">
        <img src="ProjectPhotos/Shivam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Shivam Singh</h4>
          <p class="card-text">Enthusiast CSE student .<br>Full Stack Developer | PHP Developer | React JS Developer | UI/UX | Figma</p>
          <a href="https://github.com/shiv-03" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>


    <div class="person">
      <div class="card my-4" style="width: 18rem;">
        <img src="ProjectPhotos/Shivani.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Shivani Maurya</h4>
          <p class="card-text">HTML | CSS </p>
          <a href="" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
</body>

</html>