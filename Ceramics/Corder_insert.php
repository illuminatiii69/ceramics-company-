 <?php
    if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']) && isset($_POST['t4']) && isset($_POST['t5'])):
    $order_id = $_POST['t1'];
    $order_date= $_POST['t2'];
    $tile_id = $_POST['t3'];   
    $quantity = $_POST['t4'];
    $dealer_id= $_POST['t5'];
    

   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO ORDERS(order_id, order_date, tile_id, quantity, dealer_id) VALUES('".$order_id."', '".$order_date."', '".$tile_id."', '".$quantity."', '".$dealer_id."')";

      

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
