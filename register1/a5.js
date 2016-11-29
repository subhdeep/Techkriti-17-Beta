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
$('#name').val(name);
$('#email').val(email);
})
}
else
{
window.location="https://www.techkriti.org/register1/login.php";
}

}
});



$('#register').on('click',function()
{
var college = $("#college").val();
var city = $("#city").val();
var contact = $("#contact").val();

var dataString="college="+college+"&city="+city+"&contact="+contact;
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
      {

}
});
window.location="https://www.techkriti.org/register1/profile.php";
}
else if (data=='false')
{window.location="https://www.techkriti.org/register1/login.php";
}
else
{
$('#error').html(data);
}

}
});


});

$('#logout').on('click',function()
{window.location="https://www.techkriti.org/register1/logout.php";
});

});
