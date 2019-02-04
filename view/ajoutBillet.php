<?php
include ('../model/modelBillet.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
    <h3><a href="../index.php">Cliquer ici pour retourner à Index du site SVP</a>
        <form action="../model/insertBillet.php" method="POST">
            <p>Titre Billet : <input type="text" name="titre" value="titre de votre article"></p>
            <p>Contenu Article : <input type="Text" name ="contenu" value="description de l'article"></p>
            <input type="submit" value="Add Article">
        </form>
        <h1>La Liste des articles </h1>
        <?php 
              $requete = getAllBillet(); 
              echo "<table border=1> <th>id Billet</th><th>date </th><th>titre</th><th>Description</th>";
                while($donnee = $requete->fetch()){ 
                    
                    echo "<tr><td>".  $donnee['idBillet']."</td>
                              <td> ".$donnee['dateBillet']."</td>
                              <td> ".$donnee['titreBillet']."</td>
                              <td> ".$donnee['ContenuBillet']."</td>";
                }
            ?>

     
 </body>
 </html>