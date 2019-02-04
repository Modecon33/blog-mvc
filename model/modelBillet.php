<?php
include ('Connexion.php');

class Billet{
    function getAllBillet(){
        $db = $this->callConnexion();
        $requete = $db->query('select * from billet');
        
        return $requete;
    }
    function getAllCommentaireBillet($idBillet,$donnee){
        $db = $this->callConnexion();
        $reqCommentaire = $db->prepare('select * from commentaire where idBillet=?');
        $reqCommentaire->execute(array($donnee['idBillet']));

        return $reqCommentaire;
    }
    function callConnexion(){
        $db = Connexion::getConnexion();
        return $db;
    }
}
?>