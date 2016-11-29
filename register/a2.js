$(document).ready(function(){
var name,email,url,id="";
 $.ajax({                                      
      url: 'loader.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

   $.each(data, function(index, element) {

name=element.name;
email=element.email;
url=element.url;
id=element.id;
$('#image').attr('src',url);
$('#name').text(name);
$('#email').text(email);
})
}
else
{
window.location="https://www.techkriti.org/register/login.php";
}

}
});



$('#register').on('click',function()
{
var college = $("#college").val();

var dataString="college="+college;
$.ajax({                                      
      url: 'submit.php',   
      type: 'POST',              
      data:   dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{
var dataString="email="+email;
console.log(dataString);
$.ajax({                                      
      url: 'send_email.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data)
      {}
});
}
else if (data=='false')
{window.location="https://www.techkriti.org/register/login.php";
}
else
{
}

}
});


});

$('#logout').on('click',function()
{window.location="https://www.techkriti.org/register/logout.php";
});
$('#ambass').on('click',function()
{var dataString="id="+id;
$.ajax({                                      
      url: 'check.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data=="true")
{
window.location="https://www.techkriti.org/register/campus.php";
}

}
});





});
});
