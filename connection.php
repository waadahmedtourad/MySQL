<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {

    die("failed connection". $conn->connect_error);
}

$sql = "SELECT * FROM students";
$res = mysqli_query($conn,$sql);


?>
<html>
    <head>
        <title>Student Table</title>
    </head>
    <body>
        <table style="text-align:center; width:100%">
            <tr style ="background-color:rgb(0, 38, 153)">
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Address</th>
                <th>Email</th>
                <th>Grade</th>
            </tr>
            <?php
            if(mysqli_num_rows($res) > 0){

                while($row = mysqli_fetch_assoc($res)){
                    echo "<tr style='background-color:rgb(179, 198, 255);'>";
                    echo "<td>" . $row['Id'] . "</td>";
                    echo "<td>" . $row['Fname'] ."</td>";
                    echo "<td>" . $row['Lname'] ."</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Email'] ."</td>";
                    echo "<td>" . $row['Grade'] ."</td>";
                    echo "</tr>";
                }

            }else{
                echo "not data is view ";
            }
            
            ?>
        </table>
   </body>


</html>