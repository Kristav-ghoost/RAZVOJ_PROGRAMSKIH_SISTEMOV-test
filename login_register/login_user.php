<?php
include_once './db/db.php';
session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql1 = "SELECT * FROM users WHERE username='$username';";
    $result1 = mysqli_query($db, $sql1);
    $rows = mysqli_num_rows($result1);

    if ($rows == 1) {
        $sql2 = "SELECT id,password FROM users WHERE username='$username';";
        $result3 = mysqli_query($db, $sql2);
        $geslo = mysqli_fetch_row($result3);
        $geslo1 = $geslo[1];
        $id_session = $geslo[0];

        if (password_verify($password, $geslo1)) {
            $_SESSION["user"] = $_POST['username'];
            $_SESSION["id"] = $id_session;
            header("Location: todo.php");
        }
        else{
            $user_err = 'Napacno uporabnisko ime ali geslo';
        }
    }
    else {
        $login_error = 'Uporabnik ne obstaja';
    }
}

?>