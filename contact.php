<?php
// Initialize variables
$username = $email = $message = "";
$username_err = $email_err = $message_err = "";
$success_message = "";

// Check if the form is submitted
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

    // Validate message
    if (empty($_POST["msg"])) {
        $message_err = "Message is required";
    } else {
        $message = test_input($_POST["msg"]);
        // Check if message contains only letters, numbers, and spaces
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $message)) {
            $message_err = "Only letters, numbers, and spaces are allowed in the message";
        }
    }

    if (empty($username_err) && empty($email_err) && empty($message_err)) {
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
        $stmt = $conn->prepare("SELECT * FROM messages WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $username_err = "Username already taken";
        }

        // Check if the email is already taken
        $stmt = $conn->prepare("SELECT * FROM messages WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $email_err = "Email already taken";
        }

        if (empty($username_err) && empty($email_err)) {
            // Prepare and bind the insertion query
            $stmt = $conn->prepare("INSERT INTO messages (username, email, msg) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $message);

            // Execute the query
            if ($stmt->execute()) {
                $success_message = "Message sent successfully. You can now login.";
                // Reset form values
                $username = $email = $message = "";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p></p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Bangalore Karnataka,<br>India <br></p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>789-567-1234</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>bubblewash006@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <?php if (!empty($success_message)) : ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="username" required="required"
                           value="<?php echo htmlspecialchars($username); ?>">
                    <span>Full Name</span>
                    <?php if (!empty($username_err)) : ?>
                        <div class="error-message"><?php echo $username_err; ?></div>
                    <?php endif; ?>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required" value="<?php echo htmlspecialchars($email); ?>">
                    <span>Email</span>
                    <?php if (!empty($email_err)) : ?>
                        <div class="error-message"><?php echo $email_err; ?></div>
                    <?php endif; ?>
                </div>
                <div class="inputBox">
                    <textarea required="required" name="msg"><?php echo htmlspecialchars($message); ?></textarea>
                    <span>Type your Message...</span>
                    <?php if (!empty($message_err)) : ?>
                        <div class="error-message"><?php echo $message_err; ?></div>
                    <?php endif; ?>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>
<?php include_once "footer.php";
?>
</body>
</html>
