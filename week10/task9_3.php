<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["cars"])){
  $selected_car = $cars[$_REQUEST["cars"]];
  
}
?>
<html>
<head>
<style>
select{
  width:100%;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>

<form action="task9_3.php" method="post">
    <select name="cars" onchange="this.parentNode.submit()" style="width: 10%">
	    <option value="-1">Select car</option>
      <option value="0">Toyota(2015)</option>
      <option value="1">BMW</option>
      <option value="2">Toyota(2008)</option>
    </select>
    <table>
      <tr>
          <td>Maker:</td>
          <td> <select name="makers" id="makers">
          <?php
        for($i=0;$i<sizeof($makers);$i++){
          echo '<option';
          if($selected_car['maker'] == $makers[$i]){
            echo ' selected ';
          }
          echo '>' . $makers[$i] . '</option>';
        }
      ?>  
          </select>
        </td>
      </tr>
      <tr>
        <td>Year:</td>
        <td><select name="years" id="years">
        <?php
        for($i=2018;$i>1999;$i--){
          echo '<option ';
          if ($selected_car['year'] == $i){
            echo ' selected ';
          }
          echo '>' . ($i) . '</option>';
        }
      ?> 
          </select></td>
      </tr>
      <tr>
        <td>Model:</td>
        <td><input type="text" name="model" value="<?php echo $selected_car['model'] ;?>"/></td>
      </tr>
      <tr>
        <td>Engine:</td>
        <td>
        <?php
        for($i=0;$i<sizeof($engine);$i++){
          echo '<input type="radio" name="engine" ';
          if($selected_car['engine'] == $engine[$i]){
            echo ' checked ';
          }
          echo ' value="'.$engine[$i].'"> '.$engine[$i].'<br>';
        }
      ?>  
        </td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input type="number" name = "price" value="<?php echo $selected_car['price'] ;?>" > </td>
      </tr>
      <tr>
        <td>Additional:</td>
        <td>
        <input type="checkbox" name="additional1" value="yes" <?php if($selected_car!=NULL && in_array('tax', $selected_car['additional'])){echo ' checked ';} ?>> tax payed<br>
       <input type="checkbox" name="additional2" value="yes" <?php if($selected_car!=NULL&& in_array('check',$selected_car['additional'])){echo ' checked ';} ?> > technical check passed<br>
        <input type="checkbox" name="additional3" value="yes" <?php if($selected_car!=NULL&&in_array('investment',$selected_car['additional'])){echo ' |" ';} ?> >doesn't require investment<br>
        </td>
      </tr>
    </table>
    <input type="submit" value="Submit"/>
</form>