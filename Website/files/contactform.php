<?php 

    include("../config/db.php");


  
    if(isset($_POST['submit'])){


        
        $name=  $_POST['name'];
        $email= $_POST['email'];
        $subject=  $_POST['subject'];
        $message=  $_POST['message'];
        
        
        
        
        

         $insert = $con->query("INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
         
        if($insert){
            header("location:../login.php?msg=reg");
        }
         }
         else {
            header("location:../contact.php?msg=errorpass");
         }
     
    
        
        
    

?>