<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="LabTest.css">
<link href="htttps://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
  .slot-box{
    padding: 4px 4px 4px 4px;
    margin: 4px 4px 4px 4px;
    display:flex;
    justify-content:space-around;
    border: 1px solid grey;
    border-radius: 5px;
    
  }
  .slot-box:hover{
    animation: slot 5s;
  }
  .booking-slots{
    paddding: 10px 10px ;
    margin: 5px 5px 5px 5px;
  }
  @keyframes slot{
    50% {background-color: #aaa;}
  }
</style>


<?php include 'header.php'; ?>

<div class=" container">
<table class="#myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
         
<!-- <div class = "booking-slots py-3 my-4">
  <!-- <h1>Book your slots here....</h1> -->


<!-- <div class="slot-box py-3 my-4">
  <div class="type"><h3>Covid</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Widal Test</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>HbA1c(Glycated Haemoglobin)</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Tumor marker tests</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Urine Cytology</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Aminocentesis</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Liver function test</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Kidney function test</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Lipid Profile</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Sputum Cytology</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div>
<div class="slot-box py-3 my-4">
  
  <div class="type"><h3>Ultrasonography</h3></div>
  <div class="slot-btn"><button type="button" class="btn btn-primary">Book Slot</button></div>
</div> --> -->

</div>
<?php include 'footer.php' ; ?>
<script>
  let table = new DataTable('#myTable');
</script>
<script href="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>