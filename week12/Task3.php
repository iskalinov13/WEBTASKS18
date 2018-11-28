<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}



$sql = 'SELECT * FROM `cars_users` WHERE username = "'.$username.'" and password = "'.$password.'"' ;

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if(sizeof($row) != 0){
    $admin = $row['admin'];
    setcookie('admin',$admin);
    $sql = 'SELECT * FROM `cars` ' ;
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['maker']. " ". $row['model'] . " " . $row['price'] . "<a href='delete.php?id=".$row['id']."'>Delete</a>" ."<br>";
    }
}


mysqli_close($conn);
?>

<form action="Task3.php" method = "post">
    <label for="username">username :</label>
    <input type="text" name="username">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="submit" value = "submit">
</form>