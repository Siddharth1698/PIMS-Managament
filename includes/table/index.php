<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post">
<div id="disp_data"></div>

<input type="text" id="txtnameins" placeholder="name">
<input type="text" id="txtcityins" placeholder="city">
<input type="button" id="but1" value="insert" onClick="ins();">

</form>
<script type="text/javascript">
disp_data();
function disp_data()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}


function aa(a)
{
nameid="name"+a;
txtnameid="txtname"+a;
var name=document.getElementById(nameid).innerHTML;
document.getElementById(nameid).innerHTML="<input type='text' value='"+name+"' id='"+txtnameid+"'>";

cityid="city"+a;
txtcityid="txtcity"+a;
var city=document.getElementById(cityid).innerHTML;
document.getElementById(cityid).innerHTML="<input type='text' value='"+city+"' id='"+txtcityid+"'>";


updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bb(b)
{
var nameid="txtname"+b;
var name=document.getElementById(nameid).value;

var cityid="txtcity"+b;
var city=document.getElementById(cityid).value;



update_value(b,name,city);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";


document.getElementById("name"+b).innerHTML=name;
document.getElementById("city"+b).innerHTML=city;


}


function update_value(id,name,city)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&name="+name+"&city="+city+"&status=update",false);
  xmlhttp.send(null);

}


function delete1(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_data();
}

function ins()
{

var nm=document.getElementById("txtnameins").value;
var ct=document.getElementById("txtcityins").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?nm="+nm+"&ct="+ct+"&status=ins",false);
  xmlhttp.send(null);


disp_data();

document.getElementById("txtnameins").value="";
document.getElementById("txtcityins").value="";

}
</script>
</body>
</html>
