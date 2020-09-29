<?php 
    if(isset($_POST['fname1']) and isset($_POST['lname1']) and isset($_POST['mail1']) and isset($_POST['fname2']) and isset($_POST['lname2']) and isset($_POST['fname3']) and isset($_POST['lname3']) and isset($_POST['fname4']) and isset($_POST['lname4']) and isset($_POST['fname5']) and isset($_POST['lname5']) and isset($_POST['fname6']) and isset($_POST['lname6'])){
    //$to = "aubgolympicscommittee@gmail.com"; // this is your Email address
    
    $team_name = $_POST['team_name'];
    
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $first_name2 = $_POST['fname2'];
    $last_name2 = $_POST['lname2'];
    $from2 = $_POST['mail2'];
    
    $first_name3 = $_POST['fname3'];
    $last_name3 = $_POST['lname3'];
    $from3 = $_POST['mail3'];

    $first_name4 = $_POST['fname4'];
    $last_name4 = $_POST['lname4'];
    $from4 = $_POST['mail4'];

    $first_name5 = $_POST['fname5'];
    $last_name5 = $_POST['lname5'];
    $from5 = $_POST['mail5'];

    $first_name6 = $_POST['fname6'];
    $last_name6 = $_POST['lname6'];
    $from6 = $_POST['mail6'];

   	$subject = "Volleyball";
  	$message = "Team: ".$team_name.PHP_EOL."Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL."Player 2: " . $first_name2 . " " . $last_name2. " ". $from2.PHP_EOL."Player 3: " . $first_name3 . " " . $last_name3. " ". $from3.PHP_EOL."Player 4: " . $first_name4 . " " . $last_name4. " ". $from4. PHP_EOL."Player 5: " . $first_name5 . " " . $last_name5. " ". $from5.PHP_EOL ."Player 6: " . $first_name6 . " " . $last_name6. " ". $from6.PHP_EOL;

   // $headers = "From:" . $from1;
  //	mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/volleyball.txt", 'ab');
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
   
?>