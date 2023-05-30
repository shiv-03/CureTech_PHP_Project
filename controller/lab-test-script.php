<?php

session_start();

include_once '../includes/dbConnect.php';

if (isset($_POST['test-type'])) {
    $test_type = $_POST['test-type'];
    $test_person = $_POST['test-person'];
    $test_number = $_POST['test-number'];
    $test_person_age = $_POST['test-person-age'];
    $test_rate = $_POST['test-rate'];
    $test_time_slot = isset($_POST['test-time-slot']) ? $_POST['test-time-slot'] : 0;
    $test_lab_name = isset($_POST['test-lab-name']) ? $_POST['test-lab-name'] : 0;


    if ($test_time_slot == 0) {
        $_SESSION['test_error'] = "Please Select Time Slot";
        header('Location: ../LabTests.php');
        exit();
    }

    if ($test_lab_name == 0) {
        $_SESSION['test_error'] = "Please Select Lab name";
        header('Location: ../LabTests.php');
        exit();
    }

    $query = "INSERT INTO lab_test (test_name,test_number,test_age,test_rate,test_type,test_time_slot,test_lab_name) VALUES ('$test_person','$test_number','$test_person_age','$test_rate','$test_type','$test_time_slot','$test_lab_name')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['test_submit'] = true;
        header('Location: ../LabTests.php');
    } else {
        $_SESSION['test_error'] = "Something went wrong";
        header('Location: ../LabTests.php');
    }
}
