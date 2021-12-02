
			

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN"><html><head><title>BUbooks.com</title>

			

<SCRIPT LANGUAGE="JavaScript">



<!-- Begin

function checkEmail(myForm) {

if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value)){

return (true)

}

alert("Invalid email address!  Please re-enter.")

return (false)

}

//  End -->

</script>



<script language="JavaScript">

<!--

var email_name_notice = 0;

function email_name(){

	if (window.document.post.email_name_notice.value == 0){

		alert("IMPORTANT! We require a valid EMAIL ADDRESS in order to send you your username and password.\n");

		window.document.post.email_name_notice.value = 1;

	}

}



//-->

</script>

			

</head>



<body bgcolor="#ffffff" vlink="#0066ff" leftmargin="0" rightmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<table border="1" rules = "all" cellpadding = "3" cellspacing = "0" bordercolor="#476A8E" bgcolor = "#476A8E" width="100%" align="center">



  <tr>

    <td width="100%" height="85" bgcolor="#476A8E" colspan = "5">

		<table border ="0" cellpadding = "0" cellspacing = "0" bgcolor = "#476A8E" width = "100%" >
		<tr><td align = "left" rowspan="2" width="70%">
			<a href="index.php"><img src="logo.gif" width="261" height="64" border="0"></a>
		</td>
		<td align = "right">
			<table align="right" border ="0" cellpadding="0" cellspacing="0">
			<tr><td>
						<a href = "clicksLog1.php?redirect=http://www.bubooks.com/advertising.php&adID=5" target='_new'>
							<img src = "ads/bubooks.gif" border="0">
						<tr><td align="center"><font face ="verdana" size="1" color ="#ffffff">Advertisement - Click for coupon or website</font></td></tr>
		</tr></td></table>
		</td>
		</tr>
		
		
		
		</table>
    
    </td>  

  </tr>


<!--- NavBar ---->
	<tr>

  
    
    
    	<td align ="center" width="20%" bgcolor="#FFFFff" height="23" 
	
		style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
	
			<a href="login.php" style='text-decoration:none;'>
		
			<font face="Arial, Verdana" size="3" color="#000000">
		
			<b>Home</b> </font></a>
			
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
 <td colspan = "5" background = "bckground.gif" bgcolor = "#FFFFFF">
 			

 			<BR>



<div align="center">

			<h3>You left one or more required fields blank!</h3>

			<table align="center" bordercolor= "#476A8E" border="1" rules ="ALL"> 					<tr><td>				<table cellspacing="10" cellpadding="0" bgcolor="#ffffff" align="center">		<form method="post" action="adduser.php" name="post" onSubmit="return checkEmail(this)" onSubmit="return checkform()">		<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">First Name: </td>		<td align="left"><input type="text" name="firstname" size="20" maxlength="20">		<td align="left" colspan="2"><font face="Verdana" color="#476A8E" size="1">School: <b><font face="Verdana" color="#476A8E" size="2">Baylor University</b></font></td></td>				<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">Last Name: </td>		<td align="left"><input type="text" name="lastname" size="20" maxlength="20"></td>				<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">User Name: </td>		<td align="left"><input type="text" name="username" size="20" maxlength="20">						</td>						<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">Phone: (optional) </td><td align="left"><input type="text" name="phone" size="20" maxlength="20"></td>		<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">Email Address:* </td><td align="left"><input type="text"  name="email" onfocus="JavaScript:email_name();" size="20" maxlength="50"><input type="hidden" name="email_name_notice" value=""></td>		<td align="left" colspan="2"><font face="Verdana" color="#476A8E" size="1">*See our <a href="privacy.php" target="new"> privacy statement</a></font></td>		<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">Password: </td><td align="left"><input type="password" name="passwd" size="20" maxlength="20"></td>		<tr><td align="left"><font face="Verdana" color="#476A8E" size="1">Confirm Password: </td><td align="left"><input type="password" name="passwd2" size="20" maxlength="20"></td>		<tr><td align="left" colspan="3"><font face="Verdana" color="#476A8E" size="1">By registering with Bubooks you agree to all <a href="terms.php" target="new">Terms of use</A></font></td>		<td align="right"><input type="submit" name="create" value="Create Account"></td></tr>		</form>		</td>		</table>	</td>	</table><BR>
			</div>

			


<!--- Footer --->


  <tr>

 	<td align="center" colspan="5" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#B2B6C8', EndColorStr='#476A8E');"><font size="4">

       
	

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

		
		<a href="logout.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF">
		
			<b>LOGOUT</b></font></a>
	</td>

  

</table>

<br>

<div align="center"><font size="-1">&copy;2003-2020 Bubooks.com - All rights reserved</font></div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-98854-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>

</html>
