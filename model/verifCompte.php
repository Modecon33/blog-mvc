<?php
include ('Login.php');
        
    if(isset($_POST['login']) && isset($_POST['pwd'])){
        $log =trim($_POST['login']);
        $pass= trim($_POST['pwd']);
        $login = new Login($log,$pass);
    
      if( $login->isAccountExist($login->getLogin() ,$login->getPwd())==1){
           header('Location:../view/ajoutBillet.php');
       }else{
           header('Location:../index.php');
       }
    }else{
        header('Location:../index.php');
    }
?>    
    