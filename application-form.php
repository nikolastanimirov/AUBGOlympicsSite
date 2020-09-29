
<?php
//Validates the User inputs
if (!empty($_POST['Fname'])
    and !empty($_POST['Lname'])
    and !empty($_POST['email'])
    and !empty($_POST['standing'])
    and !empty($_POST['clubs'])
    and !empty($_POST['department'])
    and !empty($_POST['majors'])
    and !empty($_POST['question2'])
    and !empty($_POST['question3'])
    and !empty($_POST['question4'])
    and !empty($_POST['question5'])) {
    $inputFName = $_POST['Fname'];

    $data =
        "1. Name: " . PHP_EOL
        . $_POST['Fname'] . PHP_EOL
        . "2. Last name: \n\n \t" . PHP_EOL
        . $_POST['Lname'] . PHP_EOL
        . "3. Email: \n\n \t" . PHP_EOL
        . $_POST['email'] . PHP_EOL
        . "\f"
        . "4. For which department you are applying? \n\n \t" . PHP_EOL
        . $_POST['department'] . PHP_EOL
        . "\f"
        . "5. What is your current academic standing? \n\n \t" . PHP_EOL
        . $_POST['standing'] . PHP_EOL
        . "\f"
        . "6. What is your current majors or indended major? \n\n \t" . PHP_EOL
        . $_POST['majors'] . PHP_EOL
        . "\f"
        . "7. Are you part of any other club in AUBG? \n\n \t" . PHP_EOL
        . $_POST['clubs'] . PHP_EOL
        . "\f"
        . "8. If you could magically become really good at a certain sport, which one would you choose and why?? \n\n \t" . PHP_EOL
        . $_POST['question2'] . PHP_EOL
        . "\f"
        . "9. A team is usually working at best if it has people that play 4 different roles - a strong leader, the informal leader, the mediator, the punctual executor. Which character fits you the most ?" . PHP_EOL
        . $_POST['question3'] . PHP_EOL
        . "\f"
        . "10. Tell us in no more than 2 words what do you think we do?" . PHP_EOL
        . $_POST['question4'] . PHP_EOL
        . "\f"
        . "11. How would you keep the fire burning without turning into ashes?" . PHP_EOL
        . $_POST['question5'] . PHP_EOL
        . "\f";

    try {
        date_default_timezone_set("Europe/Sofia");
        $file = fopen("Appforms.txt", 'ab');
        fwrite($file, "===========START===========" . " " . date("Y-m-d h:i:sa") . PHP_EOL);
        fwrite($file, $data);
        fwrite($file, "============END============" . PHP_EOL);
        fclose($file);
    } catch (Exception $e) {

    }
    echo "<script>
    alert('Thank you for applying for AUBG Olympics. You will be hearing from us in a couple of days!');
    </script>";
    echo "<script>";
    echo "window.setTimeout(function(){
              // Move to a new location or you can do something else
              window.location.href='#';
          }, 600);</script>";
    die();
} else {
    echo "<script>
        alert('Make sure all fields are filled out. For more infomation, contact us at: aubgolympicscommittee@gmail.com');
        </script>";
    echo "<script>window.setTimeout(function(){
            window.location.href='#';
        }, 600);</script>";
}
?>