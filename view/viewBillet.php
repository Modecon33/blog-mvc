                   
 <?php
function affichageBody($requete,$billet){

    while($donnee = $requete->fetch()){
?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $donnee['titreBillet'] ?></h1>
            <time><?= $donnee['dateBillet'] ?></time>
        </header>
         <p><?= $donnee['ContenuBillet'] ?></p>
                       
            <?php  
                $idBillet = $donnee['idBillet'];                       
                $reqCommentaire = $billet->getAllCommentaireBillet($idBillet,$donnee);

                while($commentaire = $reqCommentaire->fetch())
                    {
                    echo '<p><em>' .$commentaire['auteurCommentaire'] .'</em> dit :'.
                                    $commentaire['contenuCommentaire'] .'<br>' .
                                        $commentaire['dateCommentaire'] .'</p>'; 
                    }
                    echo "
                        <form action=\"model/ajouterCommentaire.php?idBillet=". $donnee['idBillet']." \" method=\"POST\">
                        <input type=\"submit\" value=\"Ajouter Commentaire\"><br>
                        <input type=\"text\" value=\"Votre pseudo\" name=\"pseudo\"><br>
                        <textarea row=\"5\" clos=\"60\" name=\"commentaire\">Votre commentaire </textarea>
                        </form>";

            ?>          
        </article>
            <hr/>
<?php 
    }
} 

function affichageHeader(){
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css\index.css">
            <title>Mon Blog</title>
        </head>
        <body>
            <div id="global">
                <header>
                        <a href="view\LoginVue.php"><h1 id="titreBlog">Mon Blog</h1></a>
                        <p>Je vous souhaite la bienvenue sur Mon blog.</p>
                </header>
                <div id="contenu">
<?php           
}
function affichageFooter(){
    ?>
            </div> <!-- #contenu -->

            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div>
        </body>
        </html>
<?php
}
?>