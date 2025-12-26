<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include(__DIR__."/../utils/db_connect.php");

    $conn = db_connect();

    $result = mysqli_query($conn, "SELECT * FROM test_site");
    foreach($result as $dico){
        echo($dico["id"]);
        echo($dico["nom"]);
        echo($dico["prenom"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours</title>
</head>
<body>
    <h1>TO DO</h1>
</body>
</html>