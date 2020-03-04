<?php
require 'header.php';
require 'config.php';
$sql ="INSERT INTO `Buy`(`id`, `name`, `price`, `color`, `description`, `condition`) VALUES (NULL,'card','150','green','nice','fair')";
if ($connection == false){
    echo "connection not successful <br>";
    die("ERROR: ".mysqli_connect_error());
}
$name=$price =$color=$condition =$description ="";
$name_err=$price_err =$color_err =$condition_err =$description_err ="";
if ($_SERVER['REQUEST_METHOD']=='POST')
    $name=safisha($_POST['name']);
    $price=safisha($_POST['price']);
    $color=safisha($_POST['color']);
    $condition=safisha($_POST['condition']);
    $description=safisha($_POST['description']);
if (empty($name)){
    $name_err="please fill in the name";
}
if (empty($price)){
    $name_err="please fill in the price";
}
if (empty($color)){
    $name_err="please fill in the color";
}
if (empty($condition)){
    $name_err="please fill in the condition";
}
if (empty($description)){
    $name_err="please fill in the description";
}
$sql ="INSERT INTO `Buy`(`id`, `name`, `price`, `color`, `description`, `condition`) VALUES (NULL ,'card','150','green','nice','fair')";


if(mysqli_query($connection,$sql)){
    echo "Data inserted  successfully <br>";
}else{
    echo "Data not inserted".mysqli_error($connection);
}
echo '<p>my details<p/>';
echo $name;
echo $price;
echo $color;
echo $description;
echo $condition;
function safisha($data ){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"enctype="multipart/form-data">
    <fieldset>
        <h3>Buy</h3>

        <label for="">name</label><br>
        <input type="text" name="name"><br>
        <span class="error"><?php  ?></span>

        <label for="">price</label><br>
        <input type="text" price="price"><br>

        <label for="">color</label><br>
        <input type="color" name="color"><br>
        <span class="error"><?php ?></span>

        <label for="">description</label><br>
        <input type="text" name="description"><br>
        <span class="error"><?php ?></span>
        <input type="radio" name="condition" value="good" >good
        <input type="radio" name="condition" value="fair">fair
        <input type="radio" name="condition" value="poor">poor
        <button type="submit" > buy</button>


    </fieldset>
</form>

