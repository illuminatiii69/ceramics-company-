 <?php
    if(isset($_POST['tile_id']) && isset($_POST['size']) && isset($_POST['tile_name']) && isset($_POST['category']) && isset($_POST['dealer_id'])):
    $tile_id = $_POST['tile_id'];
    $size= $_POST['size'];
    $tile_name = $_POST['tile_name'];   
    $category = $_POST['category'];
    $dealer_id= $_POST['dealer_id'];
    

   
    $link = new mysqli('localhost','root','','ceramics');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO TILE_MASTER(tile_id, size, tile_name, category, dealer_id) VALUES('".$tile_id."', '".$size."', '".$tile_name."', '".$category."', '".$dealer_id."')";

      

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
