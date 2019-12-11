 <?php
    if(isset($_POST['t1']) && isset($_POST['t2'])):
    $dealer_id = $_POST['t1'];
    $phone= $_POST['t2'];
   
   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO contacts(dealer_id,phone) VALUES('".$dealer_id."', '".$phone."')";

      

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
