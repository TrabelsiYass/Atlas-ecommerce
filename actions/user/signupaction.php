<?php

require('actions/database.php');

session_start();
if (isset($_POST['valide'])) {
    if(!empty($_POST['name']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']))
    {
        $name = $_POST['name'];
        $last_name = $_POST['last'];
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $phone_number = $_POST['phone'];
    

     // Check if the user has uploaded a profile picture
     if (isset($_FILES['picture']) /*&& !empty($_FILES['picture'])*/) {
        $picture_name = $_FILES['picture']['name'];
        $picture_size = $_FILES['picture']['size'];
        $picture_tmp = $_FILES['picture']['tmp_name'];
     }

    
        // Validate the picture
        if ($picture_size > 500000) {
            echo "File size should be less than 500KB";
            exit;
        }else{$picture_name = 'default.jpg';}
        move_uploaded_file($picture_tmp, "uploads/$picture_name");
        

    

      // Insert the new user into the database
      $signup = $bdd->prepare("INSERT INTO users (name, last_name, email, password, picture, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
      $signup->execute(array($name, $last_name, $email, $password, $picture_name, $phone_number,));


      
      
       header('location: ../../ecommerce1/login.php');
    }
    else 
    {
        echo "<script>var result = prompt('Tous Les sont Obligatoire !');";
        echo "document.write( result);</script>";
        header('location: ../../ecommerce1/signup.php');
    }
    
}

?>
