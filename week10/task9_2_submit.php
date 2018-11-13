<?php
if(!empty($_REQUEST['maker'])&&!empty($_REQUEST['model'])){
    $maker= $_REQUEST['maker'];
    $model =$_REQUEST['model'];
    echo("You added new item: <b>$maker $model</b><br />");
}
if(!empty($_REQUEST['year'])){
    $year = $_REQUEST['year'];
    if(2018-$year!=0){
        $diff=2018-$year;
        echo("produced in $year ($diff years old) with <b>" . $_REQUEST['engine'] . "</b> engine </br>");
    }
    else{
        echo("produced in $year with " . $_REQUEST['engine'] . " engine </br>");
    }
}

$additional1="yes";
$additional2="yes";
$additional3="yes";
if(empty($_REQUEST['additional1'])){
    $additional1 = "no";
} 
if(empty($_REQUEST['additional2'])){
    $additional2 = "no";
} 
if(empty($_REQUEST['additional3'])){
    $additional3 = "no";
}
echo 'Tax payed : <b>'.$additional1.'</b></br>';
echo 'Technical check passed :<b>'.$additional2.'</b></br>';
echo 'Doesnt require investment :<b>'.$additional3.'</b></br>';
echo '<b>$'.$_REQUEST['price'];

?>