<?php 
    if(!empty($_POST['fname1']) and !empty($_POST['lname1']) and !empty($_POST['mail1'])){
    $to = "aubgolympicscommittee@gmail.com"; // this is your Email address
        
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $first_name2 = $_POST['fname2'];
    $last_name2 = $_POST['lname2'];
    $from2 = $_POST['mail2'];

   	$subject = "Table Tennis";
  	$message = "Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL." "."Player 2: " . $first_name2 . " " . $last_name2. " ". $from2.PHP_EOL;

    $headers = "From:" . $from1;
  	//mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/table.txt", 'ab');
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
    }, 2000);</script>";
    die();
    } else {
    echo "Empty Fields";
    }