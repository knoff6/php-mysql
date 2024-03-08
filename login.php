<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Your database connection code goes here
    $servername = "localhost";
    $username = "witcher";
    $db_password = "witcher@123";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example query to check if the user exists with the provided email and password
    $query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    // Execute the query and check if any row is returned
    // If a row is returned, it means the user exists with the provided credentials
    // You should perform proper password hashing and validation in a real application
    if ($result = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($result) == 1) {
            // Fetch the user's first name and last name
            $row = mysqli_fetch_assoc($result);
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];

            // Display a welcome message
            echo "Welcome back $first_name $last_name!";
        } else {
            // Invalid credentials
            echo "Invalid email or password";
        }
    } else {
        // Error executing the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
