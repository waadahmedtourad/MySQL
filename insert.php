<?php
require_once 'connection.php'; 

$sql = "INSERT INTO students (Fname, Lname, Address, Email, Grade)
VALUES ('nour', 'ashraf', 'cairo, egypt', 'talenahmed@gmail.com', '2.6')";

if (mysqli_query($conn, $sql)) {
    echo "Insert is successful";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
