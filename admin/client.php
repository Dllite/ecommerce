<?php

    session_start();

    require_once "../controller/db.php";

    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }else{
        
        $inf = $db->query("SELECT * FROM client");

        
    }
    
    if(isset($_GET['del'])){
       
            echo "<script> confirm('Voulez vous vraiment supprimer ')</script>". $_GET['user'];
        
        
    }

    require_once "view/admin_header_view.php";

    require_once "view/client_view.php";

    //require_once "view/admin_footer_view.php";

?>