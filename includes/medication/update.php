<?php
ob_start();
session_start();
$user_id = $_SESSION["user_id"];
$p_date = $_SESSION["p_date"];

$status=$_GET["status"];
if($status=="disp")
{
include "db.php";
$res=mysqli_query($link,"select * from investigation where user_id='$user_id' and p_date='$p_date'");

echo "<table>";
?>



<?php
while($row=mysqli_fetch_array($res))
{



echo "<tr>";
?>
<div class="">

<?php
echo "<td>"; ?><h5><div  id="name<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></div></h5><?php  echo "</td>"; 
echo "<td>"; ?><h6><div style="" id="city<?php echo $row["id"]; ?>"><?php echo $row["detail"]; ?></div></h6><?php  echo "</td>";
?><td>
<input type="button" class="btn" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="edit" onClick="aa(this.id)"> </td>
<?php
echo "<td>"; ?> <input class="btn" type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="delete" onClick="delete1(this.id)"> <?php echo "</td>";
 ?> 

</div>
<td><input type="button" class="btn" id="update<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="update" style="visibility:hidden " onClick="bb(this.name)"> </td>

<?php echo "</td>";


echo "</tr>";


}
echo "</table>";
}

if($status=="update")
{
$id=$_GET["id"];
$name=$_GET["name"];
$city=$_GET["city"];

$name=trim($name);
$city=trim($city);

include "db.php";

$res=mysqli_query($link,"update investigation set name='$name',detail='$city' where id=$id");



}


if($status=="delete")
{
$id=$_GET["id"];

include "db.php";

$res=mysqli_query($link,"delete from investigation where id=$id");

}

if($status=="ins")
{
$nm=$_GET["nm"];
$ct=$_GET["ct"];
include "db.php";

$res=mysqli_query($link,"INSERT INTO investigation
VALUES (NULL,'$user_id','$nm','$ct','$p_date','0')");
}

?>