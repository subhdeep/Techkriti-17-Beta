<?php include('heading.php') ?>
  <body>
      <div id="a" class="container">
        <a href="http://2016.techkriti.org/tosc"><img  style="display:inline-block;height:70px;float:left;margin-left:-179%"src="red1.png"/></a>
        <div class="info">
          <h1>Registration Form</h1>
        </div>
      </div>
      <div id="b" class="form">
        <div class="thumbnail"><img style="margin-top:-22%" src="tech.png"/></div>
        
<!--Single user register-->          
        <form class="register-form" id="regisform">
          <input id="name" type="text" placeholder="Name" name="fname" required/>
          <select id="Class" name="class">
                            <option selected value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
          </select>
          <select id="City" name="city">
                            <option value="BENGALURU">BENGALURU</option>
                            <option value="BHOPAL">BHOPAL</option>
                            <option value="DELHI">DELHI</option>
                            <option value="JAIPUR">JAIPUR</option>
                            <option value="JHANSI">JHANSI</option>
                            <option value="GWALIOR">GWALIOR</option>
                            <option value="INDORE">INDORE</option>
                            <option selected value="KANPUR">KANPUR</option>
                            <option value="KOTA">KOTA</option>
                            <option value="KOLKATA">KOLKATA</option>
                            <option value="LUCKNOW">LUCKNOW</option>
                            <option value="MUMBAI">MUMBAI</option>
                            <option value="NAGPUR">NAGPUR</option>
                            <option value="PATNA">PATNA</option>
                            <option value="RANCHI">RANCHI</option>
                            <option value="SIKAR">SIKAR</option>
                            <option value="UJJAIN">UJJAIN</option>
                            <option value="VARANASI">VARANASI</option>
          </select>
          <input type="text" placeholder="School Name" name="school" id="school" list="schood" autocomplete="off" required/>                               
          <datalist id="schood">
             <option value="kv">kv</option>
             <option value="dps">dps</option>
           </datalist>
          <input id="email" type="text" placeholder="Email address" name="email" required/>
          <input id="contactNo" type="text" placeholder="Contact Number" name="contact" required pattern="[789][0-9]{9}"/>
<!--register is use to finally submit single registration form-->            
          <div id="single-register2">Register</div>
                     <span id="error2" style="margin-top: 3%;"></span>
          <p class="message"><span style="float:left;color:red"><a href="register.php">Back</a></span> Already registered? <a href="form1.php">Sign In</a></p>
        </form>

       
<!--group register-->          
        <form class="group-register" id="regisform1">
          <select id="Classs" name="class">
                            <option selected value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
          </select>
          <select id="Citys" name="city">
                            <option value="BENGALURU">BENGALURU</option>
                            <option value="BHOPAL">BHOPAL</option>
                            <option value="DELHI">DELHI</option>
                            <option value="JAIPUR">JAIPUR</option>
                            <option value="JHANSI">JHANSI</option>
                            <option value="GWALIOR">GWALIOR</option>
                            <option value="INDORE">INDORE</option>

                            <option selected value="KANPUR">KANPUR</option>

                            <option value="KOTA">KOTA</option>
                            <option value="KOLKATA">KOLKATA</option>
                            <option value="LUCKNOW">LUCKNOW</option>
                            <option value="MUMBAI">MUMBAI</option>
                            <option value="NAGPUR">NAGPUR</option>
                            <option value="PATNA">PATNA</option>
                            <option value="RANCHI">RANCHI</option>
                            <option value="SIKAR">SIKAR</option>
                            <option value="UJJAIN">UJJAIN</option>
                            <option value="VARANASI">VARANASI</option>
          </select>
          <input type="text" placeholder="Group Name" name="group" id="groupy" autocomplete="off" required/>
          <input type="text" placeholder="School Name" name="school" id="schools" list="schoods" autocomplete="off" required/>                               
          <datalist id="schoods">
             <option value="kv">kv</option>
             <option value="dps">dps</option>
           </datalist>
          <input id="names" type="text" placeholder="Name" name="fname" required/>    
          <input id="emails" type="email" placeholder="Email address" name="email" required/>
          <input id="contactNos" type="text" placeholder="Contact Number" name="contact" pattern="[0-9]{10}" required/>
<!--Finish is use to finally submit multi registration form-->            
          <div class="group" id="register">Finish</div>

<!--next is use to  next multi registration form-->            
          <button class="group" id="proceed" onclick="">Proceed</button>
<!--next is use to  next multi registration form-->            
          <div class="group" id="next">Next</div>
           <span id="error" style="margin-top: 3%;"></span>
          <p class="message"><span style="float:left;color:red"><a href="register.php">Back</a></span> Already registered? <a href="form1.php">Sign In</a></p>
        </form>
          <script type="text/javascript">
    function goon3()
    { console.log("fuck");
        form=document.getElementById('regisform1');
        form.action='submit2.php';
        form.method='POST';
    }   
    function goon2()
    {
        form=document.getElementById('regisform1');
        form.action='submit1.php';
        form.method='POST';
    }   
</script>
        <div id="register-option">
          <button id="multi-register">As a group</button>
          <button id="single-register">As a single user</button>
          <form id="register1">

                    <p style="color:red" class="message">For groups: Max Limit is 99 and Instant Payment</p>
          </form>
		</div>
         
      </div>
    
  </body>
</html>
