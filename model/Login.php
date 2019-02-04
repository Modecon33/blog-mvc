<?php
include ('Connexion.php');
    class Login{
        private $login;
        private $pwd;
        function __construct($login,$pwd){
            $this->login = $login;
            $this->pwd =$pwd;
        }
        function getLogin(){
            return $this->login;
        }
        function getPwd(){
            return $this->pwd;
        }
        function connection(){
            $db = Connexion::getConnexion();
            return $db;
        }
        function isAccountExist($login,$pwd){
                $db = self::connection();
                $existe = false;
                $requete = $db->prepare('SELECT * FROM users 
                            WHERE login = ? AND pwd = ?');
                $requete->execute(array($login,$pwd));
                if($requete->rowCount()==1){
                    $existe = true;
                }
            return $existe;
        }
        
    }


?>