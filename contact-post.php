<?php
    session_start();
    include 'inc/db.php';
   
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $message=$_POST['message'];

   
    $flag=true;
        if(!$name){
         $_SESSION['name_error']="your name field is empty";
            $flag=false;
        }
        if(!$phone_number){
            $_SESSION['phone_number_error']="your phone_number field is empty";
               $flag=false;
           }
           if(!$email){
            $_SESSION['email_error']="your email field is empty";
               $flag=false;
           }
           if(!$message){
            $_SESSION['message_error']="your message field is empty";
               $flag=false;
           }


     if($flag){
        $insert_query= "INSERT INTO messages (name,phone_number, email,message) VALUES ('$name', '$phone_number', '$email', '$message')";
        mysqli_query( $db_connect,$insert_query);

        $_SESSION ['abc']="$name, we received your messsage, I will contact you soon!";
        header('location:contact.php');
    }
    else{
        header('location:contact.php');
    }

?>