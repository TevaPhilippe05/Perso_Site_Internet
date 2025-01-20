<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include(__DIR__."/../utils/db_connect.php");

    $conn = db_connect();

    $result = mysqli_query($conn, "SELECT * FROM Test");
    foreach($result as $dico){
        echo($dico["id"]);
        echo($dico["nom"]);
        echo($dico["prenom"]);
    }
?>