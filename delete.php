<?php

require_once 'connection.php';

$sql = "DELETE FROM students WHERE id = 18";

if($conn->query($sql) ===true){
    echo "Delete is sucessful";
}else{
    echo "Erorr deleting :" .$conn->erorr;
}
$conn->close();
?>