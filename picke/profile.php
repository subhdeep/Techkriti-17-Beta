<?php
include 'submit.php';
setcookie('fname','raj',time() + (86400 * 30*12));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <script src="jquery-1.12.2.min.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="bootstrap.min.js"></script>
        <script src="jquery-cookie-master/src/jquery.cookie.js"></script>
        <script src="a2.js"></script>

        <style>
            #btn-login{
                text-decoration: none;
                color: white;
            }
            
            body {
               width: 100%;
              height: 100%;
              background: url('bg.png');
              background-size: cover;
          }
          
          *[role="form"] {
              max-width: 844px;
              padding: 15px;
              margin: 0 auto;
              background-color: #fff;
              border-radius: 0.3em;
          }
          
          *[role="form"] h2 {
              text-align: center;
          }     
            #details input,label{
                    margin: 1% 0%;
            } 
            #details input{
                   background: white;
            }     
        </style>
        <script>
            
           var date = new Date().toDateString();
           var myVar = setInterval(myTimer, 1000);
            function myTimer() {
                var d = new Date();
                document.getElementById("time").innerHTML =date +' '+ d.toLocaleTimeString();
            }
        </script>

   
  </head>
  <body>
        
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       <br>
<p  id="time" class=" text-info"></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">NAME OF THE CONDIDATE</h3>
            </div>
            <div class="panel-body">
              <div class="row">
<!--                <div class="col-md-3 col-md-offset-4 col-lg-3 " align="center"> <img alt="User Pic" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" width="100%"> </div>-->
                <div class=" col-md-12 col-lg-12 "> 
                    <div id="details" class="col-md-12">
                        <label class="col-md-4 col-lg-3">Username: </label><input class="col-md-8 col-lg-9" id="name" type="text" class="form-control" name="name" value="" placeholder="name" disabled/>
                        <label class="col-md-4 col-lg-3 ">Password: </label><input class="col-md-8 col-lg-9" id="rollno" type="text" class="form-control" name="rollno" placeholder="Roll No." disabled/>
                    </div>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $_COOKIE['fname'];?></td>
                      </tr>
                      <tr>
                        <td>Class</td>
                        <td>9th</td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td>Kanpur</td>
                      </tr>
                      <tr>
                        <td>School Name</td>
                        <td>Kvs</td>
                      </tr>
                        <tr>
                        <td>Email Address</td>
                        <td>student@gmail.com</td>
                      </tr>
                      <tr>
                        <td>Contact No.</td>
                        <td>8960620407</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  <div style="float:right">
                  <a href="#" class="btn btn-primary" onclick="goon()";>Log Out</a>
                  <a href="#" class="btn btn-primary" href="http://2016.techkriti.org/picke/pay.html">Pay Now</a>
                    </div>
                </div>
              </div>
            </div>
                <div class="panel-footer">
                        <a style="margin:auto" href="mailto:tosc@techkriti.orgs" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    function goon()
    {
              $.removeCookie("name",{ path: '/' });
        $.removeCookie("rollno",{ path: '/' });
                if($.cookie("school")!=null)
{
                $.removeCookie("school",{ path: '/' });}

 if($.cookie("phoneno")!=null)
{
                $.removeCookie("phoneno",{ path: '/' });}
 if($.cookie("city")!=null)
{
                $.removeCookie("city",{ path: '/' });}

if($.cookie("email")!=null)
{
                $.removeCookie("email",{ path: '/' });}
      if($.cookie("next")!=null)
{
                $.removeCookie("next",{ path: '/' });}
window.location='http://2016.techkriti.org/tosc1';
    }   
function goon1()
{

window.location='http://2016.techkriti.org/pay.html';
}
</script>
  </body>
</html>
