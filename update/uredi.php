<?php
include_once '../db/db.php';
session_start();

$id_dobljen = $_GET['id_uredi_dobljen'];

$result5 = mysqli_query($db, "SELECT * FROM todo WHERE id='$id_dobljen';");
$res = mysqli_fetch_array($result5);

$todo = $res['todo'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/todo.js"></script>
    <title>UREDI</title>
</head>

<body>

    <p class="naslov">TO-DO List</p>


    <form action="uredi_proces.php" method="POST" class="dodas" onsubmit="return preveriTodoLogin()">
        <input type="text" name="vpisi" id="vpisi" value="<?php echo $todo;  ?>" placeholder="Kaj želite danes početi?" onchange="preveriVpis()">
        <input type="hidden" name="id" value=<?php echo $id_dobljen;?>>
        <button type="submit" name="submit" id="submit" value="submit" class="btn1">Uredi</button>
    </form>

    <script>
        window.history.replaceState(null, null, window.location.href);
    </script>

</body>

</html>