<?php
require('actions/database.php');
if  (isset($_GET['id']) AND !empty($_GET['id'])){
$idofpost= $_GET['id'];
$checkifpostexist=$bdd->prepare('SELECT * FROM posts where post_id=?');
$checkifpostexist->execute(array($idofpost));
if ($checkifpostexist->rowCount()>0){
    $postinfo = $checkifpostexist->fetch();
    if($postinfo['author_id']==$_SESSION['id']){
        $postsubject=$postinfo['subject']; 
        $postmessage=$postinfo['message'];
        $postdate=$postinfo['date'];
        $postphoto=$postinfo['photo'];
        $postprice = $postinfo['price'];
        $postlocation = $postinfo['location'];


       $postmessage= str_replace('<br />','',$postmessage);
     }else{
        $postsubject='SORRY';
        $postmessage='YOUR ARE NOT THE AUTHOR';


    }
}else{
    $errorMsg="no post found" ;


}

} else{
   $errorMsg="no post found" ;
}