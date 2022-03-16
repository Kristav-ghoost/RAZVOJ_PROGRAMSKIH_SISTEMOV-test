<?php
include_once './db/db.php';

if (isset($_POST['submit'])) {
    
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);

    $user_check = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1;";
    $result = mysqli_query($db, $user_check);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            $username_err = "Username ze obstaja";
        }

        if ($user['email'] === $email) {
            $mail_err = "Email ze obstaja";
        }
    }
    

        if (!$user) {
        echo 'qwewqeeww';
        $pass = password_hash($password, PASSWORD_ARGON2ID);
        $time = "SELECT NOW();";
        $time_result = mysqli_query($db, $time);
        $row = mysqli_fetch_assoc($time_result);
        $cas = $row['NOW()'];

        $sql = "INSERT INTO users (firstname,lastname,username,email,password,phone_number,registration_time) VALUES ('$firstname','$lastname','$username','$email','$pass','$tel','$cas');";
        $result2 = mysqli_query($db, $sql);
        header('location: ./login.php');
        }
    
}
?>