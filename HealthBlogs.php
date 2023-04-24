<link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<?php include 'header.php'; ?>

 
<?php


// connecting to a database
$servername = "localhost";
$username  = "root";
$password = "";
$database = "Concern";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die ("your connection doesnt established ".mysqli_connect_error());

} 
// else{
//     echo "your connection has been established";
// }

?>



<?php include 'footer.php' ; ?>