<?php

    session_start();

    require_once "controller/db.php";

    $produit = $db->query("SELECT * FROM produit");

    

    require_once 'view/header_view.php';

    require_once 'view/body_view.php';

    require_once 'view/footer_view.php';?>