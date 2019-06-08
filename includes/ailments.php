
<!-- Default form login -->
<form name="form1" class="text-center border border-light p-5">
	

    <input type="text" id="txtnameins" class="form-control mb-4" placeholder="Ailment Name" list="ail">
<datalist id="ail">
  <option value="Headache">
  <option value="Fever">
  <option value="ChickenPox">
  <option value="Diabetis">
  <option value="Safari">
</datalist>


<input type="text" id="txtcityins" class="form-control mb-4" placeholder="Ailment Text">
<input type="button" id="but1" class="btn" value="Add Ailment" onClick="ins();">

  

    
</form>
<!-- Default form login -->



<div id="disp_data"></div>




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