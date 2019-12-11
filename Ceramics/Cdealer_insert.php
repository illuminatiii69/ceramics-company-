 <?php
    if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4']) && isset($_POST['t5']) && isset($_POST['t6'])):
    $dealer_id = $_POST['t1'];
    $dname= $_POST['t2'];
    $dealer_email = $_POST['t3'];   
    $address = $_POST['t4'];
    $phone = $_POST['t5'];
    $user_id = $_POST['t6'];

    

   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO DEALERS(dealer_id, dname, dealer_email, address, phone, user_id) VALUES('".$dealer_id."', '".$dname."', '".$dealer_email."', '".$address."','".$phone."','".$user_id."')";

      

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
