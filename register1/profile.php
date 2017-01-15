<?php include 'header.php'?>
  <body style="margin:0px; padding:0px;">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=288372228215772";
fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



    <div class="person-info" id="head" >
      <a href=http://www.techkriti.org/zonals id="zonal-logo">
        <img src='logo.png'  alt="technocruise_logo"></a>
      <a href="https://www.techkriti.org/"  id="tech-logo"><img src='tech.png'  /></a>	
    </div>



    <section id="profile" class="tabcontent">
      <div class="person-info" id ="list">
        <img id="image"  src="https://placehold.it/100x100" alt="your image" />
        <div class="links">
          <h3><a href="profile.php"><button class="button2">Personal Information</button></a></h3>
          <h3><a href="member.php"><button class="button2">Edit Profile</button></a></h3>
          <h3 ><a href="workshop.php"><button class="button2">Registered Workshops</button></a></h3>
        </div>
      </div>




      <div id="details" class="person-info" >
        <h3 class="about-subtitle"><u>PERSONAL INFORMATION</u></h3>
        <div id="fields">
        <h5 ><span>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span><span id="name"></span></h5>
        <h5><span >College &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span><span id="college"></span></h5>
        <h5><span >Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span><span id="contact"></span> </h5>
        <h5><span >City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</span><span id="city"></span> </h5>

        <h5><span >Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span> <span id="email"></span></h5>
        <h5><span >Select Centre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span>
          <select id="centre" name="centre" class="dropdown"">
          <!--  <option selected value="PUNE">PUNE(BHARATHI VIDYAPEETH)</option> 
            <option  value="ALLAHABAD">ALLAHABAD(IIIT)</option>
            <option  value="RAIPUR">RAIPUR(DIMAT)</option>  -->
          <!--  <option  value="BHUVANESHWAR">BHUVANESHWAR(CV RAMAN)</option> -->
          <!--  <option  value="AHMEDABAD">AHMEDABAD(NIRMA)</option> 
            <option  value="BENGALURU">BENGALURU</option>
            <option  value="INDORE">INDORE(SGITS)</option>--> 
            <option selected value="BHUVANESHWAR">BHUBANESHWAR</option>

          </select></h5>
          <h5><span >Select Workshop :&nbsp;&nbsp;</span>
            <select id="workshop" name="workshop" class="dropdown"">
              <option value="iot">iot</option>
              <option selected value="android">android</option>




            </select><span id='error' style='color:red;'></span></h5>
            </div>

            <div id="register_workshop" style="float:left;"><button class="button1"><span>Register</span></button></div>
            <div id="logout" style="margin-left:36%;"><button class="button1"><span>Logout</span></button></div>

  
      </div>
<!--<div class="fb-like" style="margin-top:91px;"data-href="https://www.facebook.com/techkriti.iitk/" data-width="40" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
    </section>
  

  </body>
</html>
