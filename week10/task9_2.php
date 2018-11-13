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
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>
<form action="task9_2_submit.php">
    <table>
      <tr>
          <td>Maker:</td>
          <td><select name="maker">
          <?php
          for($i=0;$i<sizeof($makers);$i++){
            if($i==0){
              echo '<option selected="selected">' . $makers[$i] . '</option>';
            }
            else{
              echo '<option>' . $makers[$i] . '</option>';
            }
            
          }
        ?>  
          </select>
        </td>
      </tr>
      <tr>
        <td>Year:</td>
        <td><select name="year">
        <?php
        for($i=2018;$i>1999;$i--){
          echo '<option>' . ($i) . '</option>';
        }
        ?> 
          </select></td>
      </tr>
      <tr>
        <td>Model:</td>
        <td><input type="text" name="model"/></td>
      </tr>
      <tr>
        <td>Engine:</td>
        <td>
        <?php
        for($i=0;$i<sizeof($engine);$i++){
          echo '<input type="radio" name="engine" value="'.$engine[$i].'"> '.$engine[$i].'<br>';
        }
      ?> 
        </td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input type="number" name = "price" > </td>
      </tr>
      <tr>
        <td>Additional:</td>
        <td>
        <input type="checkbox" name="additional1" value="yes"> tax payed<br>
       <input type="checkbox" name="additional2" value="yes"> technical check passed<br>
      <input type="checkbox" name="additional3" value="yes" checked>doesn't require investment<br>
        </td>
      </tr>
    </table>
    <input type="submit" value="Submit"/>
</form>