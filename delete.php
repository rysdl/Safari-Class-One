<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/28/18
 * Time: 8:32 PM
 */
if (isset($_GET['x'])){
    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "Failed to connect to the DB";
    }else{
        extract($_GET);
        mysqli_query($conn,"DELETE FROM majina WHERE id=$x");
        header("Location:viewUsers.php");
    }
}
?>