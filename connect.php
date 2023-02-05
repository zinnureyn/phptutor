<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=phptutor;charset=utf8",'root','00000000');
    #echo "başarılı";

}catch(PDOException $e){
    echo $e ->getMessage();
}



?>