<a href="Task2.php?category=sport">Sport news</a> | <a href="Task2.php?category=politics">Politic news</a><br/><br/>
<a href="Task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="Task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = "sport";
if(!empty($_GET["category"])){
    $category = $_GET["category"];
    if(!empty($_GET["format"])){
        echo json_encode($news[$category]);
    }
    else{
        foreach($news[$category] as $new){
            echo $new . "<br>";
        }
    }
}
?>