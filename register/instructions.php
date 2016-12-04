<!DOCTYPE>
<html lang = "en">
  <head>
    <meta charset= "utf-8">

    <title>
Instructions
    </title>
		<script src="jquery-1.12.2.min.js"></script>
    <script src="a13.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://use.fontawesome.com/45ce79a002.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  </head>
  <style>
body{
font-family: 'Raleway';
    font-size: 1.5vw;
    line-height: 1.5;
    background-color: #EEE;
}
.list li
{
text-align:left;
}
ul.list{
    list-style-type: square;

}
.btn
{
    background-image: linear-gradient(to bottom,#337ab7 0,#265a88 100%);
    background-repeat: repeat-x;
    border-color: #245580;
    text-transform: none;
}
td{
    padding: 10px 72px;
    font-size: 20px;
    font-weight: 900;

}
.list li
{
list-style-type:circle;
}
main {
  padding-left: 135px;
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
 
    @media only screen and (min-width: 1500px){
    td img{
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
        width:30% !important;
      }
      #slide-out{
        width: 25%!important
      }
  }
  @media only screen and (max-width: 992px){
  .side-nav.fixed {
    transform: translateX(0%) !important;
  }
}
@media only screen and (min-width: 601px){}
.container {
    width: 70%;
}
  </style>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1023878031002316";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header>
      <div id="my-nav" class="navbar-fixed">
        <nav>
          <div class="nav-wrapper" style='color:black'>
            
            <ul class="right">
                 <li><a href="ca.php">HOME</a></li>
          <li><a href="leaderboard.php">LEADERBOARD</a></li>
              <li><a href="submit_idea.php">SUBMIT AN IDEA</a></li>
              <li><a href="instructions.php">INSTRUCTIONS</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <ul id="slide-out" class="side-nav center">
              <li><a href="#">LEADERBOARD</a></li>
              <li><a href="#">SUBMIT AN IDEA</a></li>
              <li><a href="#">PROFILE</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <ul id="mobile-demo" class="side-nav">
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
      <ul id="slide-out" class="side-nav fixed">
        <div id="pro-pic" style="
    margin-top: 6%;
">
          <center> <img class="responsive-img circle" id='image' src="http://placehold.it/200x200" style='width:75%;'> </center>
        </div>
        <center> <li id="per-name"><span id='name'></span></li> </center>
        <hr class="hor-line">
        <li class="my-size my-left-margin"><span>Likes:&nbsp;&nbsp;</span><span id='likes'>0</span></li>
        <li class="my-size my-left-margin"><span>Post Shared:&nbsp;&nbsp;</span><span id='shares'></span></li>
        <li class="my-size my-left-margin">Points For Idea:&nbsp;&nbsp;0</li>
        <li class="my-size my-left-margin"><span>Score:</span><span id='score'></span><a id='reload' class="btn btn-default" 
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
<a style='font-size:1.4vw;padding:0px;line-height:120%;' target='_blank' href='https://www.techkriti.org/ambassador'>
                Find Out More About Our Campus Ambassador</a>
        </div>
      </ul>
    </div>
    <div class="container">
      <center> <div class="row">
          <div class="col m12 s12">
            <div class="row" id="poster">
              <div class="col m12">
<span style='font-size:25px;'>INSTRUCTIONS</span>
<ul class='list' style='padding-left:14%;'>
<li>To share a post on your timeline,click on the share button beneath a post</li>
<li>On successfully sharing a post, a congratulatory message is  displayed.</li>
<li>One point for the Share + one for each like you get on your post </li>
<li>Points will be given on the scale of 0 to 5 for the Ideas (5 points for the best Idea)</li>
<li>Score will comprise of shares, likes of 'Public' posts and points for ideas.</li>

<li>A post can be shared maximum 3 times.</li>




</ul>
              </div>
            </div>
           
            
          </div>
        </div> </center>

       
    </div>
    </main>
  </body>
  
</html>
