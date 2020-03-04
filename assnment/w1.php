<?php
//CONNECTING TO THE DATABASE
$hostname ="localhost";
$username="root";
$password = "";
$databasename ="demo2";
//To connect to a database use the php function called myssqli_connect()
//mysqli function returns a boolean datatype
$connection = mysqli_connect($hostname,$username,$password,$databasename);

//check connection
if ($connection == false){
    echo "connection not successful <br>";
    die("ERROR: ".mysqli_connect_error());
}
//inserting data into a table
$sql ="INSERT INTO `buy`(`id`, `name`, `price`, `color`, `description`, `condition`) VALUES ('NULL','name','price','color','description','condition')";
if(mysqli_query($connection,$sql)){
    echo "Data inserted  successfully <br>";
}else{
    echo "Data not inserted".mysqli_error($connection);
}
//1.create variables that will show received data
$name=$price =$color=$condition =$description ="";
//2.create variables that will store error data
$name_err=$price_err =$color_err =$condition_err =$description_err ="";
function safisha($data ){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//method check
if ($_SERVER['REQUEST_METHOD']=='POST')
    //Clean data
        $name=safisha($_POST['name']);
        $price=safisha($_POST['price']);
        $color=safisha($_POST['color']);
        $condition=safisha($_POST['condition']);
        $description=safisha($_POST['description']);

//check if data is empty
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
//inserting data into a table
$sql ="INSERT INTO `buy`(`id`, `price`, `color`, `description`, `condition`) VALUES (NULL,'card','150','blue','fair')";
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
