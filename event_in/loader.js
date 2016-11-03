$(document).ready(function(){
var competition = window.location.hash.substr(1);
var title=[];
var desc=[];
var title_arr=[];
var k=0;
$('#event-name').text(competition);
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


        $.each(data, function(index, element) {
        title[k]=element.title;
        desc[k]=element.desc;
        k=k+1;
if(k==1)
{
var text="<img src='"+ep+"' style='width:100%;'><br>"+element.desc;
$('#list').append('<li data-desc="'+text+'">'+element.title+"</li>");
$('#event-desc p').html(text);
}
else{
        $('#list').append('<li data-desc="'+element.desc+'">'+element.title+'</li>');}

});
}
});
}
});
$('#list').on('click','li',function()
{

var content=$(this).attr('data-desc');
console.log(content);
$('#event-desc p').html(content);
});


});

