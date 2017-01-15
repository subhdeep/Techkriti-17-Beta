$(document).ready(function(){
var name,email,url,id,college,tech_id="";
 $.ajax({                                      
      url: 'loader1.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

   $.each(data, function(index, element) {
console.log(data);
name=element.name;
email=element.email;
url=element.url;
id=element.id;
college=element.college;
city=element.city;


contact=element.contact;
$('#image').attr('src',url);
$('#name').text(name);
$('#email').text(email);
$('#college').text(college);
$('#contact').text(contact);
$('#city').text(city);
})
}
else
{
window.location="https://www.techkriti.org/register1/login-callback1.php";
}

}
});



$('#pay').on('click',function()
{var workshop=$('#workshop').val();

$.ajax({                                      
      url: 'pay.php',   
      type: 'POST',              
      data: '',                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

   $.each(data, function(index, element) {
tech_id=element.techid;
window.location="https://www.townscript.com/e/workshops-402021/booking?Workshop1=1&name="+name+"&emailid="+email+"&cq1="+tech_id+'&cq2='+workshop;
});
}




}

});
});

$('#logout').on('click',function()
{window.location="https://www.techkriti.org/register1/logout.php";
});

$('#workshop').change(function()
{console.log("a");
$('#centre').empty();
var workshop=$('#workshop').val();
 $.ajax({                                      
      url: 'gen.php',   
      type: 'POST',              
      data: {"workshop": workshop},                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {

$('#centre').append("<option value='" + element.city + "'>");


});
        
      } 
    });
});



});
