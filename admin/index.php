<?php 
    session_start();

    require_once "../controller/db.php";

    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }else{
        $email=$_SESSION['email'];
        $inf = $db->query("SELECT * FROM administrateur WHERE email='$email'");

        $result= $inf->fetch_assoc();
        
    }

    
    require_once "view/admin_header_view.php";

    require_once "view/dashbord_view.php";

   // require_once "view/admin_footer_view.php";

?>