<?php
    function openConnection(){
        try{
            $connect = new  PDO('mysql:host=localhost;dbname=learnning_db','root','') ;
            return  $connect;
        }catch(PDOException $e){
            echo "<pre>";
            print_r($e);
            echo "</pre>";
            //echo "erreur de connection a  la base de donner ";
        }
    }
     function debug($arg, $die=true)
     {
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
        if($die)
        die;
     }
    