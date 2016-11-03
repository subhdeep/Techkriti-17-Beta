<html>
<head>
	<title>Techkriti | Facebook</title>
</head>
<body>
	<div
	  class="fb-like"
	  data-share="true"
	  data-width="450"
	  data-show-faces="true">
	</div>
	<button onclick="share()">
		Share
	</button>
<script>
  window.fbAsyncInit = function() {
      FB.init({
        appId      : '915197781889968',
        xfbml      : true,
        status     : true,
  		cookie     : true,
        version    : 'v2.5'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
	function share(){
		FB.ui({
		  method: 'feed',
		  text:'Hello',
		  description:'Helo buddy',
		  properties:{bing:'trtr'},
		  link: 'http://techkriti.org/',
		  source:'http://2016.techkriti.org/A/images/talks/kalam.jpg',
		  caption: 'Spreading Smiles',
		  status:'Hello Bunnny',
		  name:'Name'
		}, function(response){});
	}
</script>
</body>
</html>