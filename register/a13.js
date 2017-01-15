$(document).ready(function(){
var i=0;
var k=0;
var r=0;
var score="";
var name,id="";
var idea_s="";
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

$.ajax({                                      
      url: 'gen.php',   
      type: 'GET',              
      data: '',                    
      dataType: 'json',    
      success: function(data)
      {

 //data.sort(function(a,b) {return (a.score > b.score) ? 1 : ((b.score > a.score) ? -1 : 0);} ); 
 data.sort(function(a,b) {return (b.score-a.score)} ); 
 $.each(data, function(index, element) {
console.log(data);
i=i+1;
score=element.score;
name=element.name;


k=k+1;
addRow(i,element.name,element.score,element.url);
});

}
});











function addRow(content,morecontent,mcontent,id)
{       
        
   var imgy = "<img style='    width: 50px;border-radius: 25px;' src='"+id+"' />";
var cell1='<td><span>'+content+'</span></td>';
var cell2='<td><span>'+morecontent+'</td>';var cell3='<td><span>'+mcontent+'</span></td>';
var cell4='<td>'+imgy+'</td>';
var final='<tr>'+cell1+cell2+cell3+cell4+'</tr>'

 $('#tbody').append(final);




}
});
