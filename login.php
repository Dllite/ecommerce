<?php

    require_once "vendor/autoload.php";
    require_once "controller/db.php";
    require_once "_function/funtion.php";
    session_start();
    

    if(isset($_SESSION["auth"])){
        header("location:index.php");
        exit;
    }

    $client = new Google\Client();
    $client->setClientId("404830657579-4ar9t16a2p92502n40o9omq4an5ch3qt.apps.googleusercontent.com");
    $client->setClientSecret("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");
    $client->setRedirectUri("http://localhost/ecommerce/login.php");
    $client->addScope("email");
    $client->addScope("profile");
    $errors[]="";

    if(isset($_POST['connexion'])){
        extract($_POST);
         if(empty($email)){
            $errors['email'] = "Champ obligatoire";
          }
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
          }
          if(empty($password)){
            $errors['password'] = "Champ obligatoire";
          }
        if($email&&$password){
            
            $login = $db->query("SELECT * FROM client WHERE email='$email' && motdepasse='$password'");
            $verif = mysqli_num_rows($login);
            if($verif==1){
                $_SESSION['auth']=TRUE;
                header("location:index.php");
            }else{
                echo "Email ou nom d'utilisateur ou mot passe incorrect";
            
            }
        }
        
    }
    if(isset($_POST['inscription'])){
        extract($_POST);
        var_dump($_POST);
        if(empty($username)){
            $errors['username'] = "Champ obligatoire";
        }
        if(empty($password)){
            $errors['password'] = "Champ obligatoire";
        }else if(mb_strlen($password)<6){
            $errors['password'] = "Doit avoir au moins 6 caractères";
        }
        if($password!=$rpassword){
            $errors['password']="Les mots de passe ne sont pas";
        }

        if($username&&$password&&$password){
            $inscription = $db->query("INSERT INTO client VALUES(NULL, '$username', '$email', '$password')");
            if($inscription==TRUE){
                header("location:index.php");
            }else{
                echo "echec";
            }
        }

    }



?>


<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Connexion - Bayam Sallam </title>

        <!-- CSS -->
        <link rel="stylesheet" href="asset/css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Connexion</header>
                    <form action="#" method="POST">
                    
                        <div class="field input-field">
                        <small class="text-danger"> <?= display_errors($errors, 'email')?></small>
                            <input type="email" placeholder="Email" name="email"class="input">
                            <small class="text-danger"> <?= display_errors($errors, 'email')?></small>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Mot de passe" name="password" class="password">
                            <small class="text-danger"> <?= display_errors($errors, 'password')?></small>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Mot de passe oublier ?</a>
                        </div>

                        <div class="field button-field">
                            <button name="connexion">Connexion</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Vous n'avez pas de compte ? <a href="#" class="link signup-link">Inscription</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Connexion avec Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                <?php
                     if(isset($_GET['code'])){
                        //$token= $client->fetchAccessTokenWithAuthCode($_GET['code']);
                        $client->authenticate($_GET['code']);
                        $access_token = $client->getAccessToken();
                        $client->setAccessToken($access_token);
                        //$token=$client->getAccessToken();
                        $client->setAccessToken($access_token);

                        $oauth = new Google\Service\Oauth2($client);
                        $info = $oauth->userinfo->get();
                        //var_dump($info);

                        $_SESSION['auth'] = true;
                        $_SESSION['name'] = $info->name;
                        header("location:index.php");
                        //echo $_SESSION['name'];

                     }else{
                        echo '<a href="'. $client->createAuthUrl().'" class="field google">
                                <img src="asset/images/google.png" alt="" class="google-img">
                                <span>Connexion avec Google</span>
                            </a>';
                    }
                    ?>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Inscription</header>
                    <form action="#" method="POST">
                        
                        <div class="field input-field">
                            <input type="text" placeholder="Nom d'utilisateur" name="username" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Definir un mot de passe" name="password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirmer le mot de passe" name="rpassword" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button name="inscription">S'inscrire</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Vous avez deja un compte ? <a href="#" class="link login-link">Connexion</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Connexion avec Facebook</span>
                    </a>
                </div>

                <div class="media-options">

                <?php
                     if(isset($_GET['code'])){
                        //$token= $client->fetchAccessTokenWithAuthCode($_GET['code']);
                        $client->authenticate($_GET['code']);
                        $access_token = $client->getAccessToken();
                        $client->setAccessToken($access_token);
                        //$token=$client->getAccessToken();
                        $client->setAccessToken($access_token);

                        $oauth = new Google\Service\Oauth2($client);
                        $info = $oauth->userinfo->get();
                        //var_dump($info);

                        $_SESSION['auth'] = true;
                        $_SESSION['name'] = $info->name;
                        header("location:index.php");
                        //echo $_SESSION['name'];

                     }else{
                        echo '<a href="'. $client->createAuthUrl().'" class="field google">
                                <img src="asset/images/google.png" alt="" class="google-img">
                                <span>Connexion avec Google</span>
                            </a>';
                    }
                    ?>
                </div>
                
            </div>
        </section>

        <!-- JavaScript -->
        <script src="asset/js/script.js"></script>
    </body>
</html>