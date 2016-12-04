$(document).ready(function(){
$('#slide-out').css('opacity','0');

var title=[];
var desc=[];
var titl="";
var title_arr=[];
var k=0;
var max_size=0;
var tech_id=0;
var start="";

/* From here*/
$.ajax({                                      
      url: 'get_name.php',   
      type: 'POST',
      dataType: 'json',    
      success: function(data3)
{
if((data3!='false') && (data3!='false1'))
{
$('#just_check').html(data3);


var name="",email="",college="",phone="",techid="";
$.ajax({                                      
      url: 'profile_user.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if((data2!='false'))
{
$.each(data2, function(index, element2) {

name=element2.name;
email=element2.email;
phone=element2.phone;//fjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
college=element2.college;
techid=element2.techid;
$('#list_comp').append("<span style='display: block;font-size: 175%;font-weight:bold;'>MEMBER DETAILS</span><br>");
$('#list_comp').append("<div><span style='font-weight:bold;margin-top:3%;font-size: 120%;'>NAME: &nbsp;&nbsp;&nbsp;</span><span>"+name+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>EMAIL: &nbsp;&nbsp;&nbsp;</span><span>"+email+"</span></div>");

$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>PHONE: &nbsp;&nbsp;&nbsp;</span><span>"+phone+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>TECHID: &nbsp;&nbsp;&nbsp;</span><span>"+techid+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>COLLEGE: &nbsp;&nbsp;&nbsp;</span><span>"+college+"</span></div>");

});
}
}
});


var competition="",members="";
$.ajax({                                      
      url: 'profile.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{
console.log(data2);
 $('#tbody').append("<tr><td><span style='font-weight:bold;font-size: 120%;'>Competition</span></td><td><span style='font-weight:bold;font-size: 120%;padding-left:50%;'>Members</span></td></tr>");
$.each(data2, function(index, element2) {
console.log(element2.competition);
competition=element2.competition;
members=element2.names;
var cell1='<td><span>'+competition+'</span></td>';
var cell2='<td><span style="padding-left:50%;">'+members+'</span></td>';
var final='<tr>'+cell1+cell2+'</tr>'

 $('#tbody').append(final);



});
}
}
});//////for new profile

var workshop="",centre="",pay=0;
$.ajax({                                      
      url: 'profile_workshop.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{
console.log(data2);
 $('#tbody1').append("<tr><td><span style='font-weight:bold;font-size: 120%;'>Workshop</span></td><td><span style='font-weight:bold;font-size: 120%;padding-left:50%;'>Centre</span></td></tr>");
$.each(data2, function(index, element2) {

workshop=element2.workshop;
centre=element2.centre;
pay=element2.pay;

var cell1='<td><span>'+workshop+'</span></td>';
var cell2='<td><span style="padding-left:50%;">'+centre+'</span></td>';

if(pay==1)
{
var cell3='<td><button class="butts" style="padding-left:50%;">Paid</button></td>';
var final='<tr>'+cell1+cell2+cell3+'</tr>';
}
else
{
var cell3='<td><button class="butts" class="pay_work" style="padding-left:50%;">Pay</button></td>';
var final='<tr>'+cell1+cell2+cell3+'</tr>';
}


 $('#tbody1').append(final);



});
}
}
});//////for new profile

var members="",centre="";event="";
$.ajax({                                      
      url: 'profile_zonals.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{
console.log(data2);
 $('#tbody2').append("<tr><td><span style='font-weight:bold;font-size: 120%;'>EVENT</span></td><td><span style='font-weight:bold;font-size: 120%;padding-left:50%;'>Centre</span></td><td><span style='font-weight:bold;font-size: 120%;padding-left:50%;'>Members</span></td></tr>");
$.each(data2, function(index, element2) {

competition=element2.competition;
centre=element2.centre;
names=element2.names;
var cell1='<td><span>'+competition+'</span></td>';
var cell2='<td><span style="padding-left:50%;">'+centre+'</span></td>';
var cell3='<td><span style="padding-left:50%;">'+names+'</span></td>';
var final='<tr>'+cell1+cell2+cell3+'</tr>'

 $('#tbody2').append(final);



});
}
}
});//


}
else if(data3=='false1')
{
location.reload(true);
}
else
{
$('#abcd').removeClass('dropdown');



}

}

});//till here

var modal = document.getElementById('myModal');//login
var modal1=document.getElementById('myModal1');//signup
var modal2=document.getElementById('myModal2');//forgot
var modal3=document.getElementById('myModal3');//zonal_register
var modal4=document.getElementById('myModal4');//check_mail
var modal5=document.getElementById('myModal5');//profile
var modal6=document.getElementById('myModal6');//Change Password
var modal7=document.getElementById('myModal7');//Resend Email
var btn = document.getElementById("myBtn");
var signup=document.getElementById("signup_login");
var signup_login_btn=document.getElementById("signup_login_button");
var resend=document.getElementById("resend");
var forgot=document.getElementById("forgot_login");
var change_pass=document.getElementById("change_pass");
var just_profile=document.getElementById("just_profile");

// Get the <span> element that closes the modal

var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];var span2 = document.getElementsByClassName("close")[2];var span3 = document.getElementsByClassName("close")[3];var span4 = document.getElementsByClassName("close")[4];var span5 = document.getElementsByClassName("close")[5];
var span6 = document.getElementsByClassName("close")[6];
var span7 = document.getElementsByClassName("close")[7];
$('#abcd').on('click',function()
{
var str=$(this).hasClass('dropdown');

if(str == false)

{

modal.style.display = 'block';
$('#abcd').attr('data', '1');

}

});
// When the user clicks on the button, open the modal 
btn.onclick = function() {

$.ajax({                                      
      url: 'check.php',   
      type: 'POST',
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{

    modal3.style.display = "block";
}

else
{
    modal.style.display = "block";
}
}

});
 

}
signup.onclick = function() {
    modal1.style.display = "block";
    modal.style.display = "none";
}
signup_login_btn.onclick = function() {
    modal.style.display = "block";
    modal1.style.display = "none";
}


forgot.onclick = function() {
    modal2.style.display = "block";
    modal.style.display = "none";
}
resend.onclick = function() {
    modal7.style.display = "block";
    modal.style.display = "none";
}
just_profile.onclick = function() {
    modal5.style.display = "block";

}
change_pass.onclick = function() {
    modal6.style.display = "block";
    modal5.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";



}

span1.onclick = function() {
    modal1.style.display = "none";



}
span2.onclick = function() {
    modal2.style.display = "none";



}
span3.onclick = function() {
    modal3.style.display = "none";



}
span4.onclick = function() {
    modal4.style.display = "none";



}
span5.onclick = function() {
    modal5.style.display = "none";



}
span6.onclick = function() {
    modal6.style.display = "none";



}
span7.onclick = function() {
    modal7.style.display = "none";



}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



$('#logout').on('click',function()
{
$.ajax({                                      
      url: 'logout.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data)
      {

}

});
location.reload(true)
});



$('#submit').on('click',function()
{
var username=$('#user').val();
var password=$('#pwd').val();

var dataString="username="+username+"&pass="+password+"&gender=male";
console.log(dataString);
$.ajax({                                      
      url: 'login.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{


var name="",email="",college="",phone="",techid="";
$.ajax({                                      
      url: 'profile_user.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{
$.each(data2, function(index, element2) {

name=element2.name;
email=element2.email;
phone=element2.phone;//fjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
college=element2.college;
techid=element2.techid;
$('#list_comp').html('');

$('#list_comp').append("<span style='display: block;font-size: 175%;font-weight:bold;'>MEMBER DETAILS</span><br>");
$('#list_comp').append("<div><span style='font-weight:bold;margin-top:3%;font-size: 120%;'>NAME: &nbsp;&nbsp;&nbsp;</span><span>"+name+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>EMAIL: &nbsp;&nbsp;&nbsp;</span><span>"+email+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>PHONE: &nbsp;&nbsp;&nbsp;</span><span>"+phone+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>TECHID: &nbsp;&nbsp;&nbsp;</span><span>"+techid+"</span></div>");
$('#list_comp').append("<div><span style='font-weight:bold;font-size: 120%;'>COLLEGE: &nbsp;&nbsp;&nbsp;</span><span>"+college+"</span></div>");
});
}
}
});






var competition="",members="";
$.ajax({                                      
      url: 'profile.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
if(data2!='false')
{
$('#tbody').html('');
 $('#tbody').append("<tr><td><span style='font-weight:bold;font-size:120%;'>Competition</span></td><td><span style='font-weight:bold;font-size:120%;padding-left:50%;'>Members</span></td></tr>");
$.each(data2, function(index, element2) {
console.log(element2.competition);
competition=element2.competition;
members=element2.names;
var cell1='<td><span>'+competition+'</span></td>';
var cell2='<td><span style="padding-left:50%;">'+members+'</span></td>';
var final='<tr>'+cell1+cell2+'</tr>'

 $('#tbody').append(final);



});
}
}
});


$('#abcd').addClass('dropdown');
$('#abcd1').addClass('dropdown');

$('#just_check').html(data2);
$('#just_check1').html(data2);
modal.style.display='none';

if($('#abcd').attr('data')=='1')
{
$('#abcd').attr('data')='0';
$('#abcd1').attr('data')='0';

}
else
{
modal3.style.display='block';}
}
else
{
$('#error').html('INVALID credentials or mail not confirmed');
}
}

});
})
$('#compie').on('click','#com_register',function()
{
var team=$('#team').val();
var k=0,str="";
$( ".fixed_comp" ).each(function(index,element) {
if(k==0)
{
str=str+$(this).val();
}
else
{str=str+","+$(this).val();}
k=k+1;

});
var dataString="team="+team+"&members="+str+"&competition="+competition;
console.log(dataString);
$.ajax({                                      
      url: 'reg_comp.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
modal3.style.display='none';
}
else
{
$('#error3').html(data2);
}
}

});
});
$('#username').change(function()
{
var username=$('#username').val();
var dataString="username="+username;
$.ajax({                                      
      url: 'username.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
$('#error11').html(data2);
}

});




});

$('#compie').on('change','.fixed_comp',function()
{
var id=$(this).val();
var attr=$(this).attr('data');


$.ajax({                                      
      url: 'available.php',   
      type: 'POST',              
      data:  "id="+id,                 
      dataType: 'json',    
      success: function(data2)
{
$('#error3'+attr).html(data2);
}

});




});
$('#profile').on('click',function()
{
var competition="",members="",centre="";
$.ajax({                                      
      url: 'profile.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
$('#list_comp').append("<span>Your competitions</span>");
if(data2!='false')
{
$.each(data2, function(index, element2) {
console.log(element2.competition);
competition=element2.competition;
members=element2.members;
$('#list_comp').append("<span>"+competition+"</span><span>"+members+"</span>");


});
}
}
});
$.ajax({                                      
      url: 'profile_zonals.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
$('#list_comp').append("<span>Registered Events</span>");
if(data2!='false')
{
$.each(data2, function(index, element2) {
console.log(element2.competition);
competition=element2.competition;
members=element2.members;
centre=element2.centre;
$('#list_comp').append("<span>"+competition+"</span><span>"+members+"</span><span>"+centre+"</span>");


});
}
}
})
var workshop="";
$.ajax({                                      
      url: 'profile_workshop.php',   
      type: 'POST',              
      dataType: 'json',    
      success: function(data2)
{
$('#list_comp').append("<span>Registered Workshops</span>");
if(data2!='false')
{
$.each(data2, function(index, element2) {
console.log(element2.workshop);
workshop=element2.workshop;

centre=element2.centre;
$('#list_comp').append("<span>"+workshop+"</span><<span>"+centre+"</span>");


});
}
}
})


});


$('#forgot').on('click',function()
{
var email=$('#forgot_email').val();
var username=$('#forgot_username').val()
var dataString="email="+email+"&username="+username;
$.ajax({                                      
      url: 'forgot.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
modal2.style.display='none';
modal4.style.display='block';
}

else
{
$('#error2').html(data2);
}
}

});
});
$('#changes').on('click',function()
{
var old_pass=$('#old_pass').val();
var new_pass=$('#new_pass').val()
var dataString="old_pass="+old_pass+"&new_pass="+new_pass;
$.ajax({                                      
      url: 'change_pass.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
modal6.style.display='none';

}

else
{
$('#error6').html(data2);
}
}

});
});




$('#signup').on('click',function()
{
var name=$('#names').val();
var username=$('#username').val();
var email=$('#email').val();
var gender=$("input[name=gender").val();
var facebook=$('#facebook').val();
var phone=$('#contact').val();
var pass=$('#password').val();
var college=$('#college').val();

var dataString="college="+college+"&email="+email+"&facebook="+facebook+"&gender="+gender+"&name="+name+"&pass="+pass+"&phone="+phone+"&username="+username;
$.ajax({                                      
      url: 'signup.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
modal4.style.display='block';
modal1.style.display='none';
}

else
{
$('#error1').html(data2);
}
}

});
});
$('#resend_submit').on('click',function()
{
var email=$('#resend_email').val();

var dataString="email="+email;
$.ajax({                                      
      url: 'resend_email.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
modal7.style.display='none';
modal4.style.display='block';
}

else
{
$('#error7').html(data2);
}
}

});
});
$('#centre').change(function()
{$('#event').empty();


var types=$("input[name=types]:checked").val();
var centre=$('#centre').val();
var dataString='types='+types+'&centre='+centre;

 $.ajax({                                      
      url: 'getit.php',   
      type: 'POST',              
      data: dataString,                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {

$('#event').append("<option value='" + element.name + "'>"+element.name+"</option>");




});
}
});

});


$('input[name=types]').change(function()
{$('#event').empty();


var types=$("input[name=types]:checked").val();
var centre=$('#centre').val();
var dataString='types='+types+'&centre='+centre;
console.log(dataString);
 $.ajax({                                      
      url: 'getit.php',   
      type: 'POST',              
      data: dataString,                    
      dataType: 'json',    
      success: function(data)
      {

 
                $.each(data, function(index, element) {

$('#event').append("<option value='" + element.name + "'>"+element.name+"</option>");




});
}
});

});

$('#work_reg').on('click',function()
{

var types=$("input[name=types]:checked").val();
if(types=='workshop')
{
var centre=$('#centre').val();
var workshop=$('#event').val();
var dataString="centre="+centre+"&workshop="+workshop;

 $.ajax({                                      
      url: 'reg_work.php',   
      type: 'POST',              
      data: dataString,                    
      dataType: 'json',    
      success: function(data)
      {

if(data=='true')

{


modal3.style.display='none';
moda5.style.display='block';
}

else
{
$('#error3').html(data);
}

}
});

}

else
{
$('#per1').css('display','block');
$('#team1').css('display','block');
var i=0;
var event=$('#event').val();
var max_size=1;
if(event=='Soccon')
{
max_size=2;
}
if(event=='IARC')
{
max_size=2;
}

for(i=1;i<=max_size;i++)
{

if(i==1)
{
$.ajax({                                      
      url: 'check.php',   
      type: 'POST',
      dataType: 'json',    
      success: function(data3)
{
if(data3!='false')
{

$('#person1').val(data3);
}
}

});



}
else
{
$('#compie').append("<label><input style='font-weight:400;color:black;margin-bottom:5px;margin-top:5px;width: 102%;border-radius: 4px;height: 30px;padding:5 px;border:solid 2px rgb(187,187,187);' required type='text' data='"+i+"' name='name'  class='fixed_comp' id='person"+i+"' placeholder='PERSON"+i+"'></label>");
$('#compie').append("<span class='error' id='error3"+i+"'></span>");
}
}
$('#compie').append("<span class='error' id='error03'></span>");
$('#error3').css('display','none');
$('#work_reg').css('display','none');

$('#compie').append("<div class='butts' id='event_register'>Submit</div>'");





}


});

$('#compie').on('click','#event_register',function()
{
var centre=$('#centre').val();
var team=$('#team').val();
var competition=$('#competition').val();
var k=0,str="";
$( ".fixed_comp" ).each(function(index,element) {
if(k==0)
{
str=str+$(this).val();
}
else
{str=str+","+$(this).val();}
k=k+1;

});
var dataString="team="+team+"&members="+str+"&competition="+competition+"&centre="+centre;
console.log(dataString);
$.ajax({                                      
      url: 'reg_event.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data2)
{
if(data2=='true')
{
location.reload(true);
}
else
{
$('#error03').html(data2);

}
}

});
});



});




