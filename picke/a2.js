$(document).ready(function(){


var name="";var roll="";var email=""; 
   if($.cookie("name")!=null)
{$('#name').attr("value",$.cookie("name"));
name=$.cookie("name");


}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';
}
   if($.cookie("rollno")!=null)
{$('#rollno').attr("value",$.cookie("rollno"));
 roll=$.cookie("rollno");
}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';
}

var pay=0;
$.ajax({                                      
      url: 'payd.php',   
      type: 'POST',              
      data: "",                    
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{ 
pay=1;
$('#pay').text("ALREADY PAID");

}



}
});


if($.cookie("email")!=null)
{
 email=$.cookie("email");
}


$('#pay').on('click',function()
{
if(pay!=1)
{
window.location="https://www.townscript.com/e/tosc16/booking?TOSC'16=1&name="+name+"&emailid="+email+"&cq1="+roll;}
});
/*$('#butty').on('click',function(){

        $.removeCookie("name");
        $.removeCookie("rollno");
                if($.cookie("school")!=null)
{
                $.removeCookie("school");}

    
window.location='http://2016.techkriti.org/tosc1';
    });*/

});
