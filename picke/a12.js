$(document).ready(function(){



   if($.cookie("school")!=null)
{$('#school').attr("value",$.cookie("school"));
$('#schools').attr("value",$.cookie("school"));


}
if($.cookie("group")!=null)
{$('#groupy').attr("value",$.cookie("group"));


}
 if($.cookie("class")!=null)
{$('#Class').val($.cookie("class"));
 $('#Classs').val($.cookie("class"));
//alert($('#City').val());
}



   if($.cookie("city")!=null)
{$('#City').val($.cookie("city"));
$('#Citys').val($.cookie("city"));

}

if($.cookie("next")!=null)
{ $('.group-register').slideDown();
$('#register-option').hide();
           $('.register-form').hide();


$('button#register,#next').fadeIn();
           $('button#proceed').hide();

}
var cities="KANPUR";
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

$('#schoods').append("<option value='" + element.name + "'>");
});
        
      } 
    });

$('#City').change(function()
{$('#schood').empty();

var cities=$('#City').val();
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
$('#single-register2').on('click',function()
{
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#contactNo").val();
var city = $("#City").val();
var classe = $("#Class").val();
var school = $("#school").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname='+ name + '&email='+ email + '&contact='+ contact + '&city='+ city +'&class='+classe+'&school='+school;
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
      {}
});



window.location="http://2016.techkriti.org/picke/profile.html";}
else
{$('#error2').html(data);}
 
    }  });
});

$('#register').on('click',function()
{
var name = $("#names").val();
var email = $("#emails").val();
var contact = $("#contactNos").val();
var city = $("#Citys").val();
var classe = $("#Classs").val();
var school = $("#schools").val();
var group = $("#groupy").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname='+ name + '&email='+ email + '&contact='+ contact + '&city='+ city +'&class='+classe+'&school='+school+'&group='+group;
$.ajax({                                      
      url: 'submit1.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{ 
$.ajax({                                      
      url: 'send_email.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {}
});


window.location="http://2016.techkriti.org/picke/full_table.html";}
else
{$('#error').html(data);}
 
    }  });
});
$('#next').on('click',function()
{
var name = $("#names").val();
var email = $("#emails").val();
var contact = $("#contactNos").val();
var city = $("#Citys").val();
var classe = $("#Classs").val();
var school = $("#schools").val();
var group = $("#groupy").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname='+ name + '&email='+ email + '&contact='+ contact + '&city='+ city +'&class='+classe+'&school='+school+'&group='+group;
//console.log(dataString);
$.ajax({                                      
      url: 'submit1.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{ 
$.ajax({                                      
      url: 'send_email.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {}
});


window.location="http://2016.techkriti.org/picke/register.php";}
else
{$('#error').html(data);}
 
    }  });
});

$('#logi').on('click',function()
{
var name = $("#namey").val();
var rollno = $("#rollnoy").val();
// Returns successful data submission message when the entered information is stored in database.
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
//console.log($.cookie("pay"));
if($.cookie("pay")==1)
{
window.location="http://2016.techkriti.org/profiles/profile1.html";
}
else
{
window.location="http://2016.techkriti.org/picke/profile.html";}}
else
{$('#error1').html("INVALID CREDENTIALS!!!");}
 
    }  });
});











$('#Citys').change(function()
{$('#schoods').empty();
var cities=$('#Citys').val();
 $.ajax({                                      
      url: 'getit.php',   
      type: 'POST',              
      data: {"city": cities},                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {
//console.log(element.name);
$('#schoods').append("<option value='" + element.name + "'>");


});
        
      } 
    });
});


});
