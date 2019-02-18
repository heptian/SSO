This is a very simple approach for Single Sign-On Implementation in PHP.

What is Single Sign-On?

Single Sign-On is an identification system that allows a third party website (like Google, LinkedIn, Twitter, Github and so on) to authenticate its users. Thus SSO allows the user to use one set of login credentials to log into multiple applications.

For example, consider when you try to log into Stack Overflow, you will be provided with the Google and Facebook logins. When you click Google, the authentication is done by Google and then you are signed into Stack Overflow.

How does it work?

When you log into a website, the website checks to see if you are already logged in or not. If you are already logged in, then the website presents you with  page you needed to visit.
If you are not logged in and the website redirects you to the login page.
There when you log in using SSO, (i.e), when you choose to log in using let’s say, Google, then Google verifies your Google credentials and then issues a token to the website you want to login. 
The website receives the token verifying your identity. 
Now the website  presents you with  page you needed to visit.
