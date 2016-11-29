<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-1.12.2.min.js"></script>

        <link rel="stylesheet" href="bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bootstrap-social.css">
        <script src="bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- JavaScript Includes -->
		<script src="jquery-1.12.2.min.js"></script>
<style>

.btn-facebook {
	color: #fff;
	background-color: #4C67A1;
}
.btn-facebook:hover {
	color: #fff;
	background-color: #405D9B;
}
.btn-facebook:focus {
	color: #fff;
}
</style>
	
		<!-- Our main JS file -->



</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=142378392886345";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/techkriti.iitk/posts/1283057848372635" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/techkriti.iitk/posts/1283057848372635" class="fb-xfbml-parse-ignore"><p>Techkriti pays tribute to the father of the nation, M.K. Gandhi, on the day of his birth, October 2nd. 
On this...</p>Posted by <a href="https://www.facebook.com/techkriti.iitk/">Techkriti, IIT Kanpur</a> on&nbsp;<a href="https://www.facebook.com/techkriti.iitk/posts/1283057848372635">Sunday, October 2, 2016</a></blockquote></div>
<a  id="shareBtn" data-link='https://www.facebook.com/techkriti.iitk/posts/1283057848372635'><button style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button></a>
<script>

document.getElementById('shareBtn').onclick = function() {
 /* FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://www.facebook.com/techkriti.iitk/posts/1253115354700218',
  }, function(response){
if(response.post_id!="")
{
var dataString="id="+response.post_id;
$.ajax({                                      
      url: 'add_post.php',   
      type: 'POST',              
      data:  dataString,                 
      dataType: 'json',    
      success: function(data)
      {


}
});


}

});*/
var link=$(this).attr('data-link');
var dataString="link=https://www.facebook.com/techkriti.iitk/posts/1283057848372635";
$.ajax({                                      
      url: 'share_post.php',   
      type: 'POST',              
      data:  dataString,                
      dataType: 'json',    
      success: function(data)
      {


}
});

}

</script>

</body>
</html>
