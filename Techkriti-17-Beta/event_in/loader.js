$(document).ready(function(){
var competition = window.location.hash.substr(1);
var title=[];
var desc=[];
var titl="";
var title_arr=[];
var k=0;
$('#name').text(competition);
var dataString="competition="+competition;
$.ajax({                                      
      url: 'loader2.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data)
      {

       $.ajax({                                      
      url: 'loader1.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data1)
      {

$.each(data1, function(index, element1) {
images=element1.images;
ep=element1.ep;


});

$('body').css('background-image','url('+ep+')');
        $.each(data, function(index, element) {
        title[k]=element.title;
        desc[k]=element.desc;
        k=k+1;
if(k==1)
{
//var text="<img src='"+ep+"' style='width:100%;'><br>"+element.desc;
var text=element.desc;
$('#list').append('<li data-desc="'+text+'">'+element.title+"</li>");
$('#event-desc div').html(text);
}
else{
        $('#list').append('<li data-desc="'+element.desc+'">'+element.title+'</li>');}

});
}
});
}
});
$.ajax({                                      
      url: 'loader3.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
      {
$.each(data2, function(index, element2) {
titl=element2.title;
var link="#"+titl;
if((titl!='Junkyard Wars')&&(titl!='Accessible India'))
{

 $('#list1').append('<li><a href="'+link+'">'+element2.title+'</a></li>');}

});

}
});
$('#list1').on('click','li',function()
{

location.reload(true)
});
$('#list').on('click','li',function()
{
$(this).css('background-color', 'rgba(255, 255, 255,0.65)');
$(this).css('color', '#000000');
$(this).siblings().css('background-color', '#333333');
$(this).siblings().css('color', '#ffffff');

var content=$(this).attr('data-desc');
console.log(content);
$('#event-desc div').html(content);
});


});

