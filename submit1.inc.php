<?php

    include_once 'dbh1.inc.php';

    $Name = $_POST['Name'];
    $Room_Name = $_POST['Room_Name'];
    
	$sql = "INSERT INTO join_event (Name, Room_Name)
VALUES ('$Name','$Room_Name');";
	mysqli_query($conn, $sql);

    header("Location: ../Virtual%20networking/index1.php");