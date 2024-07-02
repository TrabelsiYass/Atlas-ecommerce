<?php
require('actions/database.php');

$getallpost=$bdd->query('SELECT * FROM posts ORDER by post_id DESC LIMIT 0,12');
if  (isset($_GET['search']) AND !empty($_GET['search'])){
    $userserch= $_GET['search'];
    $getallpost=$bdd->query('SELECT * FROM posts where subject LIKE "%'.$userserch.'%" OR author_name LIKE "%'.$userserch.'%"');
    $check4=$getallpost->rowcount();
    

}


