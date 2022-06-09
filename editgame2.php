<?php
    include 'connection.php';

    $id = $_POST['id'];
    $skor1 = $_POST['skor1'];
    $skor2 = $_POST['skor2'];
    $sqledit = " UPDATE `game2` SET `skor1` = $skor1,`skor2` = $skor2  WHERE `id` = $id";
    mysqli_query($conn, $sqledit);
    header("location:game2.php");
