<?php
include_once '../db/db.php';
session_start();


if (isset($_POST['submit'])) {
    $text = mysqli_real_escape_string($db, $_POST['vpisi']);
    $id_objave = mysqli_real_escape_string($db, $_POST['id']);

    $neke = "UPDATE todo SET todo='$text' WHERE id='$id_objave';";
    $neke_result = mysqli_query($db, $neke);
    header("Location: ../todo.php");
}


?>