$(document).ready(function(){
var name,email,url,id,college,tech_id,workshop,centre,pay="";
var workshop_arr=[];
var centre_arr=[];
var pay_arr=[];
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
window.location="https://www.techkriti.org/register1/member.php";
}
city=element.city;
workshop=element.workshop;
centre=element.centre;
pay=element.pay;
workshop_arr=[];
centre_arr=[];
pay_arr=[];
var i,k=0;var n_work="";
for(i=0;i<workshop.length;i++)
{
if(workshop[i]==',')
{
workshop_arr[k]=n_work;
k=k+1;

n_work="";



}
else
{
n_work=n_work+workshop[i];

}


}
if(n_work!="")
{
workshop_arr[k]=n_work;}

var i,k=0;var n_centre="";
for(i=0;i<centre.length;i++)
{
if(centre[i]==',')
{centre_arr[k]=n_centre;
k=k+1;

n_centre="";



}
else
{
n_centre=n_centre+centre[i];

}


}
if(n_centre!="")
{
centre_arr[k]=n_centre;}
var i,k=0;var n_pay="";
for(i=0;i<pay.length;i++)
{
if(pay[i]==',')
{pay_arr[k]=n_pay;
k=k+1;

n_pay="";



}
else
{
n_pay=n_pay+pay[i];

}


}
if(n_pay!="")
{
pay_arr[k]=n_pay;}
for(i=0;i<pay_arr.length;i++)
{
if(pay_arr[i]=='0')
{
$('#listing').append("<h5><span>"+workshop_arr[i]+" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span>"+centre_arr[i]+"</span><div id='pay11' style='display: inline;margin-left: 9%;'  data-work='"+workshop_arr[i]+"' data-city='"+centre_arr[i]+"' data-email='"+email+"'    data-name='"+name+"'><button  class='button1'><span>Pay</span></button></div></h5>            ");}
else
{
$('#listing').append("<h5 ><span>"+workshop_arr[i]+" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span>"+centre_arr[i]+"</span> <div data-work='"+workshop_arr[i]+"' data-city='"+centre_arr[i]+"'  style='display: inline;margin-left: 9%;'  data-email='"+email+"'    data-name='"+name+"'><button  class='button1'><span>Paid</span></button></div></h5>           ");
}

}
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

$('#register_workshop').on('click',function()
{
var workshop=$('#workshop').val();
var centre=$('#centre').val();
var i=0;var flag=0;
for(i=0;i<workshop_arr.length;i++)
{
if((workshop_arr[i]==workshop)&&(centre_arr[i]==centre))
{
$('#error').html('&nbsp;&nbsp;Already registered');
flag=1;break;
}
}
if (flag==0)
{
var dataString="workshop="+workshop+"&centre="+centre;
$.ajax({                                      
      url: 'register_workshop.php',   
      type: 'POST',              
      data: dataString,                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

window.location="https://www.techkriti.org/register1/workshop.php";

}}
});
}
});

$('#listing').on('click','#pay11',function()
{console.log("a");
  

var workshop=$(this).attr('data-work');
var centre=$(this).attr('data-city');
$.ajax({                                      
      url: 'pay.php',   
      type: 'POST',              
      data: '',                 
      dataType: 'json',    
      success: function(data)
      {
if(data!='false')
{


   $.each(data, function(index, element) {
var tech_id=element.techid;
if(workshop=='flying wing')
{
window.location='https://www.townscript.com/e/workshops1-224324/booking?Workshop2=1&name='+name+'&emailid='+email+'&cq1='+tech_id+'&cq2='+workshop+'&cq3='+centre;
}
else
{
window.location='https://www.townscript.com/e/workshops-402021/booking?Workshop1=1&name='+name+'&emailid='+email+'&cq1='+tech_id+'&cq2='+workshop+'&cq3='+centre;}
});
}




}

});
});

$('#logout').on('click',function()
{window.location="https://www.techkriti.org/register1/logout.php";
});

$('#centre').change(function()
{
$('#workshop').empty();
var centre=$('#centre').val();
 $.ajax({                                      
      url: 'gen.php',   
      type: 'POST',              
      data: {"centre": centre},                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {

$('#workshop').append("<option value='" + element.name + "'>"+element.name+"</option>");


});
        
      } 
    });
});



});
