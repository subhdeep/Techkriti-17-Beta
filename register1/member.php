<?php include 'header1.php'?>
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
          <h3 ><a href="workshop.php"><button class="button2">REGISTERED WORKSHOPS</button></a></h3>
        </div>
      </div>

	       <div id="details" class="person-info" >
                <h3 class="about-subtitle"><u>EDIT PROFILE</u></h3>

                <h5><span >Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><input id="name"></h5>
                <h5><span >College &nbsp;&nbsp;&nbsp;:&nbsp;</span> <input id="college"></h5>
                <h5><span >Phone No :&nbsp;</span> <input id="contact"></h5>
                <h5><span >City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span> <input id="city"></h5>

                <h5><span >Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><input id="email"></h5>
                <span style="font-size:19px;" id ="error" style="display:block;"></span>
			<div id="register" ><button class="button1"><span>Submit</span></button></div>
			<div id="logout" ><button class="button1"><span>Logout</span></button></div>


              </div>
</section>
    <script src="a8.js"></script>

</body>

</html>
