<?php 
    session_start();

    require_once "../controller/db.php";
    require_once "../_function/funtion.php";
    
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
    $errors[]="";
    if(isset($_POST['ajouter'])){
        extract($_POST);
        var_dump($_POST);

        $tof= $_FILES['image']['name'];
        $upload="../asset/images/".$tof;
        
        
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);

        $ajoutProduit = $db->query("INSERT INTO produit VALUES (NULL, '$nomProduit', '$description', '$tof', '$prix', '$categorie' )");

        if($ajoutProduit==TRUE){
            header("location:produit.php");
        }else{
            echo "Erreur";
        }
    }

    require_once "view/admin_header_view.php";    

    require_once "view/ajoutProduit_view.php";

    //require_once "view/admin_footer_view.php";


?>