<?php 
require('actions/database.php');
require('actions/post/infopostaction.php');
//validiation formulaire 
 if (isset($_POST['valide'])){
     //verfier tous les champs 
if (!empty($_POST['subject'])  || !empty($_POST['message']) || !empty($_POST['price'])){
 //donnee user 
$new_post_subject=$_POST['subject'];
$new_post_message=nl2br($_POST['message']);
$new_post_price=($_POST['price']);




 
$editpostonwebsite = $bdd-> prepare('UPDATE posts set subject=? ,message=?, price=? WHERE post_id=?' ) ;
$editpostonwebsite->execute(array($new_post_subject,$new_post_message,$new_post_price,$idofpost));
header ('Location: myposts.php ');


}
else{
    $errorMsg="bien publié";
}}else{
     $errorMsg= "veillez vompleter tous les champ ";
 }