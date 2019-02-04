<?php
include ('Connexion.php');
 $db = Connexion::getConnexion();
//isset teste l'existence des variables dans le Post ou le Get;
if(isset($_GET['idBillet']) && isset($_POST['pseudo']) && isset($_POST['commentaire'])){
     $idBillet = intval($_GET['idBillet']) ;
     $auteurCommentaire = $_POST['pseudo'];
     $commentaire = $_POST['commentaire'];
     $dateCommentaire = date("Y-m-d H:i:s");
//requête preparée d'insertion;
     $requete =$db->prepare('INSERT INTO commentaire(dateCommentaire,
     auteurCommentaire,contenuCommentaire,idBillet) values(?,?,?,?)');
//exécution de la requête préparée en passant les valeurs dans un array);
     $requete->execute(array($dateCommentaire,$auteurCommentaire,$commentaire,$idBillet));
     
//redirection à la page index.php;
     header('Location:../index.php');
}else{
     header('Location:../index.php');
}





?>