<?php
if(isset($_POST['realname']) && isset($_POST['e_mail'])) {

    $realname = $_POST['realname'];

    $data = 
        " 1. Name: \n\n \t"   
        . $_POST['realname']
        . "\n\n2. E-mail for contact: \n\n \t"
        . $_POST['e_mail']
        . "\n\n3. What is your current academic standing and chosen majors? \n\n \t"
        . $_POST['standing'] 
        . "\n\n4. What is your idea of AUBG Olympics and why you are interested in applying? \n\n \t"
        . $_POST['idea']
        . "\n\n5. Are you currently involved in any other AUBG club/s or activities? If not, do you have any experience in extracurricular activities? \n\n \t "
        . $_POST['other_clubs']
        . "\n\n6. Is there a department you prefer? Why? \n\n \t"
        . $_POST['department']
        . "\n\n7. What is your favorite sport? Why? \n\n \t"
        . $_POST['sport']
        . "\n\n8. What are you the best at? \n\n \t " 
        . $_POST['best']
        . "\n\n9. If you were an AUBG professor, what subject would you be teaching? Why? \n\n \t"
        . $_POST['professor'] 
        . "\f" ;

    $ret = file_put_contents('../../Appforms.txt', $data, FILE_USE_INCLUDE_PATH | FILE_APPEND  ); //FILE_APPEND | LOCK_EX
    if($ret === false) {
        die('There was an error while submiting the application. If the error Persists, contact nnb130@aubg.edu ');
    }
    else {
        echo "<div> Thank you <strong>" , $realname , "</strong> ! \n If approved, you will be notified via e-mail  </div>". "<div><br />You'll be redirected in 5 seconds.</div>";
        echo "<script>setTimeout(\"location.href='http://www.aubgolympics.com'; \", 5000);</script>";
    }
}

else {
   die('error');
}
?>