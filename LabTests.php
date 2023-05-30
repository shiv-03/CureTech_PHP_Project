<?php
session_start();

if (isset($_SESSION['test_submit'])) {
  echo '<script>alert("Slot Booked Successfully");</script>';
  unset($_SESSION['test_submit']);
}

if (isset($_SESSION['test_error'])) {
  echo '<script>alert("' . $_SESSION['test_error'] . '");</script>';
  unset($_SESSION['test_error']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab Test | CureTech</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="footer.css" />
  <link href="htttps://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>

  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <h1 class="px-3">Book your slots here....</h1>
  <div class="booking-slots">
  </div>

  <?php include 'footer.php'; ?>


  <!-- Modal -->
  <div class="modal fade" id="test-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="test-modal-title">Book Slot</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="controller/lab-test-script.php" method="post">
            <input type="hidden" name="test-type" id="test-type" />
            <div class="row my-2">
              <div class="col">
                <label for="test-person" class="py-1">Name: </label>
                <input type="text" class="form-control" name="test-person" id="test-person" placeholder="Enter name" required>
              </div>
              <div class="col">
                <label for="test-number" class="py-1">Phone Number: </label>
                <input type="text" class="form-control" name="test-number" id="test-number" placeholder="Enter phone number" required>
              </div>
            </div>
            <div class="row my-2">
              <div class="col">
                <label for="test-person-age" class="py-1">Age: </label>
                <input type="number" class="form-control" name="test-person-age" id="test-person-age" placeholder="Enter Age" required>
              </div>
              <div class="col">
                <label for="test-rate" class="py-1">Rate: </label>
                <input type="text" class="form-control" name="test-rate" id="test-rate" placeholder="Enter rate" readonly required>
              </div>
            </div>
            <div class="row my-2">
              <div class="col">
                <label for="test-time-slot" class="py-1">Select Time Slot: </label>
                <select class="form-select" name="test-time-slot" aria-label="Select Time Slot" id="test-time-slot" required>
                  <option selected hidden disabled>Choose Time Slot</option>
                  <option value="1">9-2</option>
                  <option value="2">2-8</option>
                  <option value="3">8-8</option>
                </select>
              </div>
              <div class="col">
                <label for="test-lab-name" class="py-1">Select Lab: </label>
                <select class="form-select" name="test-lab-name" aria-label="Select Lab" id="test-lab-name" required>
                  <option selected hidden disabled>Choose Lab</option>
                  <option value="1">Shivam Lab</option>
                  <option value="2">Raja Lab</option>
                  <option value="3">Krishna Lab</option>
                  <option value="4">Saurabh Lab</option>
                </select>
              </div>
            </div>
            <!-- Name, Phone Number, Age, Show Rate, Time Slot, Lab Name -->
            <button type="submit" class="btn btn-primary my-2">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  <script src="scripts/labTest_data.js"></script>
  <script src="scripts/labtest.js"></script>
</body>

</html>