<?php
$usernames = ["billgates","johndoe","stevejobs"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(!empty($_POST['username'])){
		if(in_array($_POST['username'],$usernames)){
			echo '<div class="error"> User '.$_POST['username'].' is already reserved</div>';
		}
		else{
			array_push($usernames,$_POST['username']);
		}
	}
	else{
		echo '<div class="error"> Username shoud not be empty</div>';
	}
	if(!empty($_POST['password'])&&!empty($_POST['confirm_password'])){
		if($_POST['password']!=$_POST['confirm_password']){
			echo '<div class="error">Password and Confirm Password does not equal to each other</div>';
	
		}
	}
	else{
		if(empty($_POST['password'])&&empty($_POST['confirm_password'])){
			echo '<div class="error">Password and Confirm Password should not be empty</div>';
		}
		elseif(empty($_POST['password'])){
			echo '<div class="error"> Password shoud not be empty</div>';
		}
		else{
			echo '<div class="error"> Password Confirm shoud not be empty</div>';
		}
	}
}

?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action="task9_1.php" method="post">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"/> </td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"/>  </td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="confirm_password" />  </td>
		</tr>
	
</table>
<input type="submit" name="submit" value="Submit" />
	
</form>
</body>
</html>