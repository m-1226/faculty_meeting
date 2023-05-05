<?php

// start session if not started
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Add a new session variable to store error message
$_SESSION["error_message"] = "";

// Check if the user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: meetings.php");
    exit();
}

// Check if the form has been submitted
if (isset($_POST["login_form"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the email is valid
    if (is_valid_email($email)) {
        // Prepare a SQL statement to check if the email exists in the database
        $stmt = $conn->prepare("SELECT user_id, name, password, is_enabled, is_admin FROM p39_users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the email exists in the database
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Check if the user is enabled
            if ($row["is_enabled"] == 1) {
                // Check if the password is correct
                if (password_verify($password, $row["password"])) {
                    // Change user's session id in an attempt to prevent session fixation attacks
                    session_regenerate_id();

                    // Set the session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["user_id"] = $row["user_id"];
                    $_SESSION["name"] = $row["name"];

                    // Check if the user is an admin
                    $_SESSION["admin"] = ($row["is_admin"] == 1);

                    // Unset any error messages, if any
                    unset($_SESSION["error_message"]);

                    // Redirect the user to the meetings page
                    header("Location: meetings.php");
                    exit();
                } else {
                    $_SESSION["error_message"] = "كلمة المرور غير صحيحة";
                }
            } else {
                $_SESSION["error_message"] = "Your account has been disabled";
            }
        } else {
            $_SESSION["error_message"] = "هذا الإيميل غير مسجل في قاعدة البيانات";
        }
    } else {
        $_SESSION["error_message"] = "Invalid email format";
    }

    // Save the email entered by the user
    $_SESSION["email_input"] = $email;
}

// Save the password entered by the user
$_SESSION["password_input"] = $password;

?>