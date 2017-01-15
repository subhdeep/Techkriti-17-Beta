$(document).ready(function(){
$('#register').on('click',function()
{
var name = $("#name").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var CCity = $("#CCity").val();
var CLocation = $("#CLocation").val();
var CName = $("#CName").val();
var CAddress = $("#CAddress").val();
var CuAddress = $("#CuAddress").val();
var Pincode = $("#Pincode").val();
var CuPincode = $("#CuPincode").val();
var whatsapp = $("#whatsapp").val();
var terms="";
if($('#check').is(':checked'))
{terms=terms+"yes";
}
var skills="";
if($('#video').is(':checked'))
{skills=skills+" video";
}


if($('#content').is(':checked'))
{skills=skills+" content";
}
if($('#poster').is(':checked'))
{skills=skills+" poster";
}
if($('#marketing').is(':checked'))
{skills=skills+" marketing";
}
if($('#publicity').is(':checked'))
{skills=skills+" publicity";
}

if($("#other").val()!="")
{
skills=skills+"   "+$("#other").val();
}
var ans="";
if($('#ans').is(':checked'))
{ans=ans+" yes";
}
else
{ans=ans+" no";}
var appro = $("#appro").val();
var relevent = $("#relevent").val();
var motive = $("#motive").val();
var president = $("#president").val();
var  director = $("#director").val();
//console.log(ans);
//console.log(skills);
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name +'&email='+email +'&mobile='+mobile+'&CCity='+CCity +'&CName='+CName+'&CLocation='+CLocation+'&CAddress='+CAddress+'&CuAddress='+CuAddress+'&CuPincode='+CuPincode+'&Pincode='+Pincode+'&skills='+skills+'&appro='+appro+'&whatsapp='+whatsapp+'&motive='+motive+'&president='+president+'&relevent='+relevent+'&director='+director+'&ans='+ans+'&terms='+terms;
//console.log(dataString);
$.ajax({                                      
      url: 'submit.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)
      {
  //console.log(data);
if(data=="true")
{ alert("You have Successfully Registered");
window.location="http://2016.techkriti.org/";}
else
{$('#error').html(data);}
 
    }  });
});
});
