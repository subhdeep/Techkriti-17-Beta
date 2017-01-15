<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-1.12.2.min.js"></script>
    
    <script src="bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- JavaScript Includes -->
    <script src="jquery-1.12.2.min.js"></script>

    <script src="a7.js"></script>

    <!-- Our main JS file -->


    <style>

          #image{
             width: 50%;border-radius: 133px;margin:25%;
          }    
#btn-login{
  text-decoration: none;
  color: white;
}
            img{
              width:100%;
            }
            html,body {
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

              font-size: 19px;
              margin-bottom: -12px;
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
              font-size:175%;
            }
            .button1 {
              display: inline-block;
              border-radius: 4px;
              background-color: #3367BB;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 18px;
              padding: 10px;
              width: 150px;
              transition: all 0.5s;
              cursor: pointer;
              margin-top: 30px;
            }

            .button1 span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }

            .button1 span:after {
              content: '>>';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }
            .button1:hover {
              background-color: grey;
            }
            .button1:hover span {
              padding-right: 25px;
            }

            .button1:hover span:after {
              opacity: 1;
              right: 0;
            }
            .dropdown {
              display: inline-block;
              border-radius: 4px;
              background-color: #3367BB;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 18px;
              padding: 8px;
              width: auto;
              transition: all 0.5s;
              cursor: pointer;
            }
            .dropdown:hover {
              background-color: grey;
            }
            .button2 {
              display: inline-block;
              background-color: #3367BB;

              color: #FFFFFF;
              text-align: center;
              font-size: 22px;
              padding: 10px;
              width: 88%;
              cursor: pointer;
              margin-left: 6%;
            }
            .button2:hover {
              background-color: grey;
              color:white;
              box-shadow: 10px 10px 10px #888888;
            }
            #head{
              height: 19%; width: 100%; background-color:#3367BB
            }
            #list{
              width: 19%;
              float: left;
              margin-top: 5%;
              margin-left: 5%;
              border-radius: 20px;
                  border: 2px solid black;

            }
             #details{
              width:45%;display:inline-block; float:right;margin-top:5%
             }
             #tech-logo{
                width:9%;padding:4px;float:right;
              } 
              #zonal-logo{
                width:19%;margin-top:3%;float:left;margin-left:4%;
              }  
            @media screen and (max-width: 769px){
              #listing h5{
                text-align: center;font-size: 15px;
              }
              #listing{
                    width: 100%;
                  height: 100%;
                  overflow: auto;
              }
              #register_workshop,#register{
                   width: 40%;
                  float: left;
                  margin-left: 25px;
              }
              #logout{
               width: 40%;
               margin-left: 0px !important;
                float: right; 
              }
              .button1{
                font-size: 10px;
                padding: 10px;
                width: 100px;
              }
              .dropdown{
                    font-size: 11px;
                  padding: 5px;
                  width: 190px;
              }
              .person-info h5 {
                  padding-bottom: 0px;
              }
              #details span{
                font-size:15px;
              }
              #details{
                width: 100%;
                float: none;
                margin-top: 0px
              }
              #details h3,#listing h3{
                font-size: 20px;
                    text-align: center;margin-bottom: 0px
              }
              #details h5{
                font-size: 15px;text-align: center;
              }
            #head{
              height: 7% ;
              width: 100% ;
              background-color: #3367BB ;
              margin-left: 0px
            }
            .links{
              float: right;
              width: 60%;
              margin-top: 15px;
            }
            #image{
             width: 32% !important;
              border-radius: 50% !important;
              padding: 3px !important;
              margin: 0px;
              padding:1px;
                  }
                 .button2:hover {
                  background-color: #3367bb;
                  color: white;
                  box-shadow: none;
                  } 
              #list{
                   float: left;
                  width: 100%;
                  margin: auto;
                  margin-top: 3px;    border: none;

                  border-bottom: 1px solid black;
              }
              .button2{
                  font-size: 10px;
                  padding: 4px;
                  width: 75%;
              }
              .links h3{
                padding: 0px;
                margin: 0px;
              }
              #tech-logo{
                     width: 11%;
                      padding: 3px;
                      float: right;
              } 
              #zonal-logo{
                width: 45%;
                margin-top: 3%;
                float: left;
                margin-left: 4%;
              }   
             }
    </style>

  </head>
