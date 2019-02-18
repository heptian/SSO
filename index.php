<!DOCTYPE html>
<html>
<head>
	<title>SSO</title>

	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>

	<script type="text/javascript">
		function onSignIn(googleUser) {

			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			console.log('Name: ' + profile.getName());
			console.log('Image URL: ' + profile.getImageUrl());
			console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
			window.location = "http://example.com/sso/welcome.php";
		}

	</script>


</head>
<body>

	<div style="margin-top: 100px;" align="center" class="g-signin2" data-onsuccess="onSignIn"></div>


</body>
</html>