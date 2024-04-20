<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/new.css">
    <title>ESGT University - Register</title>
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
            <a href="login.php">
                <span>Sign In</span>
            </a>
            <a href="register.php">
                <span>Register now</span>
            </a>
        </div>
    </nav>
    <!-- hero section -->
    <!-- <div id="hero-section">
        <div class="welcome">Welcome to</div>
        <div class="school-name">ESGT</div>
        <div class="university-text">UNIVERSITY,</div>
        <div class="country-text">Benin</div>
        <div class="small-texts">
            <p>Ecole Superieure des Geston et technology</p>
            <p>our place, your future</p>
        </div>
        <div class="action-wrapper-inverse">
            <a href="login.php">
                <span>Sign In</span>
            </a>
        </div>
    </div> -->



    <!-- signup section -->
    <section class="form-origin">
        <form action="./form_handlers/register_student.includes.php" method="post" class="form-wrapper">
            <h2 class="form-heading">Registration Form</h2>
            <div class="form-section">
                <div class="form-group">
                    <div class="form-item">
                        <input type="text" name="first_name" required>
                        <label for="">First Name</label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="last_name" required>
                        <label for="">Last Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <input type="date" name="dob" required>
                        <label for="">Date of Birth</label>
                    </div>
                    <div class="form-item">
                        <label class="gender-heading" for="">Gender:</label>
                        <div class="genders">
                            <input type="radio" value="female" name="gender" required>
                            <span>Female</span>
                            <input type="radio" value="male" name="gender" required>
                            <span>Male</span>
                            <input type="radio" value="other" name="gender" required>
                            <span>Other</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="phone_number" required>
                        <label for="">Phone Number</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item dropdown">
                        <select name="department" id="" required>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="Law">Law</option>
                            <option value="Mass Communications">Mass Communications</option>
                        </select>
                        <label for=""></label>
                    </div>
                    <div class="form-item dropdown">
                        <select name="level" id="" required>
                            <option value="100">100 level</option>
                            <option value="200">200 level</option>
                            <option value="300">300 level</option>
                            <option value="400">400 level</option>
                        </select>
                        <label for=""></label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="register-submit">Submit</button>
                </div>
            </div>
        </form>
    </section>

    

    <!-- about section -->
    <!-- services section -->
    <!-- research opportunities section -->
    <!-- meet the team section -->
    <!-- footer section -->
    <footer>
        &copy; esgt.com . All Rights Reserved Designed Olusegun Divine
    </footer>
</body>
</html>
