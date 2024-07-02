<?php 
try{

 
   $bdd=new PDO('mysql:host=localhost:3306;dbname=forum2;charset=utf8;','root','');
}catch(Exception $e){
    die(" une erreur a ete trouvé ". $e->getMessage()  );
}
  