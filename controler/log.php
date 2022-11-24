<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("../includes/config.php");
$email     = $_POST['email'];
$password  = $_POST['password'];
$requete   = $db->prepare("SELECT * FROM utilisateur  WHERE email =:em AND password=:pd");
$requete->execute([
    'em' => $email,
    'pd' => $password]);

$user    =$requete->rowCount();
if($user==1){
    $userinfo                  = $requete->fetch();
    $_SESSION['id_util']   = $userinfo['id_personne'];
    $_SESSION['email']         = $userinfo['email'];
    $_SESSION['profil']        = $userinfo['profil'];
    $_SESSION['nom']           = $userinfo['nom'];
    $_SESSION['prenom']        = $userinfo['prenom'];
    header("location:../DAdmin/index.html");
    exit;
}

else{
        header("location:../pages/acceuil.php?#connex");

}
?>