<?php include('heading.php') ?>
  <body>

      <div id="a" class="container">
                              <a href="http://2016.techkriti.org/tosc"><img  style="display:inline-block;height:70px;float:left;margin-left:-179%"src="red1.png"/></a> 
        <div class="info">
          <h1>Login Form</h1>

        </div>
      </div>
      <div id="b" class="form">
        <div class="thumbnail"><img style="margin-top:-22%" src="tech.png"/></div>
          <script type="text/javascript">
    function goon1()
    {
        form=document.getElementById('regisform');
        form.action='submit.php';
        form.method='POST';
    }   
    function goon2()
    {
        form=document.getElementById('regisform');
        form.action='submit1.php';
        form.method='POST';
    }   
</script>
        <form class="login-form" id="loginform">
          <input type="text" placeholder="Name" id="namey" name="name" required/>
          <input type="text" placeholder="Roll No" id="rollnoy" name="rollno" required/>
          <div id="logi">Login</div>
                     <span id="error1" style="margin-top: 3%;"></span>
          <p id="signup" class="message">Not registered? <a style="font-size:1.2em">Register</a></p>
        </form>
                          <script type="text/javascript">
    function goon()
    {
        form=document.getElementById('loginform');
        form.action='login.php';
        form.method='POST';
    }   
</script>
      </div>
    
  </body>
</html>
