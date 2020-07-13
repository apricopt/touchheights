<?php

require './connection.php';

if($conn) {

    if(isset($_POST['contact'])) {
        $name= $_POST['name'];
        $email= $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
       

        $sqlc ="INSERT INTO contact(z_name, z_email, z_subject, z_message)
    VALUES('$name', '$email' , '$subject', '$message')";


        if($conn->query($sqlc)) {

                 header("Location:../index.php?success");
                 
        }else {
            echo "error occured while submission";
        }

    }

}
    
    
    
    
    
    

?>