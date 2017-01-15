$(document).ready(function(){
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


 if($.cookie("name")!=null)
{$('#name').text($.cookie("name"));


}
if($.cookie("rollno")!=null)
{$('#rollno').text($.cookie("rollno"));


}
if($.cookie("email")!=null)
{$('#email').text($.cookie("email"));


}
if($.cookie("phoneno")!=null)
{$('#phoneno').text($.cookie("phoneno"));


}
if($.cookie("mock")==1)
{$('#score').text($.cookie("score"));
$('#mock').hide();


}
if($.cookie("mock")==0)
{$('#score_div').hide();


}
if($.cookie("school")!=null)
{$('#school').text($.cookie("school"));


}
$("ul").hide();
if($.cookie("rollno")!=null)
{var roll=$.cookie("rollno");


}
console.log($.cookie("city"));
if(($.cookie("city")=='JHANSI')||($.cookie("city")=='PALA')||($.cookie("city")=='THRISSUR')||($.cookie("city")=='KOTTAYAM')||($.cookie("city")=='KANNUR')||($.cookie("city")=='KANJIRAPALLY')||($.cookie("city")=='THIRUVANANTHAPURAM')||($.cookie("city")=='KANPUR')||($.cookie("city")=='VARANASI')||($.cookie("city")=='DELHI')||($.cookie("city")=='JAIPUR')||($.cookie("city")=='RANCHI')||($.cookie("city")=='PATNA')||($.cookie("city")=='LUCKNOW')||($.cookie("city")=='KOTA')||($.cookie("city")='NAGPUR')||($.cookie("city")='UJJAIN')||($.cookie("city")='BHOPAL')||($.cookie("city")='GWALIOR')||($.cookie("city")='BENGALURU'))
{


}
else
{
$('#admit').hide();
}
if($.cookie("centre")=="")
{
$('#admit').hide();
}
if($.cookie("centre")=="TO BE UPDATED")
{
$('#admit').hide();
}
console.log($.cookie("rollno"));
console.log($.cookie("img"));
 if($.cookie("img")==1)
{
            $('#image_upload_preview').attr('src', "uploads/"+roll+".jpg");

}

$('#mock').on('click',function()
{
window.location="http://2016.techkriti.org/mock";
});

$('#logout').on('click',function()
{
  $.removeCookie("name",{ path: '/' });
        $.removeCookie("rollno",{ path: '/' });
                if($.cookie("school")!=null)
{
                $.removeCookie("school",{ path: '/' });}

 if($.cookie("phoneno")!=null)
{
                $.removeCookie("phoneno",{ path: '/' });}
 if($.cookie("city")!=null)
{
                $.removeCookie("city",{ path: '/' });}

if($.cookie("email")!=null)
{
                $.removeCookie("email",{ path: '/' });}
      if($.cookie("next")!=null)
{
                $.removeCookie("next",{ path: '/' });}
window.location='http://2016.techkriti.org/picke/form1.php';

if($.cookie("pay")!=null)
{
                $.removeCookie("pay",{ path: '/' });}
if($.cookie("score")!=null)
{
                $.removeCookie("score",{ path: '/' });}
if($.cookie("img")!=null)
{
                $.removeCookie("img",{ path: '/' });}


if($.cookie("centre")!=null)
{
                $.removeCookie("centre",{ path: '/' });}
if($.cookie("timing")!=null)
{
                $.removeCookie("timing",{ path: '/' });}
if($.cookie("mock")!=null)
{
                $.removeCookie("mock",{ path: '/' });}

});
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
console.log("fuck");
                $('#image_upload_preview').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#uploa").change(function () {
        readURL(this);
    });

});
