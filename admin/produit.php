
<?php
     require_once "../controller/db.php";
     require_once "../_function/funtion.php";
     
     
        $produit = $db->query("SELECT * FROM produit");
     
     

    require_once "view/admin_header_view.php";

    require_once "view/produit_view.php";

    //require_once "view/admin_footer_view.php";
?>