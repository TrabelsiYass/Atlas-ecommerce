<?php 
require('actions/database.php');

$checkifuserexist= $bdd->prepare('SELECT author_id FROM posts where post_id=? ');
$checkifuserexist->execute(array($idofpost));
if ($checkifuserexist->rowCount()>0){
    $userinfoo = $checkifuserexist->fetch();
    $user_id= $userinfoo['author_id'];

$checkifuserexistt= $bdd->prepare('SELECT * FROM users where user_id=?');
$checkifuserexistt->execute(array($user_id));
if ($checkifuserexistt->rowCount()>-1){
    $userinfo = $checkifuserexistt->fetch();
    $username=$userinfo['name'];
    $userlast=$userinfo['last_name'];
    $userphone=$userinfo['phone_number'];
    $userphoto=$userinfo['picture'];

     
    } }

