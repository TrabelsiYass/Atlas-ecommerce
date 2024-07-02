<?php
require('actions/database.php');
$getallpost= $bdd->prepare('SELECT * FROM posts where author_id=? order by post_id desc ');
$getallpost->execute(array($_SESSION['id']));
if ($getallpost->rowcount()==0){
    $error= "No Items For Sale Yet ! :( ";}

