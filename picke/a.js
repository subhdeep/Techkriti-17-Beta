$(document).ready(function(){
$('#start').on('click',function(){
 if($.cookie("rollno")!=null)
{
window.location='http://2016.techkriti.org/pick/index.php';
}
else
{
window.location='http://2017.techkriti.org/';

}

 });
});

