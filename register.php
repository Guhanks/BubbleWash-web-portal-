<?php
function test_input($data) {
    $data = trim($data); // Remove leading/trailing whitespaces
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}
?>
<?php
$registration_successful = false;
$username = $email = $place = $phone = $pass = $confirmpass = "";
$username_err = $email_err = $place_err = $phone_err = $pass_err = $confirmpass_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $username_err = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        // Check if username contains only letters and numbers
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $username_err = "Only letters and numbers are allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $email_err = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        }
    }
    
    // Validate place
    if (empty($_POST["place"])) {
        $place_err = "Place is required";
    } else {
        $place = test_input($_POST["place"]);
    }
    
    // Validate phone number
    if (empty($_POST["phone"])) {
        $phone_err = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // Check if phone number is valid
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phone_err = "Invalid phone number";
        }
    }
    
    // Validate password
    if (empty($_POST["pass"])) {
        $pass_err = "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
        // Password length should be at least 8 characters
        if (strlen($pass) < 8) {
            $pass_err = "Password should be at least 8 characters long";
        }
    }

    // Validate confirm password
    if (empty($_POST["confirmpass"])) {
        $confirmpass_err = "Please confirm password";
    } else {
        $confirmpass = test_input($_POST["confirmpass"]);
        // Check if passwords match
        if ($pass !== $confirmpass) {
            $confirmpass_err = "Passwords do not match";
        }
    }

    if (empty($username_err) && empty($email_err) && empty($place_err) && empty($phone_err) && empty($pass_err) && empty($confirmpass_err)) {
        // Database connection details
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the username is already taken
        $stmt = $conn->prepare("SELECT * FROM register WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $username_err = "Username already taken";
        }

        // Check if the email is already taken
        $stmt = $conn->prepare("SELECT * FROM register WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $email_err = "Email already taken";
        }

        // If no errors, proceed with registration
        if (empty($username_err) && empty($email_err)) {
            // Prepare and bind the insertion query
            $stmt = $conn->prepare("INSERT INTO register (username, email, place, phone, pass) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $email, $place, $phone, $pass);

            // Execute the query
            if ($stmt->execute()) {
                // Registration successful
                $registration_successful = true;
                // Reset form values
                $username = $email = $place = $phone = $pass = $confirmpass = "";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        }

        // Close the connection
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <!-- flex container for the page -->
    <div class="container">
        <!-- left side of the page -->
        <div class="left"></div>
        <!-- right side of the page -->
        <div class="right">
            <!-- register form -->
            <div class="formcontent">
                <div class="header">
                    <img src='./img/userprofile.png' alt="Profile Image">
                    <h2>Register</h2>
                </div>

                <!-- HTML form -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>">
                        <span class="error"><?php echo $username_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                        <span class="error"><?php echo $email_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="place">Place:</label>
                        <input type="text" id="place" name="place" value="<?php echo $place; ?>">
                        <span class="error"><?php echo $place_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
                        <span class="error"><?php echo $phone_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" id="pass" name="pass">
                        <span class="error"><?php echo $pass_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="confirmpass">Confirm Password:</label>
                        <input type="password" id="confirmpass" name="confirmpass">
                        <span class="error"><?php echo $confirmpass_err; ?></span>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="register">Register</button>
                    </div>
                </form>
            </div>
            <?php if ($registration_successful) { ?>
    <!-- Success message and modal -->
    <div class="modal__window" style="display: block;">
        <a class="modal__close" href=""></a>
        <h2>Nice to meet you!</h2>
        <p>Registration successful.</p>
        <a href="login.php">GO TO Login Page</a>
    </div>
<?php } ?>
        </div>
    </div>
</body>
</html>