		<!DOCTYPE html>
		<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

		<head>
		
		<title>BUbooks.com - Login</title>
	
		<STYLE TYPE="text/css">
		<!--
		.indented
		{
		   padding-left: 15pt;
		   padding-right: 15pt;
		
		}
		#box-table-a
		{
			font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
			font-size: 15px;
			width: 50%;
			text-align: center;
			border-collapse: collapse;
			border-top: 2px solid #9baff1;
			border-bottom: 2px solid #9baff1;
			border-left: 2px solid #9baff1;
			border-right: 2px solid #9baff1;
		}
		-->
		</STYLE>
		
		</head>
	
		<body bgcolor="#ffffff" vlink="#0066ff" leftmargin="0" rightmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div id="fb-root"></div>
<script type="text/javascript">
window.fbAsyncInit = function() {
    FB.init({appId: '160953450620427', status: true, cookie: true, xfbml: true});
};
(function() {
    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
}());

window.fbAsyncInit = function() {
	FB.init({appId: '160953450620427', status: true, cookie: true, xfbml: true});
	FB.Event.subscribe('auth.login', function(response) 
    {
		window.location.href = "facebookLogin.php";
    });
	FB.getLoginStatus(function(response)
	{
		if (response.session)
		{
			window.location.href = "facebookLogin.php";
		}
	});
};
</script>

<table border="1" rules = "all" cellpadding = "3" cellspacing = "0" bordercolor="#476A8E" bgcolor = "#476A8E" width="100%" align="center">
  <tr>
    <td width="100%" height="85" bgcolor="#476A8E" colspan = "5">
		<table border ="0" cellpadding = "0" cellspacing = "0" bgcolor = "#476A8E" width = "100%" >
		<tr><td align = "left" rowspan="2" width="70%">
			<a href="index.php"><img src="images/logo.gif" width="261" height="64" border="0"></a>
		</td>
		<td align = "right">
			<table align="right" border ="0" cellpadding="0" cellspacing="0">
			<tr><td>
						<a href = "clicksLog1.php?redirect=http://www.bubooks.com/advertising.php&adID=3" target='_new'>
							<img src = "ads/bubooks.gif" border="0">
						<tr><td align="center"><font face ="verdana" size="1" color ="#ffffff">Advertisement - Click for coupon or website</font></td></tr>
		</tr></td></table>
		</td>
		</tr>
		</table>
    
    </td>  

  </tr>

	<tr>
  
    	<td align ="center" width="20%" bgcolor="#FFFFff" height="23" 
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
	
			<a href="login.php" style='text-decoration:none;'>
		
			<font face="Arial, Verdana" size="3" color="#000000">
		
			<b>Login</b> </font></a>
			
		</td>
	

		<td align ="center" width="20%" bgcolor="#FFFFff" height="23" 
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
	
			<a href="books.php" style='text-decoration:none;'>
		
			<font face="Arial, Verdana" size="3" color="#000000">
		
			<b>Textbooks</b></font></a>
			
		</td>
	
			
	
		<td align="center" width="20%" bgcolor="#FFFFff" height="23"
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
	
			<a href="profrate.php" style='text-decoration:none;'>
		
			<font face="Arial, Verdana" size="3" color="#000000">
		
			<b>Professor Ratings</b></font></a>
	
		</td> 
	
	
		<td align="center" width="20%" bgcolor="#FFFFff" height="23"
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');"> 
	
			<a href="classified.php" style='text-decoration:none;'>
	
		<font face="Arial, Verdana" size="3" color="#000000">
	
		<b>Classified Ads</b></font></a></td>
	
		<td align="center" width="20%" bgcolor="#FFFFff" height="23"
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');"> 
	
			<a href="http://www.bearcribs.com" style='text-decoration:none;' target='new'>
		
			<font face="Arial, Verdana" size="3" color="#000000">
		
			<b>Apartment Guide</b></font></a>
		</td>
	
  </tr>
  
  <tr>
 <td colspan = "5" background = "images/bckground.gif" bgcolor = "#FFFFFF">        
    <BR>
    
    <table id="box-table-a"  rules="none" align="center" bgcolor="yellow">
	<tr><td> Not a Member? <a href="signup.php">Sign up here</a> or login with your Facebook account!</td> </tr>
    </table>  
    
    <BR>
    
    			<form method="post" name="loginForm" action="login.php?redirect=home.php">
					
    <table id="box-table-a"  rules="none" align="center" bgcolor="white">  
    	<tr><td width="45%" align="center">
    		<table rules="none"> 
    			<tr>
    				<td align="center" colspan="2">BUbooks Login </td>
    			</tr>
                <tr>
                </tr>
    			<tr>
    				<td>Username:</td>
    				<td align="left"><input type="text" name="usrname" size="20" maxlength="50"></td></tr>
   				<tr>
    				<td>Password:</td>
    				<td align="left"><input type="password" name="psswrd" size="20" maxlength="30"></td></tr>
    			<tr>
    				<td align="center" colspan="2"><a href="forgotpass.php"> Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="Login"></td>
    			</form>
    			</tr>
          
    		</table></td>
    
    <td width="10%" align="center"> <img src="images/GreyOr.gif"> </td>
    
    <td width="75%" align="center" valign="top"> Login with FACEBOOK <BR><BR> 
	    <!-- Facebook Login Button -->
		//<fb:login-button size="medium" background="light" length="long" perms="email" onlogin="facebook_onlogin_ready();"></fb:login-button>
		<fb:login-button perms="email" autologoutlink="true" onlogin="OnRequestPermission();">Facebook Login</fb:login-button>
    </td>    
    
    </table>
        
        <BR>
	
		Caught Exception: ('Facebook needs the CURL PHP extension.')
exception 'Exception' with message 'Facebook needs the CURL PHP extension.' in /var/www/dustin/facebook.php:4
Stack trace:
#0 /var/www/dustin/footer.inc(7): require_once()
#1 /var/www/dustin/login.php(109): include('/var/www/dustin...')
#2 {main}

  <tr>
 	<td align="center" colspan="5" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#B2B6C8', EndColorStr='#476A8E');"><font size="4">


	<a href="login.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">	
	
		<b>LOGIN</b></font></a> &nbsp; &nbsp;


		<a href="home.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>HOME</b></font></a> &nbsp; &nbsp;

		<a href="about.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>ABOUT US</b></font></a> &nbsp; &nbsp;

		<a href="faq.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>FAQ</b></font></a> &nbsp; &nbsp;

		<a href="privacy.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>PRIVACY</b></font></a> &nbsp; &nbsp;

		<a href="terms.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>TERMS OF USE</b></font></a> &nbsp; &nbsp;

		<a href="advertising.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>ADVERTISING</b></font></a> &nbsp; &nbsp; 

		<a href="contact.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>CONTACT US</b></font></a> &nbsp; &nbsp; 


	</td>
	
</table>

<br>

<div align="center"><font size="-1">&copy;2003-2020 BUbooks.net - All rights reserved</font></div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-98854-2");
pageTracker._trackPageview();
</script>

</body>

</html>
<div id="fb-root"></div>
<script type="text/javascript">
window.fbAsyncInit = function() {
    FB.init({appId: '160953450620427', status: true, cookie: true, xfbml: true});
	};
	(function() {
	    var e = document.createElement('script');
	    e.type = 'text/javascript';
	    e.src = document.location.protocol +
	        '//connect.facebook.net/en_US/all.js';
	    e.async = true;
	    document.getElementById('fb-root').appendChild(e);
}());

window.fbAsyncInit = function() {
	FB.init({appId: '160953450620427', status: true, cookie: true, xfbml: true});
	FB.Event.subscribe('auth.login', function(response) 
    {
		window.location.href = "facebookLogin.php";
    });
	FB.getLoginStatus(function(response)
	{
		if (response.session)
		{
			window.location.href = "facebookLogin.php";
		}
	});
};
</script>

</body>
</html>
