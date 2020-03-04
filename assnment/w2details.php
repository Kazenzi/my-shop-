<?php
require "w2header.php";
require "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT `id`, `name`, `price`, `color`, `description`, `condition` FROM `Buy` WHERE 1";
    $Buy = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($Buy);
    echo "<div class='card'>";
    echo $row['name'] . '<br>';
    echo $row['price'] . '<br>';
    echo $row['color'] . '<br>';
    echo $row['description'] . '<br>';
    echo $row['condition'] . '<br>';
    echo "</div>";
}



?>
