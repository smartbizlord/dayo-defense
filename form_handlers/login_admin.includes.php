<?php

session_start();
require("db.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "INSERT INTO students (username, password) VALUES ('$username', '$password')";
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        # code...
        $result = mysqli_fetch_assoc($query);
        // var_dump(mysqli_fetch_assoc($query));
        $session_title = $result["title"];
        $session_username = $result["username"];

        $_SESSION["session_title"] = $session_title;
        $_SESSION["session_username"] = $session_username;
        header("Location: ../dashboard.php");
        // echo "Successful Login";
    } else {
        # code...
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    
    // header("Location: ../about.php");
}