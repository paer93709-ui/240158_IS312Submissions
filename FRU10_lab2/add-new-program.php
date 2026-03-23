<?php
/*
Author: Raymond Pae 
Date: 23rd March 2026
Unit: IS312
*/

// 1. Include the database connection file
include 'db_config.php';

// 2. Check if the form was submitted via POST [cite: 22]
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Retrieve and store form details in variables [cite: 23]
    // mysqli_real_escape_string helps prevent basic SQL injection
    $p_code = mysqli_real_escape_string($conn, $_POST['program_code']);
    $p_name = mysqli_real_escape_string($conn, $_POST['program_name']);

    // 4. Create the SQL INSERT statement [cite: 23, 42]
    $sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$p_code', '$p_name')";

    // 5. Execute query and check for success 
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Success!</h2>";
        echo "<p>New program record created successfully.</p>";
    } else {
        echo "<h2>Error</h2>";
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// 6. Close the connection
$conn->close();
?>

<br>
<a href="new-program.html">Add Another Program</a> | <a href="index.php">Back to Home</a>