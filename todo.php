<?php
include_once './db/db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./js/todo.js"></script>
    <title>TODO</title>
</head>

<body>
    <a href="logout.php">Odjava</a>
    <p class="naslov">TO-DO List</p>


    <form action="todo.php" method="POST" class="dodas" onsubmit="return preveriTodoLogin()">
        <input type="text" name="vpisi" id="vpisi" placeholder="Kaj želite danes početi?" onchange="preveriVpis()">
        <button type="submit" name="submit" id="submit" value="submit" class="btn1">Dodaj</button>
    </form>

    <table class="tabela">
        <thead>
            <tr>
                <th class="todo_th">ID</th>
                <th class="todo_th">Opravilo</th>
                <th class="todo_th">Datum</th>
                <th class="todo_th">Uredi</th>
                <th class="todo_th">Izbrisi</th>
            </tr>
        </thead>
        <tbody>
        
            <?php
            $index = $_SESSION["id"];
            $opravilo = mysqli_query($db, "SELECT * FROM todo where users_id='$index';");

            $i = 1;
            while($row = mysqli_fetch_array($opravilo)){?>

            <tr>
                <td style="text-align: center" class="todo_td"><?php echo $i; ?></td>
                <td class="todo_td"><?php echo $row["todo"]; ?></td>
                <td style="text-align: center" class="todo_td"><?php echo $row["cas"]; ?></td>
                <td style="text-align: center" class="todo_td"><a class="izbrisi2" href="./update/uredi.php?id_uredi_dobljen=<?php echo $row['id']?>">+</a></td>
                <td style="text-align: center" class="todo_td"><a class="izbrisi" href="./delete/delete_proces.php?del_task=<?php echo $row['id']?>">x</a></td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>

    <?php

    if (isset($_POST['submit'])) {
       $add = mysqli_real_escape_string($db, $_POST['vpisi']);
       $ide = $_SESSION["id"];

       $cas_result = mysqli_query($db, "SELECT NOW();");
       $rows = mysqli_fetch_assoc($cas_result);
       $cas = $rows['NOW()'];

       $sql3 = "INSERT INTO todo (todo,cas,users_id) VALUES ('$add','$cas','$ide');";
       $result4 = mysqli_query($db, $sql3);
       header("Location: todo.php");
    }

    ?>

    <script>
        window.history.replaceState(null, null, window.location.href);
    </script>

</body>

</html>