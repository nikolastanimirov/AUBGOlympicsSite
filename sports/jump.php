<?php
if(isset($_POST['fname1']) && isset($_POST['lname1']) && isset($_POST['mail1'])){
$to = "aubgolympicscommittee@gmail.com"; // this is your Email address
       
      
      $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $subject = "Long Jump";
  	$message = "Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL;

    $headers = "From:" . $from1;
  	mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/jump.txt", 'ab');
    fwrite($file, "===========START===========".PHP_EOL);
    fwrite($file, $message);
    fwrite($file, "============END============".PHP_EOL);
    fclose($file);
    }
    catch(Exception $e){
      
    }
    echo "Thank you for registering! You will now be redirected";
    echo "<script>";
    echo "window.setTimeout(function(){
        // Move to a new location or you can do something else
        window.location.href='http://www.aubgolympics.com/sports.html';
    }, 2000);</script>";die();
    } else {
    echo "Empty Fields";
    }
   
?>


 