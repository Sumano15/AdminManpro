<?php
    include 'connection.php';

    $id = $_POST['id_tim'];
    $skor = $_POST['skor'];
    $sqledit = " UPDATE `game1` SET `skor` = $skor WHERE `id` = $id";
    mysqli_query($conn, $sqledit);
    header("location:game1.php");
