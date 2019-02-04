<?php
    include ('model\modelBillet.php');
    include ('view\viewBillet.php');
?>

<?php 
    affichageHeader();
    $billet = new Billet();
    $requete = $billet->getAllBillet();

    affichageBody($requete,$billet);

    affichageFooter();
             
?>
