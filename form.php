<!DOCTYPE html>
<html>
<head>
    <title>Ultimate Guide</title>
</head>
<body>

<h2>User Form</h2>

<?php
// variables and initialize them to empty values
$name = $email = $message = "";
$confirmation_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input from the form
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Display a confirmation message
    $confirmation_message = "Thank you, $name! Your information has been submitted successfully.";
}

// Function to sanitize and validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<?php echo $confirmation_message; ?>

</body>
</html>
