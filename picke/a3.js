$(document).ready(function(){

$.ajax({                                      
      url: 'payments.json',   
      type: 'GET',              
      data:   "",                 
      dataType: 'json',    
      success: function(data)
      {
}
 });
   if($.cookie("name")!=null)
{$('#name').attr("value",$.cookie("name"));


}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';
}
   if($.cookie("rollno")!=null)
{$('#rollno').attr("value",$.cookie("rollno"));

}
else
{
window.location='http://2016.techkriti.org/picke/form1.php';
}
/*$('#butty').on('click',function(){

        $.removeCookie("name");
        $.removeCookie("rollno");
                if($.cookie("school")!=null)
{
                $.removeCookie("school");}

    
window.location='http://2016.techkriti.org/tosc1';
    });*/

});
