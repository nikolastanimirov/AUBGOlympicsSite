<?php
if(isset($_POST['fname1']) && isset($_POST['lname1']) && isset($_POST['mail1'])){
    
    if($_POST['age'] == 'kid'){
    $to = "aubgolympicscommittee@gmail.com"; // this is your Email address
         
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $subject = "Marathon";
  	$message = "Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL;

    $headers = "From:" . $from1;
  	mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/marathonkids.txt", 'ab');
    fwrite($file, "===========START===========".PHP_EOL);
    fwrite($file, $message);
    fwrite($file, "============END============".PHP_EOL);
    fclose($file);
    }
    catch(Exception $e){
      
    }
    header('Content-Type: text/html;charset=utf-8');
    echo "Регистрацията протече успешно. Благодарим Ви!";
    echo "<script>";
    echo "window.setTimeout(function(){
        // Move to a new location or you can do something else
        window.location.href='http://www.aubgolympics.com/bg/sports.html';
    }, 2000);</script>";
    die();
    }else if($_POST['age']=='adult'){
      
    $to = "aubgolympicscommittee@gmail.com"; // this is your Email address
         
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $subject = "Marathon";
  	$message = "Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL;

    $headers = "From:" . $from1;
  	mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/marathon.txt", 'ab');
    fwrite($file, "===========START===========".PHP_EOL);
    fwrite($file, $message);
    fwrite($file, "============END============".PHP_EOL);
    fclose($file);
    }
    catch(Exception $e){
      
    }
    header('Content-Type: text/html;charset=utf-8');
    echo "Регистрацията протече успешно. Благодарим Ви!";
    echo "<script>";
    echo "window.setTimeout(function(){
        // Move to a new location or you can do something else
        window.location.href='http://www.aubgolympics.com/bg/sports.html';
    }, 2000);</script>";
    die();
    }
    }
    else {
    echo "Empty Fields";
    }
   
?>


 