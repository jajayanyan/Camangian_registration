<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Form</title>
</head>
<body>

<?php
// =====================================================
// PHP BLOCK: Process the form submission using POST
// =====================================================

// Only run this section when the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect form input values
    $firstname = trim($_POST['firstname']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $quote = trim($_POST['quote']);

    // Check if any field is empty before proceeding
    if (!empty($firstname) && !empty($age) && !empty($gender) && !empty($quote)) {
        // Create the formatted output message
        $message = "You are {$firstname}, a {$age}-year-old {$gender}. Your motto in life is: {$quote}";

        // Display the success and summary message
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p>{$message}</p>";
        echo "<hr>";
    } else {
        // Show an error if a field is left blank
        echo "<p style='color:red;'>Please fill out all the fields before submitting.</p>";
    }
}
?>

<!-- =====================================================
     HTML BLOCK: Registration form structure
     ===================================================== -->
<form method="POST" action="">
    <!-- First Name Input -->
    <div>
        <label>First Name:</label><br>
        <input type="text" name="firstname" required>
    </div>
    <br>

    <!-- Age Input -->
    <div>
        <label>Age:</label><br>
        <input type="number" name="age" required>
    </div>
    <br>

    <!-- Gender Selection -->
    <div>
        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="">-- Choose Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <br>

    <!-- Quote in Life -->
    <div>
        <label>Quote in Life:</label><br>
        <textarea name="quote" rows="3" cols="30" required></textarea>
    </div>
    <br>

    <!-- Submit Button -->
    <div>
        <input type="submit" value="Register">
    </div>
</form>

</body>
</html>
