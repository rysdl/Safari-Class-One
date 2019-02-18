<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:45 AM
 */
if (isset($_GET['id'])){
    extract($_GET);
    $conn = mysqli_connect("localhost","root","","safari");
    $update = mysqli_query($conn,"UPDATE `majina` SET `jina`='$name',`arafa`='$email',`siri`='$pass' WHERE id=$id");
    header("Location:viewUsers.php");
}
?>