$(document).ready(function(){
var name,email,url,id,college,tech_id,workshop,centre,pay="";
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
if (college=="")
{
window.location="https://www.techkriti.org/register/member.php";
}
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
window.location="https://www.techkriti.org/register/login-callback1.php";
}

}
});



$('#logout').on('click',function()
{window.location="https://www.techkriti.org/register/logout.php";
});





});
