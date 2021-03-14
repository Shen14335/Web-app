function addcheck()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("result").innerHTML=xmlhttp.responseText;
    }
  };
  
  var checkname = document.getElementById("checkname").value;

  var querytst = "?checkname=" + checkname;
  //alert (name + " " + age);

xmlhttp.open("GET","phpForms/addlist.php" + querytst,true);
xmlhttp.send();
alert ("Checklist " +checkname+ " was added!");

}