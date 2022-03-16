<?php
include_once '../db/db.php';
session_start();

$id_dobljen_delete = $_GET['del_task'];

$sql5 = "DELETE FROM todo WHERE id='$id_dobljen_delete';";
$sql5_query = mysqli_query($db, $sql5);
header("Location: ../todo.php");
?>