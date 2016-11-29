$(document).ready(function(){
var name,email,url,id,city,collge,contact="";
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
city=element.city;
college=element.college;
contact=element.contact;
id=element.id;
$('#login_in').remove();
$('#login').removeClass('register');
$('#login').append('<a id="login_in" style="padding-top: 10px;width: 100px;padding-bottom: 0px;" href="/register1/profile.php"><img style="width: 50%;border-radius: 44%;" src="'+url+'"></img></a>');

})
}
else
{

}

}
});


});
