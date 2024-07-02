<?php 
require('actions/database.php');
if  (isset($_GET['id']) AND !empty($_GET['id'])){
    $likescount=$bdd ->prepare('SELECT * FROM likes WHERE post_id=?');

$idofpost= $_GET['id'];
$likescount->execute(array($idofpost));
$likescount=$likescount->rowCount();
$checkifpostexist=$bdd->prepare('SELECT * FROM posts where post_id=?');
$checkifpostexist->execute(array($idofpost));
if ($checkifpostexist->rowCount()>0){
    $postinfo = $checkifpostexist->fetch();
        $postsubject=$postinfo['subject'];
        $postmessage=$postinfo['message'];
        $postauthor=$postinfo['author_id'];
        $postauthorID=$postinfo['author_name'];
        $postdate=$postinfo['date'];
        $postphoto=$postinfo['photo'];
        $postprice=$postinfo['price'];
        $postlocation=$postinfo['location'];
        $postid=$postinfo['post_id'];


    }
}else{
    $errorMsg="no post found" ;
}
