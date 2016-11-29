$(document).ready(function(){
var i=0;
var k=0;
var r=0;
var score="";
var name,id="";
var shares,likes,url,score="";

$.ajax({                                      
      url: 'load_likes.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

   $.each(data, function(index, element) {

likes=element.likes;
shares=element.shares;
url=element.url;
score=element.score;
$('#image').attr('src',url);
$('#likes').text(likes);
$('#shares').text(shares);
$('#score').text(score);
})
}
else
{
window.location="https://www.techkriti.org/register/login.php";
}

}
});




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

$('#image').attr('src',url);
$('#name').text(name);

})
}
else
{
window.location="https://www.techkriti.org/register/login-callback1.php";
}

}
});
$('#register').on('click',function()
{var idea=$('#idea').val();
var dataString='idea='+idea;
$.ajax({                                      
      url: 'submitidea.php',   
      type: 'POST',              
      data: dataString,                    
      dataType: 'json',    
      success: function(data)
      {
if(data=='true')
 {

window.location="https://www.techkriti.org/register/ca.php";

}
else if(data==false)
{
window.location="https://www.techkriti.org/register/login-callback1.php";
}

else
{

$('#error').html(data);
}


}
});



});








});
