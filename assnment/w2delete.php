<?php
require 'config.php';
require 'w2header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql ="DELETE FROM `Buy` WHERE  id = $id";

if (mysqli_query($connection,$sql)){
    header("location:w2index.php");
}

}
?>
