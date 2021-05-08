<?php
include("dbh1.inc.php");
error_reporting(0);

$Name=$_GET['n'];
$query= "DELETE FROM 'join_event' ";

$data=mysqli_query($conn,$query);

header("Location: ../Virtual%20networking");

