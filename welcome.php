<!DOCTYPE html>
<html>
<head>
	<title>SSO</title>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
	<script>
		function signOut() {
	      var auth2 = gapi.auth2.getAuthInstance();
	      auth2.signOut().then(function () {
	        window.location = "http://example.com/sso/sign_out.php";
	        console.log('User signed out.');
	      });
	    }

	    function onLoad() {
	      gapi.load('auth2', function() {
	        gapi.auth2.init();
	      });
	    }
	</script>

</head>
<body>
	<label style="position: absolute; top: 8px; right: 16px; font-size: 18px;"><a href="#" onclick="signOut();">Sign out</a></label>
	<br>
	<p style="text-align: center; font-size: 40px;">Welcome</p>
	<hr>
	<p style="text-align: center;">You are logged in!!</p>

	

</body>
</html>