$(document).ready(function(){
$('#forget').hide();
var shares,likes,url,score="";
var idea_s="";
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
idea_s=element.idea;
$('#image').attr('src',url);
$('#likes').text(likes);
$('#shares').text(shares);
$('#score').text(score);
$('#idea_s').text(idea_s);
})
}
else
{
window.location="https://www.techkriti.org/register/login.php";
}

}
});


$('#reload').on('click',function()
{
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


});
