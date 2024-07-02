<?php 
require('actions/database.php');


//validiation formulaire 
if (isset($_POST['like'])) {
     //verfier tous les champs 
  
 //donnee user 
 $post_id=$_POST['id'];
 $id = $_SESSION['id'];
 $verif= $bdd -> prepare('SELECT * FROM likes WHERE post_id=? AND author_id=?');
 $verif->execute(array($post_id,$id));
 

if($verif->rowCount()>0){
  $deletelike=$bdd ->prepare('DELETE FROM likes WHERE post_id=? AND author_id=?');
  $deletelike->execute(array($post_id,$id));
}else{
  $insertlike=$bdd ->prepare('INSERT INTO likes (post_id,author_id,islike) VALUE(?,?,?)');
  $insertlike->execute(array($post_id,$id,true));
}

}
    