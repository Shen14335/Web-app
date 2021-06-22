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
  
  var name = document.getElementById("name").value;
   var midname = document.getElementById("midname").value;
    var lastname = document.getElementById("lastname").value;
	 var department = document.getElementById("department").value;
	  var rank = document.getElementById("rank").value;
	   var setusername = document.getElementById("setusername").value;
	    var setpass = document.getElementById("setpass").value;
		 var confpass = document.getElementById("confpass").value;

  var querytst = "?name=" + name + "&midname=" + midname + "&lastname=" + lastname + "&department=" + department + "&rank=" + rank + "&setusername=" + setusername + "&setpass=" + setpass + "&rank=" + rank ;
  //alert (name + " " + age);

xmlhttp.open("GET","phpForms/addlist.php" + querytst,true);
xmlhttp.send();
alert ("Checklist " +checkname+ " was added!");

}