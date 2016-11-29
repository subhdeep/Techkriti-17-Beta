<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-1.12.2.min.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- JavaScript Includes -->
		<script src="jquery-1.12.2.min.js"></script>
        <script src="jquery-cookie-master/src/jquery.cookie.js"></script>
		<script src="a2.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>

        <style>
            #btn-login{
                text-decoration: none;
                color: white;
            }
            img{
width:100%;
}
            body {
               width: 100%;
              height: 100%;
              background: #fafafa;
              background-size: cover;
font-family:'Raleway';
          }
          
        #upload{
    font-family:'PT Sans Narrow', sans-serif;
    background-color:white;

        margin-bottom: 8px;
display:inline-block;

    width:250px;
    padding:30px;
    border-radius:3px;

    margin-left: 15px;

    box-shadow: 0 0 10px rgba(0, 0, 0, 8.3);
}
.person-info h5 {
    border-bottom: 1px solid #eeeeee;

    font-size: 14px;
    margin-bottom: 12px;
    padding-bottom: 12px;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
#drop{
    background-color: white;


    border: 20px solid rgba(0, 0, 0, 0);
    border-radius: 3px;
    border-image: url('../img/border-image.png') 25 repeat;
    text-align: center;
    text-transform: uppercase;

    font-size:16px;
    font-weight:bold;
    color:black;
}

#drop a{
    background-color:#007a96;
    padding:12px 26px;
    color:#fff;
    font-size:14px;
    border-radius:2px;
    cursor:pointer;
    display:inline-block;
    margin-top:12px;
    line-height:1;
}

#drop a:hover{
    background-color:#0986a3;
}

#drop input{
    display:none;
}

#upload ul{
    list-style:none;
    margin:0 -30px;
    
}

#upload ul li{

    background-color:#333639;

    background-image:-webkit-linear-gradient(top, #333639, #303335);
    background-image:-moz-linear-gradient(top, #333639, #303335);
    background-image:linear-gradient(top, #333639, #303335);

    border-top:1px solid #3d4043;
    border-bottom:1px solid #2b2e31;
    padding:15px;
    height: 52px;

    position: relative;
}

#upload ul li input{
    display: none;
}

#upload ul li p{
    width: 144px;
    overflow: hidden;
    white-space: nowrap;
    color: #EEE;
    font-size: 16px;
    font-weight: bold;
    position: absolute;
    top: 20px;
    left: 100px;
}

#upload ul li i{
    font-weight: normal;
    font-style:normal;
    color:#7f7f7f;
    display:block;
}

#upload ul li canvas{
    top: 15px;
    left: 32px;
    position: absolute;
}

#upload ul li span{
    width: 15px;
    height: 12px;
    background: url('../img/icons.png') no-repeat;
    position: absolute;
    top: 34px;
    right: 33px;
    cursor:pointer;
}

#upload ul li.working span{
    height: 16px;
    background-position: 0 -12px;
}

#upload ul li.error p{
    color:red;
}







#tzine-download{
    opacity:0.9;
    background-color:#257691;
    font-size:11px;
    text-align:center;
    text-transform:uppercase;
    width:150px;
    height:28px;
    line-height:28px;
    text-decoration:none !important;

    display: inline-block;
    border-radius: 2px;
    color: #fff !Important;
    font-weight: bold;
    box-shadow: 0 -1px 2px #1e5e74 inset;

    border-top:1px solid #26849c;

    text-shadow:1px 1px 1px #1e6176;
    margin-top:6px;
}

#tzine-download:hover{
    opacity:1;
}

#tzine-actions{
    position:absolute;
    top:0;
    width:500px;
    right:50%;
    margin-right:-420px;
    text-align:right;
}

#tzine-actions iframe{
    display: inline-block;
    height: 21px;
    width: 95px;
    position: relative;
    float: left;
    margin-top: 11px;
} 
.about-subtitle{
margin-bottom:30px;
}
        </style>

</head>
<body>
<header style="height:94px;background-color:#3367BB">
<a href=http://www.techkriti.org/tosc>
<img src='blank.png' style='width:66px;padding:4px;margin-top:-15px;'></a>
<div style='margin-top:14px;margin-left:28%;display:inline-block;'>
<span style="
    color: white;
    font-size: 37px;">STUDENT PROFILE</span></div>

	<div class="btn btn-primary"id="logout" style="
    float: right;
    width: auto;
    background-color: transparent;    margin-top: 26px;

"><img src="logout.png" style="width:30px; height:30px;" >Log Out</div>
	
</header>


<section id="profile" class="tabcontent">
     <div class="person-info" style="width:33.33%;display:inline-block;height:240px;margin-left:20px;    vertical-align: top;
">
                <h3 class="about-subtitle">PRACTICE PAPERS</h3>
                <h5><a target="_blank" href="http://www.techkriti.org/papers/Paper1.pdf">CLASS 11/12</a></h5>

                <h5><a target="_blank" href="http://www.techkriti.org/papers/Paper2.pdf">CLASS 9/10</a></h5>
            
              </div>
	<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
    <img id="image_upload_preview" src="https://placehold.it/100x100" alt="your image" />

			<div id="drop" style="background-size: cover;
    background-repeat: no-repeat;">


				<a>Browse</a>
				<input id="uploa" type="file" name="upl" multiple />
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>

	<div class="person-info" style="width:33.33%;display:inline-block;height:240px;float:right;    vertical-align: top;
">
                <h3 class="about-subtitle">PERSONAL INFORMATION</h3>
                <h5 id="name"><span>Name :</span></h5>
                <h5 id="rollno"><span>Roll No. :</span></h5>
                <h5 id="phoneno"><span>Phone :</span> </h5>
                <h5 id="email"><span>Email :</span> email@domain.com</h5>
                <h5 id="school"><span>School :</span> </h5>
              </div>
</section>
<section id="papers" class="tabcontent">
	<span style="color:white;">Will be uploaded soon</span>
</section>
<section id="test" class="tabcontent">
	<span style="color:white;">Coming Soon</span>
</section>

<script>

$('.abc li a').on('click',function(){
   $('.abc li a').removeClass('active');
   $(this).addClass('active');
});
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
