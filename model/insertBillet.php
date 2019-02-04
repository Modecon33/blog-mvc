<?php
include ('Connexion.php');
 $db = Connexion::getConnexion();
//isset teste l'existence des variables dans le Post ou le Get;
if(isset($_POST['titre']) && isset($_POST['contenu'])){
     $titrePost = $_POST['titre'];
     $contenuPost = $_POST['contenu'];
     $datePost= date("Y-m-d H:i:s");
     //requête preparée d'insertion;
     $requete =$db->prepare('INSERT INTO billet(dateBillet,titreBillet,ContenuBillet) 
     values(?,?,?)');
//exécution de la requête préparée en passant les valeurs dans un array);
     $requete->execute(array($datePost,$titrePost,$contenuPost));
     
//redirection à la page index.php;
     header('Location:../view/ajoutBillet.php');
}else{
    header('Location:../view/ajoutBillet.php');
}