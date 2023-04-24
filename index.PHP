<?php

//  INSERT INTO `concerns` (`sno`, `name`, `Concern`) VALUES ('1', 'Shivam', 'I am suffering with heavy body ache .');
$insert = false;
$update = false;
$delete = false;
// connecting to a database
$servername = "localhost";
$username  = "root";
$password = "";
$database = "Concern";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die ("your connection doesnt established ".mysqli_connect_error());

}
// else{f
//     echo "your connection is established";
// }
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql ="DELETE FROM `concerns` WHERE `concerns`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  // if(isset($Name) || isset($Description)){
if (isset($_POST['snoEdit'])){
  // update the record
  $sno = $_POST["snoEdit"];
  $Name = $_POST["nameEdit"];
$Description = $_POST["ConcernEdit"];

$sql = "UPDATE `concerns` SET `name` = '$Name', `Concern` = '$Description' WHERE `concerns`.`sno` = $sno";

$result = mysqli_query($conn , $sql);
if($result){
  $update = true;
}
  
}
else{
$Name = $_POST['name'];
$Description = $_POST['Concern'];

$sql = "INSERT INTO `concerns` (`name`, `Concern`) VALUES ('$Name', '$Description')";

$result = mysqli_query($conn , $sql);

if ($result)
{
    // echo "Data inserted successfully";
    $insert = true; 

}
else{
    echo "Something went wrong ".mysqli_connect_error();

}
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project PHP</title>

    <link rel="stylesheet" href="footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Edit Modal -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit Modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Record</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/crud/index.php" method="post">
                        <input type="hidden" name="snoEdit" id="snoEdit">

                        <div class="my-3">
                            <label for="exampleInputName" class="form-label">Your Good Name</label>
                            <input type="text" class="form-control" id="nameEdit" name="nameEdit"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="my-3">
                            <label for="exampleFormControlConcern" class="form-label">Enter your concern here</label>
                            <textarea class="form-control" id="ConcernEdit" name="ConcernEdit" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'header.php' ?>
    <!-- bannner section -->

    <div class="banner_w3lspvt position-relative">
        <div class="container">
            <div class="d-md-flex">
                <div class="w3ls_banner_txt">
                    <h3 class="w3ls_pvt-title">Medical <br><span>Mechanics</span></h3>
                    <p class="text-sty-banner">The modern pharmaceutical industry along with the healthcare industry is
                        undergoing a significant modification and quick change due to the advancement of numerous
                        technologies. Among the critical pharma business trends are artificial intelligence (AI), data
                        analytics, system biotechnology, and curative medicines.</p>
                    <a href="MedicineMechanics.php" class="btn button-style mt-md-5 mt-4">Read More</a>
                </div>
                <div class="banner-img">
                    <img src="ProjectPhotos/2.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div>

        <!-- Banner Section Ends Here -->
        <!-- Three Pillars -->

        <div class="what bg-li py-5" id="what">
            <div class="container py-xl-5 py-lg-3">
                <h2 align="center">Three pillars of medical</h2>
                <div class="row about-bottom-w3l text-center mt-4">
                    <div class="col-lg-4 about-grid">
                        <div class="about-grid-main">
                            <!-- <img src="images/img1.png" alt="" class="img-fluid"> -->
                            <h4 class="my-4">Cost Savings</h4>
                            <p> No patient – adult or child – should go without health care because he or she cannot
                                afford it. </p>
                            <a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 about-grid my-lg-0 my-5">
                        <div class="about-grid-main">
                            <!-- <img src="images/img2.png" alt="" class="img-fluid"> -->
                            <h4 class="my-4">Patient-Centered Care</h4>
                            <p>What’s the first thing you think of when given the words “health care?” Most people think
                                “trip to the doctor,” or “medication.”</p>
                            <a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 about-grid">
                        <div class="about-grid-main">
                            <!-- <img src="images/img3.png" alt="" class="img-fluid"> -->
                            <h4 class="my-4">Access to Care</h4>
                            <p>We are so fortunate to live in a world where scientists are developing novel,
                                breakthrough therapies.</p>
                            <a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
      if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong> Success!....</strong> Your record has been inserted succesfully .
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }   ?>
        <?php
      if($delete){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong> Success!....</strong> Your record has been deleted succesfully .
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }  ?>
        <?php
      if($update){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong> Success!....</strong> Your record has been updated succesfully .
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }  ?>


        <div class="container my-3">
            <h2>Add your concern</h2>
            <form action="/crud/index.php" method="post">

                <div class="my-3">
                    <label for="exampleInputName" class="form-label">Your Good Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>

                <div class="my-3">
                    <label for="exampleFormControlConcern" class="form-label">Enter your concern here</label>
                    <textarea class="form-control" id="Concern" name="Concern" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="container my-4">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $sql = "SELECT * FROM `concerns`";
        $result = mysqli_query($conn, $sql);
          $sno = 0;
        while($row = mysqli_fetch_assoc($result)){
          $sno = $sno +1;
          echo "<tr>
          <th scope='row'>" .$sno . "</th>
          <td>" .$row['name'] . "</td>
          <td>" .$row['Concern'] . "</td>
          <td><button class='edit btn btn-sm btn-primary' id=".$row['sno'] .">Edit</button> <button class='delete btn btm-sm btn-primary' id=".$row['sno'] .">Delete</button></td>
        </tr>";
        //  echo $row['sno'] . " name ". $row['name'] . " description ". $row['Concern'] ;
        //   echo "<br>"; 
        } 
      ?>

                    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->


                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>


    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>
    <script>
    var edits = document.getElementsByClassName('edit');
    // console.log(edits);
    // console.log(Array.from(edits));
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(title, description);
            nameEdit.value = title;
            ConcernEdit.value = description;
            snoEdit.value = e.target.id;
            console.log(e.target.id);
            $('#exampleModal').modal('toggle');
        })
    })

    var deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("delete", );
            $sno = e.target.id.substr(1, );

            if (confirm("Press a button!")) {
                console.log("yes");
                console.log($sno);
                window.location = '/crud/index.php?delete=${sno}';

            } else {
                console.log("no");
            }
        })
    })



    // working line (2 codes)
    // $(document).on("click", ".edit", function(){
    // console.log($(this)[0].parentNode.parentNode) 
    //   console.log($(this).closest("tr").find("#name")[0].innerHTML)
    //   console.log($(this).closest("tr").find("#concern")[0].innerHTML)
    // })
    </script>

</body>

</html>