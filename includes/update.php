<?php
session_start();
$user_id = $_SESSION["user_id"];
$status=$_GET["status"];

if($status=="disp")
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"jarvis");
$res=mysqli_query($link,"select * from table1 where user_id='$user_id'");

echo "<table>";
?>



<?php
while($row=mysqli_fetch_array($res))
{



echo "<tr>";
echo "<td>"; ?><h5><div id="name<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?> :</div></h5>  <?php  echo "</td>"; 
echo "<td>"; ?><h6><div id="city<?php echo $row["id"]; ?>"> <?php echo $row["detail"]; ?> </div></h6><?php  echo "</td>";
?><td>
<input type="button" class="btn" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="edit" onClick="aa(this.id)"> </td>
<?php
echo "<td>"; ?> <input class="btn" type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="delete" onClick="delete1(this.id)"> <?php echo "</td>";
 ?> 


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


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"jarvis");
$res=mysqli_query($link,"update table1 set name='$name',detail='$city' where id=$id");



}


if($status=="delete")
{
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"jarvis");
$res=mysqli_query($link,"delete from table1 where id=$id");

}


if($status=="ins")
{
$nm=$_GET["nm"];
$ct=$_GET["ct"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"jarvis");
$res=mysqli_query($link,"insert into table1 values('','$user_id','$nm','$ct')");


}

?>