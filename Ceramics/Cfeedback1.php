 <?php
    if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4'])):
    $email = $_POST['t1'];
    $fdate = $_POST['t2'];
    $subject = $_POST['t3'];   
    $user_id = $_POST['t4'];
    

   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO FEEDBACK(email, fdate, subject, user_id) VALUES('".$email."', '".$fdate."', '".$subject."', '".$user_id."')";

      

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully posted';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
    ?>
