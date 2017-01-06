<?php

$name = $_POST['phpname'];
$email = $_POST['phpemail'];
$message = $_POST['phpmessage'];


if($name && $email && $message){
    
    $con = mysqli_connect('localhost', 'user42xy', 'howie4213peepeela', 'mileschick');

    if (! $con){
        echo ('Could Not Connect To Database');
    }else{
        // $test = mysqli_select_db('contacts', $con);
        
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            echo $email.' doesn\'t look like a valid email address.';
        }else{
            $test_b = mysqli_query($con, "INSERT INTO contacts(name,email,message) VALUES('$name','$email','$message')");
            if($test_b){
                echo "Thanks, ".$name.". We'll be in touch."; 
                mail("mileschick@gmail.com", "CONTACT FROM MILESCHICK.COM", $name.': '.$message, "From:".$email);
            }else{
                echo "something messed up with our DB<br>probably our fault - we'll look into it";
            }
            
        }
        
    }
    
//    $file = "contactrecord.txt";
//
//    $file_open = fopen($file, 'a+');

//    if(!$file_open){
//                    echo '<p>Your Message Has Not Been Sent<br/>';
//                    echo 'The system is down. Please try back later.</p>';
//                    echo '<p><a href="index.php">back</a></p>';
//                    exit;
//                }else{
//                    fwrite($file_open, "$name,$email\n");
//                    echo '<script type=\'text/javascript\'>
//
//                            alert("Thanks "'.$name.');
//                            document.getElementById("feedback").innerHTML = "TEST";
//                          </script>';
//                }
//                fclose($file_open);
    
    
}else{
    echo "please enter a name and email and message<br>come on man, you know how this works";
}


?>