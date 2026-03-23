<?php
/*
Author: Raymond Pae
Date: 20 March 2026
Unit: IS312
*/

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed");
}

$result = $conn->query("SELECT * FROM Student");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>

<body>

<h2>Student Listing</h2>

<table>
<tr>
    <th>StudentNo</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>ContactNo</th>
    <th>ProgramCode</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['StudentNo']}</td>
        <td>{$row['Firstname']}</td>
        <td>{$row['Lastname']}</td>
        <td>{$row['Gender']}</td>
        <td>{$row['ContactNo']}</td>
        <td>{$row['ProgramCode']}</td>
    </tr>";
}
?>

</table>

</body>
</html>

<?php $conn->close(); ?>