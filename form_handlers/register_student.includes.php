<?php

require("db.php");

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['department']) && isset($_POST['level'])) {
    # code...
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
    $level = $_POST['level'];

    $sql = "INSERT INTO students (first_name, last_name, dob, gender, email, phone, department, level) VALUES ('$first_name', '$last_name', '$dob', '$gender', '$email', '$phone_number', '$department', '$level')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        # code...
        echo "Successful Registration";
    } else {
        # code...
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    
    // header("Location: ../about.php");
}