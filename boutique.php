<?php 

    require_once "controller/db.php";

    $produit = $db->query("SELECT * FROM produit");

    require_once 'view/header_view.php';

    require_once 'view/view_shop.php';

    require_once 'view/footer_view.php';
?>