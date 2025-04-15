<?php
session_start();

// Check if the user is already logged in, redirect to homepage
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: redirect.php");
    exit;
}

// Define variables and set to empty values
$username = $pass = "";
$username_err = $pass_err = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $username_err = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    // Validate password
    if (empty($_POST["pass"])) {
        $pass_err = "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
    }

    // Check if there are no errors, and proceed with login
    if (empty($username_err) && empty($pass_err)) {
        // Database connection details
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the username and password match in the register table
        $stmt = $conn->prepare("SELECT * FROM register WHERE username = ? AND pass = ?");
        $stmt->bind_param("ss", $username, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the result matched a single row
        if ($result->num_rows == 1) {
            // Fetch the row
            $row = $result->fetch_assoc();

            // Check if username and password are "admin"
            if ($row["username"] === "rootuser" && $row["pass"] === "rootpassword") {
                // Login successful as admin
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                // Redirect to admin dashboard
                header("location: ./adminfinal/admindashboard.php");
                exit;
            } else {
                // Check user type for other users
                $usertype = $row['user_type'];

                switch ($usertype) {
                    case 'subadmin':
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        // Redirect to subadmin dashboard
                        header("location: ./adminfinal/admindashboard.php");
                        exit;
                        break;
                    case 'user':
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        // Redirect to user dashboard
                        header("location: redirect.php");
                        exit;
                        break;
                    default:
                        echo "Invalid user type.";
                        break;
                }
            }
        } else {
            $pass_err = "Your Login Name or Password is invalid";
        }

        // Close the statement
        $stmt->close();

        // Close the connection
        $conn->close();
    }
}

// Function to sanitize input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Create the flex container for the page -->
    <div class="container">
        <!-- Create the left side of the page -->
        <div class="left"></div>
        <!-- Create the right side of the page -->
        <div class="right">
            <!-- Create the login form -->
            <div class="formcontent">
                <div class="header">
                    <img src='./img/userprofile.png' alt="Profile Image">
                    <h2>Login</h2>
                </div>
                <!-- HTML form -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">    
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>">
                    <span class="error"><?php echo $username_err; ?></span>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="pass" name="pass">
                    <span class="error"><?php echo $pass_err; ?></span>
                    <br>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <div class="form-group register-link">
                    <p>Don't have an account?</p><a href="register.php">Create a new one</a>
                </div>
                <!-- Display logout success message -->
                <?php if (isset($_SESSION["logout_message"])): ?>
                    <p><?php echo $_SESSION["logout_message"]; ?></p>
                    <?php unset($_SESSION["logout_message"]); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
