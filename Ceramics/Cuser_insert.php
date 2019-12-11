 <?php
    if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4'])):
    $user_id = $_POST['t1'];
    $uname= $_POST['t2'];
    $address = $_POST['t3'];   
    $contact_no = $_POST['t4'];
    

   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO USER(user_id, uname, address, contact_no) VALUES('".$user_id."', '".$uname."', '".$address."', '".$contact_no."')";

      

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
