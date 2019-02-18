<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/28/18
 * Time: 7:22 PM
 */
if (isset($_POST['btnsubmit'])){
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $encpassword = md5($password);

    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "Failed to Connect to the DB";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encpassword')");
        if (!$insert){
            echo "Failed to save";
        }else{
            echo "$name Saved Successfully";
            echo "<a href='userSave.php'>Add User</a>";
        }
    }
}

?>