<?php
if(isset($_POST['fname1']) && isset($_POST['lname1']) && isset($_POST['email1'])){

    $name = $_POST['fname'].$_POST['lname1'];

    $data = 
        " 1. First Name: \n\n \t"   
        . $_POST['fname1']
        . "\n\n2. Second Name: \n\n \t"
        . $_POST['lname1']
        . "\n\n3. E-mail for contact: \n\n \t"
        . $_POST['email1'] 
        . "\f" ;

    $ret = file_put_contents('../../Appforms.txt', $data, FILE_USE_INCLUDE_PATH | FILE_APPEND  ); //FILE_APPEND | LOCK_EX
    if($ret === false) {
        die('There was an error while submiting the application. If the error Persists, contact nnb130@aubg.edu ');
    }
    else {
        echo "<div> Thank you <strong>" , $name , "</strong> ! \n for signing up!  </div>". "<div><br />You'll be redirected in 5 seconds.</div>";
        echo "<script>setTimeout(\"location.href='http://www.aubgolympics.com'; \", 5000);</script>";
    }
}

else {
   die('error');
}
?>