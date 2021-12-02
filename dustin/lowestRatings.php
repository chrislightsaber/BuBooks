<body bgcolor="#ffffff" vlink="#0066ff" leftmargin="0" rightmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div id="fb-root"></div>
<script type="text/javascript">
window.fbAsyncInit = function() {
    FB.init({appId: '', status: true, cookie: true, xfbml: true});
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
	FB.init({appId: '', status: true, cookie: true, xfbml: true});
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
						<a href = "clicksLog1.php?redirect=http://www.bubooks.com/advertising.php&adID=4" target='_new'>
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
 <td colspan = "5" background = "images/bckground.gif" bgcolor = "#FFFFFF"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BUBooks.com - Lowest Rated Professors</title>
<script type="text/javascript">
<!--
function submitForm() 
{
	document.formLowestRatings.submit();
}
// -->
</script>
	
<STYLE TYPE="text/css">
<!--
#box-table-a
	{
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		font-size: 15px;
		width: 60%;
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
<BR><table id="box-table-a"  rules="none" align="center" bgcolor="white"><tr><td bgcolor="#476A8E" align="center" colspan="5"><span class="title">Lowest Rated Professors</span></td></tr><tr><td bgcolor="#FFFFFF" align="left" colspan="5">These professors are the lowest rated professors...</td></tr><form method="post" action="lowestRatings.php" name="formLowestRatings" id="formLowestRatings"><tr><td bgcolor="#FFFFFF" colspan="5" background = "bckground.gif"><table width = "100%" cellspacing = "0" cellpadding = "2" border = "1" bordercolor="#476A8E" rules ="none"><thead bgcolor="#CCCCCC"  align="center"><th><H4><u>Professor:</u></h4></th><th><H4><u>Department:</u></h4></th><th><H4><u>Score:</u></h4></th></thead><tbody bgcolor="#FFFFFF" align="center"><tr><td>#1. <a href="http://www.bubooks.com/profdisplay.php?profid=1438">Martin Medhurst</a></td><td>Communication Studies</td><td>28</td></tr><tr><td>#2. <a href="http://www.bubooks.com/profdisplay.php?profid=3041">Tamar  Carter</a></td><td>Biology</td><td>28</td></tr><tr><td>#3. <a href="http://www.bubooks.com/profdisplay.php?profid=2329">Rebecca Sheesley</a></td><td>Environmental Studies</td><td>39</td></tr><tr><td>#4. <a href="http://www.bubooks.com/profdisplay.php?profid=1234">Bryan Brooks</a></td><td>Environmental Studies</td><td>39</td></tr><tr><td>#5. <a href="http://www.bubooks.com/profdisplay.php?profid=2998">Robert King</a></td><td>Management</td><td>40</td></tr><tr><td>#6. <a href="http://www.bubooks.com/profdisplay.php?profid=2839">Michael Moore</a></td><td>Biology</td><td>40</td></tr><tr><td>#7. <a href="http://www.bubooks.com/profdisplay.php?profid=2604">Peter Coogan</a></td><td>Mathematics</td><td>41</td></tr><tr><td>#8. <a href="http://www.bubooks.com/profdisplay.php?profid=1242">Eungee Song</a></td><td>Computer Science</td><td>41</td></tr><tr><td>#9. <a href="http://www.bubooks.com/profdisplay.php?profid=2392">Ben Kelley</a></td><td>Engineering</td><td>42</td></tr><tr><td>#10. <a href="http://www.bubooks.com/profdisplay.php?profid=715">Charlotte Pisors</a></td><td>Mathematics</td><td>44</td></tr></tbody></table></td></tr></table><BR><input type="hidden" name="numProfs" id="numProfs" value="606"><input type="hidden" name="page" id="page" value="2"><tr><td bgcolor="#FFFFFF" align="center" colspan="5"><a href="#" onClick="submitForm();">MORE RATINGS (11 - 20)</a></td></tr></form>Caught Exception: ('Facebook needs the CURL PHP extension.')
exception 'Exception' with message 'Facebook needs the CURL PHP extension.' in /var/www/dustin/facebook.php:4
Stack trace:
#0 /var/www/dustin/footer.inc(7): require_once()
#1 /var/www/dustin/lowestRatings.php(179): include('/var/www/dustin...')
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