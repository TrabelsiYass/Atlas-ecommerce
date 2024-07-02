<?php
require('actions/database.php');



if (isset($_SESSION['id'])) {
   
    // rest of your code here
    echo $_SESSION['id'];

// Validate the form
if (isset($_POST['valide'])) {
    // Check all fields
    if (!empty($_POST['subject']) && !empty($_POST['message'])) {
        // Get form data
        $subject = $_POST['subject'];
        $message = nl2br($_POST['message']);
        $author_name = $_SESSION['name'];
        $post_author_id = $_SESSION['id'];
        $date = date('Y-m-d H:i:s');  
        $location = $_POST['myCountry'];
        $price = $_POST['price'];
        

        if (isset($_FILES['picture']) && !empty($_FILES['picture'])) {
            $picture_name = $_FILES['picture']['name'];
            $picture_size = $_FILES['picture']['size'];
            $picture_tmp = $_FILES['picture']['tmp_name'];
            echo 'Picture Inserted';
    
            // Validate the picture
            if ($picture_size > 550000) {
                echo "File size should be less than 500KB";
                exit;
            }
    
            // Move the picture to the uploads directory
            move_uploaded_file($picture_tmp, "uploads/$picture_name");
            echo 'uploaded';
        } else {
            $picture_name = 'pngegg.png';
            echo $picture_name;
            
        }

        // Insert post into database
        $insert_post = $bdd->prepare("INSERT INTO posts (subject, message, author_id, author_name, date, photo, price, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_post->execute(array($subject, $message, $post_author_id, $author_name, $date, $picture_name, $price, $location));
        
    }header('location: ../../ecommerce1/index.php');

    
}}
?>
