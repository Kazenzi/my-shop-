<?php
require 'config.php';
require 'w2header.php';
echo '<h1>our products</h1>';
$sql ="SELECT * FROM `Buy` WHERE 1";
$Buy = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($Buy)) {
    echo "<div class='card'>";
    $Buy_id = $row ['id'];
    echo "<a href='w2details.php?id=$Buy_id'>";
    echo $row['name'];
    echo $row['price'];
    echo $row['color'];
    echo $row['description'];
    echo $row['condition'];


    echo "</a>";
    echo "<a href='w2delete.php?id=$Buy_id'>delete<a/>";
    echo '
</div>';
    echo '<br>';
}
    ?>