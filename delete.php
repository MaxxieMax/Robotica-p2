<?php
    include("connectdb.php");

    $id = $_GET["id"];

    // $sql = "DELETE FROM `aanmeldingen` WHERE `aanmeldingen` =$bs";

    // $sql = "DELETE FROM `aanmeldingen` WHERE `aanmeldingen` = $id";
    $sql = "DELETE FROM `pro2_aanmeldingen` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Refresh: 0; index.php?content=read");

?>