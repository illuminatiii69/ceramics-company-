 <?php
    if(isset($_POST['username']) && isset($_POST['password'])):
    $username = $_POST['user_id'];
    $password = $_POST['password'];
   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO USER(username, password,) VALUES('".$user_id."', '".$password."')";

      

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
