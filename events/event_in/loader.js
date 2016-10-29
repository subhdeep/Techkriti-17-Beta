$(document).ready(function(){
var competition = window.location.hash.substr(1);
var title=[];
var desc=[];
var title_arr=[];
var k=0;
var dataString="competition="+competition;
$.ajax({                                      
      url: 'loader2.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data)
      {
        $.each(data, function(index, element) {
        title[k]=element.title;
        desc[k]=element.desc;
        k=k+1;
if(k==1)
{
$('#event-desc p').html(element.desc);
}

        $('#list').append("<li data-desc='"+element.desc+"'>"+element.title+"</li>");

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

