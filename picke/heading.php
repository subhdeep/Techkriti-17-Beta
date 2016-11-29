<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>TOSC Login</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="jquery-1.12.2.min.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="bootstrap.min.js"></script>
        <script src="jquery-cookie-master/src/jquery.cookie.js"></script>
        <script src="a12.js"></script>
    <style>
        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 500px;
          margin: 0 auto 2%;
          padding: 30px;
          border-top-left-radius: 3px;
          border-top-right-radius: 3px;
          border-bottom-left-radius: 3px;
          border-bottom-right-radius: 3px;
          text-align: center;
        }
        .form .thumbnail {
          background: #b8bbe2;
          width: 150px;
          height: 150px;
          margin: 0 auto 30px;
          padding: 38px 8px;
          border-top-left-radius: 100%;
          border-top-right-radius: 100%;
          border-bottom-left-radius: 100%;
          border-bottom-right-radius: 100%;
          box-sizing: border-box;
        }
        .form .thumbnail img {
          display: block;
          
          width: 100%;
        }
        
        
        .form input {
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          border-top-left-radius: 3px;
          border-top-right-radius: 3px;
          border-bottom-left-radius: 3px;
          border-bottom-right-radius: 3px;
          box-sizing: border-box;
          font-size: 14px;
        }
        .form button,#logi,#single-register2 {
			margin:1%;
          outline: 0;
          background: #323de3;
          width: 100%;
          border: 0;
          padding: 15px;
          border-top-left-radius: 3px;
          border-top-right-radius: 3px;
          border-bottom-left-radius: 3px;
          border-bottom-right-radius: 3px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }

        .form .message {
          margin: 15px 0 0;
          color: #b3b3b3;
          font-size: 12px;
        }
        .form .message a {
          color: #EF3B3A;
          text-decoration: none;
        }
        .form .register-form {
          display: none;
        }
        
        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }
        .container:before, .container:after {
          content: "";
          display: block;
          clear: both;
        }
        .container .info {
          margin:0px auto;
          text-align: center;
        }
        .container .info h1 {
          padding: 0;
          font-size: 30px;
          font-weight: 400;
          color: #fff;
        }
        .container .info span {
          color: #4d4d4d;
          font-size: 12px;
        }
        .container .info span a {
          color: #000000;
          text-decoration: none;
        }
        .container .info span .fa {
          color: #EF3B3A;
        }
        body {
          background: #ccc;
          font-family: "Raleway";
        }
        body:before {
          content: "";
          position: fixed;
          top: 0;
          left: 0;
          display: block;
        background: url("bg.png");
            background-size: cover;
            opacity: 0.7;
          width: 100%;
          height: 100%;
        }
        
        .register-form button{
            width: 45%;
            margin: 1%;
        }
       
        #City,#Citys{
           display: block;
           width: 100%;
           height: 40px;
           padding: 6px 12px;
           font-size: 14px;
           line-height: 1.42857143;
            margin-bottom: 3%;
           color: #555;
           background-color: #f2f2f2;
           border: 0px solid #ccc;
        }
        #Class,#Classs{
           display: block;
           width: 100%;
           height: 40px;
           padding: 6px 12px;
           font-size: 14px;
           line-height: 1.42857143;
            margin-bottom: 3%;
           color: #555;
           background-color: #f2f2f2;
           border: 0px solid #ccc;
        }
       #single-register2{
		   display:none;
	   }


        #multi-name{
            display: none;
        }
        .group-register{
            display: none
        }
		#register,#next
		{
margin:1%;
          outline: 0;
          background: #323de3;
          width: 100%;
          border: 0;
          padding: 15px;
          border-top-left-radius: 3px;
          border-top-right-radius: 3px;
          border-bottom-left-radius: 3px;
          border-bottom-right-radius: 3px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
			width:48%;
			float:left;
		}
    
    </style>
    <script>
        $(document).ready(function(){
        $('button#proceed').on('click',function(){
          $('div#register,#next').fadeIn();
          $('#error').slideDown();
           $(this).hide();
         $('#contactNos,#names,#emails').slideDown();        
        });
            
        $('#multi-register').on('click',function(){
           $('.group-register').slideDown();
		   $('#register-option').hide();
           $('.register-form,div#register,#next').hide();
           $('#contactNos,#names,#emails').hide();
        });
       $('button#single-register').on('click',function(){
           $('.register-form').slideToggle();
		   $('.group').hide();
     
		   $('#single-register2').fadeIn();
		   $('#register-option').hide();
        });		
        });
    </script>
  </head>
