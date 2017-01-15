<!DOCTYPE>
<html lang = "en">
  <head>
    <meta charset= "utf-8">
<meta property="og:image" content="http://2016.techkriti.org/ambassador/img/ambass.png">
<meta property="og:title" content="Techkriti 2017 | Ambassadors">
    <title>
Ambassador Techkriti
    </title>
		<script src="jquery-1.12.2.min.js"></script>
    <script src="a12.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://use.fontawesome.com/45ce79a002.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
      <style>
  
body{
font-family: 'Raleway';
    font-size: 1.5vw;
    line-height: 1.5;
    background-color: #EEE;
}
.btn
{
    background-image: linear-gradient(to bottom,#337ab7 0,#265a88 100%);
    background-repeat: repeat-x;
    border-color: #245580;
    text-transform: none;
}
main {
  padding-left: 400px;
  padding-top: 5%;
}
nav ul a
{
color:black;
}

     #slide-out {
       width:300px !important;
background-color: rgba(0,0,0,0.1);
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.8);
     }

     @media only screen and (max-width : 992px) {
       main, footer {
         padding-left: 0;
       }
     }

     #my-nav {
       z-index: 10000;
     }

     #my-side-nav #slide-out  {
       padding-top: 5%;
     }

    
     .my-left-margin {
       margin-left: 12.5%;
     }

     #per-name {
       font-size: 1em;
       color: #000000;
       margin-top: 0%;
     }

     .hor-line {
       margin-top: 0%;
       margin-left: 12.5%;
       width: 75%;
     }

     #fb-button {
       background:  #3B5998;
       width: 75%;
     }
    @media only screen and (min-width: 1200px){}
    img{
    	width: 50%!important
    }
    }

     @media only screen and (max-width: 769px){
     	
    .mobile-demo_1{
    left: 0!important;
        transform: translateX(0%) !important;
    top: 60px !important;
    display: none;
  }
  .slide-out_1{
        right: 0!important;
    transform: translateX(25%) !important;
    top: 60px !important;
    padding-top: 5% !important
  }
  .slide-out_2{
        transform: translateX(0%) !important;
        left: 0px!important;
            padding-top: 5% !important

   }
 
  }
  @media only screen and (max-width: 992px){
  .side-nav.fixed {
    transform: translateX(0%) !important;
  }
  #my-side-nav #slide-out{
     		padding-top: 12% !important;
     	}
     	.container{
     		width:60% !important;
     		    margin-left: 30% !important;
     	}
     	#slide-out{
     		width: 25%!important
     	}
  }
  </style>
  </head>

  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=142378392886345";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
    <header>
      <div id="my-nav" class="navbar-fixed">
        <nav>
          <div class="nav-wrapper" style='color:black'>
            
            <ul class="right ">
              <li><a href="ca.php">HOME</a></li>
          <li><a href="leaderboard.php">LEADERBOARD</a></li>
              <li><a href="submit_idea.php">SUBMIT AN IDEA</a></li>
              <li><a href="instructions.php">INSTRUCTIONS</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <ul id="slide-out" class="slide-out_1 side-nav center">
              <li><a href="#">LEADERBOARD</a></li>
              <li><a href="#">SUBMIT AN IDEA</a></li>
              <li><a href="#">PROFILE</a></li>
              <li><a href="instructions.php">INSTRUCTIONS</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <ul id="mobile-demo" class="mobile-demo_1 side-nav ">
              <div id="pro-pic">
                <center> <img class="responsive-img circle" src="http://placehold.it/200x200"> </center>
              </div>
                <center> <li id="per-name">Name of the above person</li> </center>
                <hr class="hor-line">
                <li class="my-size my-left-margin">Likes:</li>
                <li class="my-size my-left-margin">Post Shared:</li>
                <li class="my-size my-left-margin">Points For Idea:</li>
                <li class="my-size my-left-margin">Score:</li>
                <hr class="hor-line">
              <div class="my-size my-left-margin">
<a target='_blank' href='https://www.techkriti.org/ambassador'>
                Find Out More About Our Campus Ambassador</a>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <main>
    <div id="my-side-nav" class="container">
      <ul id="slide-out" class="slide-out_2 side-nav fixed">
        <div id="pro-pic" style="
    margin-top: 6%;
">
          <center> <img class="responsive-img circle" id='image' src="http://placehold.it/200x200" style='width:75%;'> </center>
        </div>
        <center> <li id="per-name"><span id='name'></span></li> </center>
        <hr class="hor-line">
        <li class="my-size my-left-margin"><span>Likes:&nbsp;&nbsp;</span><span id='likes'>0</span></li>
        <li class="my-size my-left-margin"><span>Post Shared:&nbsp;&nbsp;</span><span id='shares'>0</span></li>
        <li class="my-size my-left-margin"><span>Points For Idea:&nbsp;&nbsp;</span><span id='idea_s'>0</span></li>
        <li class="my-size my-left-margin"><span>Score:&nbsp;&nbsp;</span><span id='score'>0</span><a id='reload' class="btn btn-default" 
style="
    background: transparent;
    width: 59px;
    height: auto;
    display: inline-block;
">
                    <i class="fa fa-refresh">
                    </i>

                </a></li>
        <hr class="hor-line">
        <div class="my-size my-left-margin">
<a style='font-size:1.4vw;text-align:left;padding:0px;line-height:120%;' target='_blank' href='https://www.techkriti.org/ambassador'>
                <span>Find Out More About Our Campus Ambassador</span></a>
        </div>
      </ul>
    </div>
    <div class="container">
 <center> <div class="row">
          <div class="col m12 s12">
<span id='forget'>Pending........ </span>
            <div class="row" id="poster" style='margin-top:3%;'>
              <div class="col m12">
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1343026545709098/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/posts/1343026545709098:0" class="fb-xfbml-parse-ignore"><p>We present to you the fifth city of our zonals - BHUBHANESHWAR
Venue : Institute of Technical Education and Research  (...</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/posts/1343026545709098:0">Friday, December 2, 2016</a></blockquote></div>
              </div>
            </div>
           
            <div class="row">
              <div class="col m12 s12">
            <div  id="share5" data-num='post5' data-link='https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1343026545709098/?type=3&theater'><button style="width:77%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i>|Share</button></div>
              </div>
            </div>
          </div>
        </div> </center>



   <center> <div class="row">
          <div class="col m12 s12">

            <div class="row" id="poster" style='margin-top:3%;'>
              <div class="col m12">
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/photos/a.478651925479902.112479.158756710802760/1333460683332351/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/photos/a.478651925479902.112479.158756710802760/1333460683332351/?type=3" class="fb-xfbml-parse-ignore"><p>Humankind has been driven to wonder what technological leap might come next. Stay tuned with Techkriti, IIT Kanpur to...</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/photos/a.478651925479902.112479.158756710802760/1333460683332351/?type=3">Thursday, November 24, 2016</a></blockquote></div>
              </div>
            </div>
           
            <div class="row">
              <div class="col m12 s12">
            <div  id="share4" data-num='post4' data-link='https://www.facebook.com/techkriti.iitk/photos/a.478651925479902.112479.158756710802760/1333460683332351/?type=3&theater'><button style="width:77%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i>|Share</button></div>
              </div>
            </div>
          </div>
        </div> </center>










      <center> <div class="row">
          <div class="col m12 s12">

            <div class="row" id="poster" style='margin-top:3%;'>
              <div class="col m12">
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1323626707649082/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/posts/1323626707649082:0" class="fb-xfbml-parse-ignore"><p>&#x201c;Children are like wet cement - whatever falls on them makes an impression.&#x201d;-Dr. Haim Ginott

Techkriti, IIT Kanpur and...</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/posts/1323626707649082:0">Monday, November 14, 2016</a></blockquote></div>
              </div>
            </div>
           
            <div class="row">
              <div class="col m12 s12">
            <div  id="share1" data-num='post1' data-link='https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1323626707649082/?type=3&amp;theater'><button style="width:77%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i>|Share</button></div>
              </div>
            </div>
          </div>
        </div> </center>




<center> <div class="row">
          <div class="col m12 s12">

            <div class="row" id="poster" style='margin-top:3%;'>
              <div class="col m12">
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1317422524936167/?type=3" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/posts/1317422524936167:0" class="fb-xfbml-parse-ignore"><p>&quot;Real growth of a country was in hearth minds, bodies and souls of young men and women of the country&quot; - C.V....</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/posts/1317422524936167:0">Monday, November 7, 2016</a></blockquote></div>
              </div>
            </div>
           
            <div class="row">
              <div class="col m12 s12">
            <div  id="share3" data-num='post3' data-link='https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1317422524936167/?type=3&theater'><button style="width:77%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i>|Share</button></div>
              </div>
            </div>
          </div>
        </div> </center>




        <center> <div class="row">
            <div class="col m12 s12">

              <div class="row" id="poster">
                <div class="col m12 s12">
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/photos/a.275293999149030.76339.158756710802760/1294949430516810/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/posts/1294949430516810:0" class="fb-xfbml-parse-ignore"><p>Techkriti&#039;17 remembers the beloved former president of India, Dr A.P.J. Abdul Kalam on the 85th birthday of India&#039;s...</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/posts/1294949430516810:0">Saturday, October 15, 2016</a></blockquote></div>
                </div>
              </div>
              <div class="row">
                <div class="col m12 s12">
                 <div  id="share2" data-num='post2' data-link='https://www.facebook.com/techkriti.iitk/posts/1283057848372635'><button style="width:77%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i>|Share</button></div>
                </div>
              </div>
            </div>
          </div> </center>
    </div>
    </main>
  </body>
  <script>
$(document).ready( function() {
  $(".button-collapse").sideNav({
    menuWidth: '300',
    edge: 'right',
    closeOnClick: true
  }
  );
});
$('#share1,#share2,#share3,#share4,#share5').on('click',function() {
var link=$(this).attr('data-link');
var num=$(this).attr('data-num');
var dataString="link="+link+"&num="+num;
$.ajax({                                      
      url: 'share_post.php',   
      type: 'POST',              
      data:  dataString,                
      dataType: 'json',    
      success: function(data)
      {

if(data==false)
{
$('#forget').html("Sorry!!You have already shared this post 3 times");
}
else
{

$('#forget').html("Congratulations! Your post was shared.");
}
}
});

$("#forget").show();
setTimeout(function() { 
$("#forget").hide(); 
$("#forget").html('Pending...........');
}, 50000);
window.scrollTo(0,0);
var shares,likes,url="";

$.ajax({                                      
      url: 'load_likes.php',   
      type: 'POST',              
      data:  "",                 
      dataType: 'json',    
      success: function(data)
      {
if(data!="false")
{

   $.each(data, function(index, element) {

likes=element.likes;
shares=element.shares;
url=element.url;
$('#image').attr('src',url);
$('#likes').text(likes);
$('#shares').text(shares);
})
}
else
{
window.location="https://www.techkriti.org/register/login.php";
}

}
});

});




  </script>
</html>
