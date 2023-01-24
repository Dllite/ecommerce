<?php 
    session_start();

    require_once "../controller/db.php";

    require_once "../_function/funtion.php";

    $errors[]="";

    if(isset($_POST['connexion'])){
        extract($_POST);
        var_dump($_POST);
        $email=htmlentities($email);
        $password=htmlentities($password);

        if(empty($email)){
            $errors['email']="Champ obligatoire";
        }
        if(empty($password)){
            $errors['password']="Champ obligatoire";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
        }

        if($email&&$password){
            $login = $db->query("SELECT * FROM administrateur WHERE email='$email' && motdepasse='$password'");

            $verif = mysqli_num_rows($login);

            if($verif==1){
                $_SESSION['email']=$email;
                header("location:index.php");
            }else{
                $errors['email'] = "Email ou mot de passe incorrect";
            }
        }else{
            echo "Les deux champ doivent etre rempli";
        }



    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Bayam Sallam - Admin</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<h1>Connexion</h1>
<p class="account-subtitle">Bayam Sallam - Acces au tableau de bord </p>

<form method="POST">
<div class="form-group">
<input class="form-control" type="text" name="email" placeholder="Email">
<?= display_errors($errors, 'email')?>
</div>
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Mot de passse">
<?= display_errors($errors, 'password')?>
</div>
<div class="form-group">
<button class="btn btn-primary btn-block" name="connexion" type="submit">Connexion</button>
</div>
</form>

<div class="text-center forgotpass"><a href="forgot-password.html">Mot de pass oublié ?</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>