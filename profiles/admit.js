$(document).ready(function(){

var pay=$.cookie("pay");
var city=$.cookie("city");
if(pay==0)
{
window.location="http://2016.techkriti.org/picke/form1.php";
}
var name=$.cookie("name");
var rollno=$.cookie("rollno");
var dataString = 'name='+ name + '&rollno='+ rollno;
$.ajax({                                      
      url: 'login.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)

{
if(data=="true")
{

}

else
{
window.location="http://2016.techkriti.org/picke/form1.php";
}

}
});






var time="9:00-12:00 AM";
if((city=='LUCKNOW')||(city=='UJJAIN')||(city=='NAGPUR')||(city=='JAIPUR')||(city=='DELHI')||(city=='GWALIOR')||(city=='BENGALURU')||(city=='PATNA')||(city=='BHOPAL')||(city=='KANPUR'))
{
time="10:00-12:00 AM"}
if((city=='RANCHI')||(city=='KOTA')||(city=='JHANSI')||(city=='INDORE'))
{
time="9:00-11:00 AM"}

if((city=='VARANASI'))
{
time="1:30-3:30 PM"}
 if($.cookie("name")!=null)
{$('.name').text($.cookie("name"));


}
if($.cookie("rollno")!=null)
{$('.rollno').text($.cookie("rollno"));


}
if($.cookie("class")!=null)
{$('.class').text($.cookie("class")+"th");

var pool="";
var classe=$.cookie("class");
if(classe=='9')
{
pool='A';
}

if(classe=='10')
{
pool='A';
}
if(classe=='11')
{
pool='B';
}
if(classe=='12')
{
pool='B';
}
$('.pool').text(pool);
}


if($.cookie("email")!=null)
{$('.email').text($.cookie("email"));


}
if($.cookie("phoneno")!=null)
{$('.phoneno').text($.cookie("phoneno"));


}
if($.cookie("mock")==1)
{$('#score').text($.cookie("score"));
$('#mock').hide();


}

if($.cookie("school")!=null)
{$('.school').text($.cookie("school"));

}
if($.cookie("centre")!=null)
{$('.centre').html($.cookie("centre"));

}
console.log(time);

$('.timings').text(time);


$("ul").hide();
if($.cookie("rollno")!=null)
{var roll=$.cookie("rollno");


}

console.log($.cookie("rollno"));
console.log($.cookie("img"));
 if($.cookie("img")==1)
{
            $('#photo').attr('src', "uploads/"+roll+".jpg");

}


});
