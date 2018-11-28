<?php
if (isset($_GET["name"])){
    setcookie("name",$_GET["name"]);
    echo "Hello ".$_COOKIE["name"];
}
else if (!isset($_COOKIE["name"])){
    echo '<form action="Task1.php">';
    echo 'Enter your name:<input type="text" name="name"/>
    ';
    echo '<input type="submit"/>';
    echo "</form>";
}

?>