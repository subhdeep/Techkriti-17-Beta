$(document).ready(function(){

$('#submit').on('click',function()
{

var password=$('#pwd').val();
var dataString="pass="+password;
$.ajax({                                      
      url: 'random.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
window.location = 'https://www.techkriti.org';

}
else
{
$('#error').html(data2);
}
}

});
})




});
