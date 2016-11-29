 
<div class="navigate hide-on-med-and-up">
      
      <!--Back button-->
      <div>
        <a href="/competitions"><i class="material-icons" id="back-icon">arrow_back</i></a>
      </div>


      <div onclick="navi()">
      <i class="material-icons"  id="nav-icon">&#xE5D2;</i>
      </div>
      <center>
        <div id="mob-nav">
          <div class="mob-hover col s12">
            <ul id="mob-nav-items">
              <a class="active" href="/">
              Home
          </a>
<a href="/about">
              About
          </a>
          <a href="/competitions">
              Competitions
          </a>
          <a target='_blank' href="http://www.techkriti.org/zonals/">
              Technocruise
          </a>
          <a target='_blank' href="http://www.techkriti.org/tosc">
              TOSC
          </a>
          
<a target='_blank' href="http://2016.techkriti.org/sponsors">
              Sponsors
          </a>
          <a href="/contact">
              Contact Us
          </a>
            </ul>
          </div>
        </div>
      </div>
<div class="container">
      <center>
    <div class="row hide-on-small-only" id="my-nav">
         <nav class="cl-effect-4" style="background-color: transparent;">
          <a href="/">
              Home
          </a>
<a href="/about">
              About
          </a>
          <a class="active" href="/competitions">
              Competitions
          </a>
          <a target='_blank' href="http://www.techkriti.org/zonals/">
              Technocruise
          </a>
          <a target='_blank' href="http://www.techkriti.org/tosc">
              TOSC
          </a>
          
<a target='_blank' href="http://2016.techkriti.org/sponsors">
              Sponsors
          </a>
          <a href="/contact">
              Contact Us
          </a>
          </nav>
        </div>
        </center>
        <div class="social hide-on-small-only">
        <a class="fb" target="_blank" href="http://www.facebook.com/techkriti.iitk"><i class="fa fa-facebook"></i></a>
        <a class="gp" target="_blank" href="https://plus.google.com/+TechkritiOrg_iitk"><i class="fa fa-google-plus"></i></a>
        <a class="tw" target="_blank" href="http://www.twitter.com/techkriti_iitk"><i class="fa fa-twitter"></i></a>
        <a class="yt" target="_blank" href="http://www.youtube.com/techkritiIITK"><i class="fa fa-youtube-play"></i></a>
        <a class="ln" target="_blank" href="https://www.linkedin.com/company/techkriti%2713"><i class="fa fa-linkedin"></i></a>
  </div>
  

  <script>
    var nav = document.getElementById('mob-nav');
    nav.style.display = "none";
    var flag = 0;
    function navi() {
      if(flag == 0) {
     document.getElementById('mob-nav').style.display = "block";
    flag = 1;
  }
  else {
     document.getElementById('mob-nav').style.display = "none";
    flag = 0;
  }
}
  </script>
