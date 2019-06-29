<?php
ob_start();
session_start();
$p_date =  $_GET['p_date'];
$user_id =  $_GET['user_id'];
$_SESSION['user_id'] = $user_id;
$_SESSION['p_date'] = $p_date;

?>
<!-- Default form login -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Patient Info Managment System</title>
  
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
<!-- ignore those br, just for stackoverflow full page view -->
</head>

<body><br>
<div class="text-center"><h6>Investigation Parameters</h6></div>
<form name="form1" class=" border border-light p-5">

  <style type="text/css">
    option:nth-child(2), option:nth-child(11), option:nth-child(21), option:nth-child(30), option:nth-child(37) {
    font-weight:bold;
    font-size: 16px;
}

button{

}
  </style>
  <div class="row">
  <div class="col-md-4 form-group">
    <label for="search">Investigation Parameters:</label>
  

  <select type="text" id="txtnameins" class="form-control" placeholder="Investigation Parameters" list="param">

  <option value="Selct an option" selected disabled>Investigation Parameters</option>
  <option value="CBC" disabled="">CBC</option>




<option value="Hb (gm%)">Hb (gm%)</option>
<option value="TC">TC</option>
<option value="DC_P (%)">DC_P (%)</option>
<option value="DC_L (%)">DC_L (%)</option>
<option value="DC_E (%)">DC_E (%)</option>
<option value="ESR (mm/hr)">ESR (mm/hr)</option>
<option value="PCV (%)">PCV (%)</option>
<option value="Platelet Count (Million)">Platelet Count (Million)</option>


<option disabled value="LFT">LFT</option>
<option value="Billirubin(T) (mg%)">Billirubin(T) (mg%)</option>
<option value="Direct (mg%)">Direct (mg%)</option>
<option value="Indirect (mg%)">Indirect (mg%)</option>
<option value="SGOT (IU/L)">SGOT (IU/L)</option>
<option value="SGPT (IU/L)">SGPT (IU/L)</option>
<option value="Protein(T) (gm%)">Protein(T) (gm%)</option>
<option value="Albumin (gm%)">Albumin (gm%)</option>
<option value="Globulin (gm%)">Globulin (gm%)</option>
<option value="Alk'ptase (lu/l)">Alk'ptase (lu/l)</option>

<option disabled value="Other Blood">Other Blood</option>
<option value="PT Value (sec)">PT Value (sec)</option>
<option value="Control (sec)">Control (sec)</option>
<option value="INR Value">INR Value</option>
<option value="RBS (mg%">RBS (mg%)</option>
<option value="Urea (mg%)">Urea (mg%)</option>
<option value="Creatinine (mg%)">Creatinine (mg%)</option>
<option value="NA+ (mEq/L)">NA+ (mEq/L)</option>
<option value="K+ (mEq/L)">K+ (mEq/L)</option>

<option disabled value="Urine Analysis">Urine Analysis</option>
<option value="U Protein">U Protein</option>
<option value="U Sugar)">U Sugar</option>
<option value="Puscells (/hpf)">Puscells (/hpf)</option>
<option value="RBC (/hpf)">RBC (/hpf)</option>
 <option value="U Epi cells (/hpf)"> U Epi cells (/hpf)</option>
<option value="U Urates">U Urates</option>

<option disabled value="Others">Others</option>
<option value="Ultrasound">Ultrasound</option>
<option value="Endoscopy">Endoscopy</option>
<option value="Others">Others</option>
</select>
  </div>
  <div class="col-md-4 form-group">
    <label for="txtcityins">Value:</label>

<input type="text" id="txtcityins" class="form-control" placeholder="Value" >  </div>
 
  <div class="col-md-2 form-group">
  <label for="created_at_lt">&nbsp;</label>
<input type="button" id="but1" class="btn bt" value="Add Parameters" onClick="ins();">  
  </div>

  </div>  
 



   
</form>
<!-- Default form login -->



<div id="disp_data" ></div>

<div style="text-align: right; margin-right: 50px;"><button class="btn " onclick="goBack()">Go Back</button></div> 
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


<!-- Footer -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  

  <!-- Bootstrap tooltips -->
  

  <!-- Bootstrap core JavaScript -->
 
</body>

</html>


