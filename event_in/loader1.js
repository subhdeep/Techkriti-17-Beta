$(document).ready(function(){

var competition = window.location.hash.substr(1);
var title=[];
var desc=[];
var titl="";
var title_arr=[];
var k=0;
var max_size=0;
var tech_id=0;
var start="";
var prize="";
$.ajax({                                      
      url: 'get_name.php',   
      type: 'POST',
      dataType: 'json',    
      success: function(data2)
{
if((data2!='false') && (data2!='false1'))
{
$('#just_check').html(data2);
$('#just_check1').html(data2);

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
});
}
else if(data2=='false1')
{
location.reload(true);
}
else
{
$('#abcd').removeClass('dropdown');
$('#abcd1').removeClass('dropdown');


}

}

});

var modal = document.getElementById('myModal');//login
var modal1=document.getElementById('myModal1');//signup
var modal2=document.getElementById('myModal2');//forgot
var modal3=document.getElementById('myModal3');//competition_register
var modal4=document.getElementById('myModal4');//check_mail
var modal5=document.getElementById('myModal5');//profile
var modal6=document.getElementById('myModal6');//Change Password
var modal7=document.getElementById('myModal7');//Resend Email
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var signup=document.getElementById("signup_login");
var signup_login_btn=document.getElementById("signup_login_button");
var resend=document.getElementById("resend");
var forgot=document.getElementById("forgot_login");
var change_pass=document.getElementById("change_pass");
var just_profile=document.getElementById("just_profile");
var just_profile1=document.getElementById("just_profile1");
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

$('#abcd1').attr('data', '1');

}

});

$('#abcd1').on('click',function()
{
var str=$(this).hasClass('dropdown');

if(str == false)

{

modal.style.display = 'block';
$('#abcd').attr('data', '1');

$('#abcd1').attr('data', '1');

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
just_profile.onclick = function() {
    modal5.style.display = "block";
    modal3.style.display = "none";
}
just_profile1.onclick = function() {
    modal5.style.display = "block";
    modal3.style.display = "none";
}
forgot.onclick = function() {
    modal2.style.display = "block";
    modal.style.display = "none";
}
resend.onclick = function() {
    modal7.style.display = "block";
    modal.style.display = "none";
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

$('#logout1').on('click',function()
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

$('#name').html($.parseHTML(competition));
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
prize=element1.prize;
images=element1.images;
ep=element1.ep;
max_size=element1.max_t_size;
start=element1.start;
if(prize =='0')
{
$('.prizetab').css('opacity',0);
}

else
{
$('#prize').text("INR "+prize);}

if(start == 0)
{
$('#myBtn').css('visibility','hidden');
}
var i=0;

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


$('#compie').append("<div class='group'><input  class='inputMaterial fixed_comp' required type='text' name='name' data='"+i+"' id='person"+i+"'> <span class='highlight'></span><span class='bar'></span><label>PERSON "+i+" tech id<span>*</span></label><span class='error' id='error3"+i+"'></span></div>");
 


}
}
$('#compie').append("<span class='error' id='error3'></span>'");
$('#compie').append("<div class='butts' id='com_register'>Submit</div>");

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
if((titl!='Junkyard Wars')&&(titl!='Accessible India')&&(titl!='Wild Soccer')&&(titl!='Impulse'))
{

 $('#list1').append('<li><a href="'+link+'">'+element2.title+'</a></li>');}

});

}
});
$('.link_nav li a').on('click',function()
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
if(data2!='false')//cud be error
{
$.each(data2, function(index, element2) {

name=element2.name;
email=element2.email;
phone=element2.phone;//fjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
college=element2.college;
techid=element2.techid;
$('#list_comp').html('');
$('#person1').val(techid);
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
if(($(this).val())!="")
{
if(k==0)
{
str=str+$(this).val();
}
else
{str=str+","+$(this).val();}
}
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
location.reload(true);
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
$('#just_profile').on('click',function()
{
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
var gender=$("input[name=gender]:checked").val();
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

});

