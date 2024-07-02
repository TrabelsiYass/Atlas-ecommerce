<?php
require('actions/database.php');
require('actions/post/showpostaction.php ');
$getallresponse= $bdd->prepare('SELECT * FROM replies where post_id=?  order by reply_id desc ');
$getallresponse->execute(array($idofpost));