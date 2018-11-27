<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = 'cars';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(!$conn){
            die('Could not connect: ' . mysqli_error());
         }
         if(isset($_GET['delete'])) {
           $sql = "DELETE FROM cars WHERE id=".$_GET['delete'];
	         $result = mysqli_query($conn,$sql);
         }
         if (isset($_GET['maker'])) {
          $sql = "INSERT INTO cars (id, maker, model, price, year, url)
          VALUES (5, '".$_GET['maker']."','".$_GET['model']."','".$_GET['price']."','".$_GET['year']."','".$_GET['url']."')";
          $result = mysqli_query($conn, $sql);
         }
    $sql = "SELECT * FROM cars";
	$result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
        ?>
<html lang="en">
<head>
<style>
    .cars {
      height: 500px;
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
    }
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display: flex">
    <form action="Task3.php" style="margin-right: 50px">
      <h1>Admin Page</h1>
      <table>
            <tr>
                <td>Maker: </td>
                <td><input type="text" name="maker">
            </tr>
            <tr>
                <td>Model:</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td><input type="number" name="year"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Image(URL):</td>
                <td><input type="text" name="url"></td>
            </tr>
        </table>
        <input type="submit" value="Add new">
    </form>
    <div class="cars">
        <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='car'>";
            echo "<img src='" . $row['url'] . "' style='width: 100px; height: 60px'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['maker']. ' ' .$row['model']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Price:</div><div>"  .$row['price']. '$</div></div>';
            echo "<div class='row'><div class='name'>Year:</div><div>" .$row['year']. '</div></div>';
            echo "<div class='row'><a href='Task3.php?delete=".$row['id']."'  >Delete</a>"."</div></div></div></div>"; 
    }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>