<?php

    class Database{
        public $pdo;

        public function consturct(){
            try{
                $link = new PDO('mysql:host=dbProvim','root','');
                $this ->pdo = $link;
            }
            catch (PDOException $exception){
                die($exception ->getMessage());
            }
        }
    }

?>