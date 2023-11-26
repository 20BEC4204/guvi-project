
<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Add your authentication logic here (e.g., check against a database)
        // For simplicity, a basic check is used in this example
        if ($username === "demo" && $password === "password") {
            echo "Login successful!";
        } else {
            echo "Invalid username or password. Please try again.";
        }
    }
?>




