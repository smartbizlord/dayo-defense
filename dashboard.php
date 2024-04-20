<?php

session_start();

if (!$_SESSION["session_title"] || !$_SESSION["session_username"]) {
    # code...
    header("Location: login.php");
}

require("./form_handlers/db.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
    <title>ESGT University - Dashboard</title>
</head>
<body>
    <!-- navigation section -->
    <nav>
        <div class="logo-wrapper">
            <a href="index.php" class="logo-link">
                <img class="logo-image" src="images/logo.WEBP" alt="logo">
                <span class="primary-green-text logo-text">ESGT</span>
            </a>
        </div>
        <ul class="links-wrapper">
            <li class="link-item"><a href="index.php">Home</a></li>
            <li class="link-item"><a href="about.php">About</a></li>
            <li class="link-item"><a href="team.php">Team</a></li>
            <li class="link-item"><a href="gallery.php">Gallery</a></li>
            <li class="link-item"><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="action-wrapper">
            <a href="login.php" id="danger" onclick="<?php session_unset() ?>">
                <span>Logout</span>
            </a>
        </div>
    </nav>



    <!-- users section -->
    <section class="form-origin grid">
        <?php 
            $sql = "SELECT * FROM students";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
                # code...
                // $result = mysqli_fetch_assoc($query);
                while ($row = mysqli_fetch_assoc($query)) {
                    # code...
                    ?>
                    <div class="student-wrapper">
                        <div class="student-header">
                            <h3><?php echo $row["first_name"] . " " . $row["last_name"]; ?></h3>
                        </div>
                        <div class="student-details">
                            <div class="informative"><span>Date of Birth: </span><span><?php echo $row["dob"]; ?></span></div>
                            <div class="informative"><span>Gender: </span><span><?php echo $row["gender"]; ?></span></div>
                            <div class="informative"><span>Email: </span><span><?php echo $row["email"]; ?></span></div>
                            <div class="informative"><span>Phone Number: </span><span><?php echo $row["phone"]; ?></span></div>
                            <div class="informative"><span>Department: </span><span><?php echo $row["department"]; ?></span></div>
                            <div class="informative"><span>Level: </span><span><?php echo $row["level"]; ?>L</span></div>
                        </div>
                    </div>
                    <?php
                }
        
                // header("Location: ../dashboard.php");
                // echo "Successful Login";
            } else {
                # code...
                // echo "Error: ". $sql . "<br>" . mysqli_error($conn);
            }
        ?>
        <!-- grid of students -->
        <!-- <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div> -->
        <!-- <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div>
        <div class="student-wrapper">
            <div class="student-header">
                <h3>John Doe</h3>
            </div>
            <div class="student-details">
                <div class="informative"><span>Date of Birth: </span><span>22/03/2024</span></div>
                <div class="informative"><span>Gender: </span><span>female</span></div>
                <div class="informative"><span>Email: </span><span>example@google.com</span></div>
                <div class="informative"><span>Phone Number: </span><span>08180845321</span></div>
                <div class="informative"><span>Department: </span><span>Computer Science</span></div>
                <div class="informative"><span>Level: </span><span>100L</span></div>
            </div>
        </div> -->
    </section>
    <footer>
        &copy; esgt.com . All Rights Reserved Designed Olusegun Divine
    </footer>
</body>
</html>