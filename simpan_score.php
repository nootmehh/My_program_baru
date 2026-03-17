<?php

session_start();
include "koneksi.php";

$id_user=$_SESSION['id_user'];
$score=$_GET['score'];

mysqli_query($conn,"INSERT INTO score(id_user,nilai)
VALUES('$id_user','$score')");

header("Location:leaderboard.php");

?>