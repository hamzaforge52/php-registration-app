<?php
include("../includes/database.php");
// Variables to store messages
$successMessage = "";
$errorMessage = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $fullName = trim($_POST["fullName"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Basic Validation
    if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {

        $errorMessage = "Please fill in all fields.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errorMessage = "Invalid email address.";

    } elseif ($password != $confirmPassword) {

        $errorMessage = "Passwords do not match.";

    } else {

        $sql = "INSERT INTO users (full_name, email, password)
VALUES ('$fullName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {

    $successMessage = "Registration Successful!";

} else {

    $errorMessage = "Error: " . $conn->error;

}
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | HamzaStore</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<header>

    <div class="logo">
        <h2>HamzaStore</h2>
    </div>

</header>

<section class="register-container">

    <h1>Create Your Account</h1>

    <?php
    if (!empty($errorMessage)) {
        echo "<p class='error'>$errorMessage</p>";
    }

    if (!empty($successMessage)) {
        echo "<p class='success'>$successMessage</p>";
    }
    ?>

    <form method="POST">

        <input
            type="text"
            name="fullName"
            placeholder="Full Name"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <input
            type="password"
            name="confirmPassword"
            placeholder="Confirm Password"
            required
        >

        <button type="submit">
            Register
        </button>

    </form>

</section>

</body>
</html>