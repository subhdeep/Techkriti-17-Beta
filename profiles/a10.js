$(document).ready(function(){
var name,rollno,phoneno,school,email,classe,city="";
 if($.cookie("name")!=null)
{$('#name').val($.cookie("name"));

name=$.cookie("name");
}
if($.cookie("rollno")!=null)
{$('#rollno').val($.cookie("rollno"));

rollno=$.cookie("rollno");
}
if($.cookie("city")!=null)
{$('#city').val($.cookie("city"));

city=$.cookie("city");
}
if($.cookie("class")!=null)
{$('#class').val($.cookie("class"));

classe=$.cookie("class");
}
if($.cookie("email")!=null)
{$('#email').val($.cookie("email"));
email=$.cookie("email");

}
if($.cookie("phoneno")!=null)
{$('#phoneno').val($.cookie("phoneno"));

phoneno=$.cookie("phoneno");
}
if($.cookie("mock")==1)
{$('#score').val($.cookie("score"));
$('#mock').hide();


}
if($.cookie("mock")==0)
{$('#score_div').hide();


}
if($.cookie("school")!=null)
{$('#school').val($.cookie("school"));

school=$.cookie("school");
}
$("ul").hide();
if($.cookie("rollno")!=null)
{var roll=$.cookie("rollno");


}

console.log($.cookie("rollno"));
console.log($.cookie("img"));
 if($.cookie("img")==1)
{
            $('#image_upload_preview').attr('src', "uploads/"+roll+".jpg");

}
$('#submit').on('click',function()
{
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#phoneno").val();
var city = $("#city").val();
var classe = $("#class").val();
var school = $("#school").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname='+ name + '&email='+ email + '&contact='+ contact + '&city='+ city +'&class='+classe+'&school='+school+'&rollno='+rollno;
console.log(dataString);
$.ajax({                                      
      url: 'submit.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{ 
$.ajax({                                      
      url: 'sent_email1.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {


}
});



window.location="http://2016.techkriti.org/profiles/profile1.html";}
else
{$('#error2').html(data);}
 
    }  });
});
$('#mock').on('click',function()
{
window.location="http://2016.techkriti.org/mock";
});
var cities=$('#city').val();
 $.ajax({                                      
      url: 'getit.php',   
      type: 'POST',              
      data: {"city": cities},                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {
//console.log(element.name);
$('#schood').append("<option value='" + element.name + "'>");

});
        
      } 
    });

$('#city').change(function()
{$('#schood').empty();

var cities=$('#city').val();
 $.ajax({                                      
      url: 'getit.php',   
      type: 'POST',              
      data: {"city": cities},                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {
//console.log(element.name);
$('#schood').append("<option value='" + element.name + "'>");


});
        
      } 
    });
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
