<?php 
require('actions/database.php');

if(isset($_POST['Submited'])){
    if(!empty($_POST['Myname']) && !empty($_POST['desire']) && !empty($_POST['message'])) {
        $Myname = $_POST['Myname'];
        $desire = $_POST['desire'];
        $msg = $_POST['message'];

        $insert = $bdd->prepare("INSERT INTO auth (Commenter, Desire , Commentaire)VALUES(?,?,?) ");
        $insert ->execute(array($Myname,$desire,$msg));
    }
}else{
     $errorMsg= "veillez completer tous les champ ";
     echo $errorMsg;
}
?>