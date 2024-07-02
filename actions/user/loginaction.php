<?php 
session_start();


require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])){
     
 //donnee user 
 $email = $_POST['email'];
 $password = $_POST['password'];
//verifier si lutilasteur existe 
$checkifuserexists = $bdd->prepare ('SELECT * from users where email=? AND password=?');
$checkifuserexists->execute(array($email,$password));
//verfifer mdp

if ($checkifuserexists->rowcount()>0){
    $userinfo=$checkifuserexists->fetch();
    
        $_SESSION['auth']= true;
        $_SESSION['id']=$userinfo['user_id'];
        $_SESSION['name']=$userinfo['name'];
        $_SESSION['last_name']=$userinfo['last_name'];
        $_SESSION['email']=$userinfo['email'];
        $_SESSION['picture']=$userinfo['picture'];
        $_SESSION['phone']=$userinfo['phone'];
        
    header("Location: myposts.php");



     

}

else{
    $errorMsg="Wrong Email or Password";
}
    }
 