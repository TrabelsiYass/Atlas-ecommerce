<?php 
require('actions/database.php');
if (isset($_GET['userID']) and !empty($_GET['userID'])) {
    $idofuser = $_GET['userID'];
    $checkifuserexist = $bdd->prepare('SELECT name FROM users where userID=?');
    $checkifpostexist->execute(array($idofuser));
    if ($checkifpostexist->rowCount() > 0) {
        $userinfo = $checkifuserexist->fetch();
        $username = $username['name'];
        $getallpost = $bdd->prepare('SELECT * FROM post where author_id=?');
        $getallpost->execute(array($idofuser));

    }
}