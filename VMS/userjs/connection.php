<?php
$conn = new mysqli("localhost", "root", "", "prajwaldbl");
if($conn->connect_error){
    die("Could not connnect database" . $conn->connect_error);
}
?>