<?php 
    require_once "controller/db.php";

    if($_GET['id']){
        $id=$_GET['id'];
        $detail = $db->query("SELECT * FROM produit WHERE id=$id");

        $ligne = $detail->fetch_assoc();
    }
    require_once "view/header_view.php";

    require_once "view/detail_view.php";

    require_once "view/footer_view.php";
?>