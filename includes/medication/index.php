<?php
ob_start();
session_start();
$p_date =  $_GET['p_date'];
$user_id =  $_GET['user_id'];
$_SESSION['user_id'] = $user_id;
$_SESSION['p_date'] = $p_date;

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Patient Info Managment System</title>
  
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
 
</head>

<body><br>
  <div class="text-center"><h6>Medication/Test</h6></div>


  <form name="form1" class=" border border-light p-5">

 
  <div class="row">
    <div class="col-md-3 form-group">
       <label for="txtcityins">Medication/Test:</label>
    <input type="text" id="txtnameins" class="form-control" placeholder="Medication/Test"> 

</div>
  <div class="col-md-3 form-group">
    <label for="txtcityins">Frequency:</label>
  
<input type="text" id="txtcityins" class="form-control" placeholder="Frequency"> 
 
  </div>
  <div class="col-md-3 form-group">
     <label for="txtcityins">Number in weeks/days:</label>
    <input type="text" id="txtmedins" class="form-control" placeholder="Number in weeks/days">
</div>
 
  <div class="col-md-2 form-group">
  <label for="created_at_lt">&nbsp;</label>
<input type="button" id="but1" class="btn bt" value="Add Parameters" onClick="ins();">  
  </div>

  </div>  
 



   
</form>

<!-- Default form login -->

<!-- Default form login -->



<div id="disp_data"></div>

 <div style="text-align: right; margin-right: 50px;"><button class="btn bt" onclick="goBack()">Go Back</button></div> 
    <script type="text/javascript">

  function goBack() {
  window.history.back();
}
</script>
<style type="text/css">
.bt{
  margin-top: 30px;
}
   
   
    
    .tables{
        width: 100%;
        margin-bottom: 20px;
    border-collapse: collapse;
    }
    .tables, th, td{
        
    }
    .tables th, table td{
        padding: 10px;
        text-align: left;
    }
</style>


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

medid="med"+a;
txtmedid="txtmed"+a;
var med=document.getElementById(medid).innerHTML;
document.getElementById(medid).innerHTML="<input type='text' value='"+med+"' id='"+txtmedid+"'>";


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

var medid = "txtmed"+b;
var med=document.getElementById(medid).value;



update_value(b,name,city,med);
document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";
document.getElementById("name"+b).innerHTML=name;
document.getElementById("city"+b).innerHTML=city;
document.getElementById("med"+b).innerHTML=med;
}
function update_value(id,name,city,med)
{
var xmlhttp=new XMLHttpRequest();

  xmlhttp.open("GET","update.php?id="+id+"&name="+name+"&city="+city+"&med="+med+"&status=update",false);
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
var md=document.getElementById("txtmedins").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?nm="+nm+"&ct="+ct+"&md="+md+"&status=ins",false);
  xmlhttp.send(null);
disp_data();
document.getElementById("txtnameins").value="";
document.getElementById("txtcityins").value="";
document.getElementById("txtmedins").value="";

}
</script>

 
</body>

</html>