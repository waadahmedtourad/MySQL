<?php
require_once 'connection.php';

$sql = "UPDATE students SET Fname ='nada' , Lname ='mohamed' WHERE Id = 16";
if($conn->query($sql) === true){
    echo "Update is Sucessful";
}else{
    echo "Erorr updating :" .$conn->error;
}

$conn->close();

?>