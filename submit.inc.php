<?php

    include_once 'dbh.inc.php';

    $Name = $_POST['Name'];
    $Event_Title = $_POST['Event_Title'];
    $Room_Name = $_POST['Room_Name'];
    
	$sql = "INSERT INTO create_event (Name, Event_Title, Room_Name)
VALUES ('$Name','$Event_Title','$Room_Name');";
	mysqli_query($conn, $sql);

    header("Location: ../Virtual%20networking/index1.php");

?>