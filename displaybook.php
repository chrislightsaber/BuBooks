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
						<a href = "clicksLog1.php?redirect=http://www.bubooks.com/advertising.php&adID=3" target='_new'>
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
 <td colspan = "5" background = "bckground.gif" bgcolor = "#FFFFFF">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>


	<title>BUBooks.com -  Textbooks</title>		



<script type="text/javascript" src="wz_tooltip/wz_tooltip.js"></script>


	<STYLE TYPE="text/css">		

	h3

	{

	text-align: center;
	color: #263B4E;
	font-family: Verdana;

	} 



	h1

	{

	text-align: center;

	color: #476A8E;

	font-family: Verdana;
	} 	



	.indented

	{


	padding-left: 15pt;

	padding-right: 15pt;

	}	


	p
	{


	color: #476A8E;


	font-family: Verdana;


	font-size: 8pt;

	} 	


	a:hover


	{


	color:orange;


	}



	</style>



<script type="text/javascript">




function SetID(theForm,theID,cbCount)


{



	if (theID == "")


	{


		return false;


	}


	else


	{


		// variables

		var cbName;

		var textName;


		theForm.action = "buybook1.php?ad_ids[]="  + theID;


		for (i=1; i<=cbCount; i++)

		{


			cbName = i + "cb" + theID;



			if (document.getElementById(cbName).checked)

			{

				theForm.action = theForm.action + "&ad_ids[]=" + document.getElementById(cbName).value;

			}

		}



		theForm.Submit();



		return true;

	}


}





function openpopup()

{

	var popurl="http://www.amazon.com/gp/product/images//ref=dp_primary-product-display_0/104-2366820-8353554?%5Fencoding=UTF8&n=283155&s=books";

	winpops=window.open(popurl,"","width=600,height=600, scrollbars, resizable");

} 


function openNewWindow(theISBN10, theISBN13, theAdID)

{

	if (theISBN10 == "N/A" && theISBN13 != "N/A")


		var popurl="http://www.bubooks.com/displaybook.php?isbn13="+theISBN13;
	

	if (theISBN10 != "N/A" && theISBN13 == "N/A")	

		var popurl="http://www.bubooks.com/displaybook.php?isbn="+theISBN10;		

	if (theISBN10 != "N/A" && theISBN13 != "N/A")


		var popurl="http://www.bubooks.com/displaybook.php?isbn="+theISBN10+"&isbn13="+theISBN13;

	
	if (theISBN10 == "Not Listed" && theISBN13 == "Not Listed")


		var popurl="http://www.bubooks.com/displaybook.php?ad_id="+theAdID;

	winpops=window.open(popurl,"","width=1000,height=600, scrollbars, resizable");

} 



function IsChecked(theCheckBox, cbCount)

{

	var cbName;

	var counter = 0;
	
	var textName;



	for (i=1; i<=cbCount; i++)

	{


		cbName = i + theCheckBox;
		

		if (document.getElementById(cbName).checked)

		{

			counter++;

		}

	}


	textName = "text" + theCheckBox.substring(2);


	if (counter > 0)

	{

		document.getElementById(textName).innerHTML=" + " + counter;		


	}
	
	else

		document.getElementById(textName).innerHTML="";

}


</script>	

</head>					





<BR>




<table align="center" bgcolor="#ffffff" border="1" rules="none" cellspacing="10" cellpadding="5" bordercolor= "#476A8E" width="60%"><tr><td width="25%" align="center"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT=""></td><td width="15%" valign="center><p align="left"><font face="Verdana" size="4" color="#476A8E">Book Info:</font></p><p align="right">Book Title:</p><p align="right">Author:</font></p><p align="right">Edition:</p><p align="right">Department:</p><p align="right">ISBN-10:</p><p align="right">ISBN-13:</p></td><td width="60%" align="left" valign="center><p align="left"><font face="Verdana" size="4" color="#476A8E">&nbsp;</font></p><p align="left"></p><p align="left"></p><p align="left">N/A</p><p align="left"></p><p align="left"></p><p align="left"></p></td></tr></table>

	<br>



	<!-- Advertisement  -->



    

<table align="center" border="0">
		    <tr><td>


							<a href = "clicksLog1.php?redirect=http://www.bubooks.com/advertising.php&adID=8" target='_new'>
							<img src = "ads/bubooks.gif" border="0">
				

		   </td></tr></table>


  

   <!-- End of Advertisement -->






<br>




<FORM id="resultsForm" name="resultsForm" method="post" action="">



<table id="resultsTable" name="resultsTable" align="center" bgcolor="#ffffff" cellpadding="5" rules="all" width="90%" border="1" bgcolor="#476A8E" bordercolor="#476A8E">



	<tr><th id="Description" align="center" width="50%">Description</th>

    

    <th id="OtherTextbooks" align="center" width="5%"><a onMouseOver="Tip('The number below represents the number of textbooks the seller has listed.<br><br> Use this feature to buy more than one textbook from a seller.')" onMouseOut="UnTip()"><img src="images/textbooks1.jpg" border="0" alt="Other Books"><img src="images/question.gif" border="0"></a></th>

    

    <th id="Phone" align="center" width="5%"><a onMouseOver="Tip('Phone number listed. <br><br> <b>Y</b> = Yes /  <b>N</b> = No <br><br> <b>Scroll over Y</b> to view phone number. Login to view')" onMouseOut="UnTip()"><img src="images/phone.jpg" border="0" alt="Phone"><img src="images/question.gif" border="0"></a></th>

    

    <th id="DateListed" align="center" width="10%">Date Listed</th>

    

    <th id="Price" align="center" width="5%">Price</th>

    

    <th align="center" width="20%">Buy</th></tr>




<tbody><tr bgcolor="#FDF5E6"><td>

    Please <a href= "login.php?redirect=displaybook.php?isbn=">Login</a>


	or <a href="signup.php">Signup</a> to buy textbooks	


	</td>

		<td align="center">



	7</td><td align="center">N</td><td align="center">Feb 21, 2021</td><td align="center">$20</td>


		<td align="center">



		<input type="button" style="cursor:pointer;" value="Login" onClick="window.location.href='http://www.bubooks.com/login.php?redirect=displaybook.php?isbn='">


        or <input type="button" style="cursor:pointer;" value="Sign Up" onClick="window.location.href='http://www.bubooks.com/signup.php'">



    </td></tr><tr><td colspan="7"><table id="table47592" align="right" bgcolor="#C1CFDD" cellpadding="0" rules="all" width="100%" border="1" bordercolor="#476A8E" style="display:none"><tr><th colspan="5" bgcolor="#476A8E" align="center" height="30" ><font color="white" size="4">OTHER TEXTBOOKS LISTED BY THIS USER</font> <a href="#" onclick="if (table47592.style.display=='none') table47592.style.display=''; else table47592.style.display='none';">(HIDE)</a></tr></th><tr bgcolor="white"><th id="sellerTitle" align="center" width="60%" height="40" valign="center"><font size="4">Title</font></th><th id="sellerISBN" align="center" width="15%"><font size="4">ISBN</font></th><th id="Compare" align="center" width="15%"><font size="4">Compare</font></th><th id="Price" align="center" width="5%"><font size="4">Price</font></th><th id="Add" align="center" width="5%"><a onMouseOver="Tip('Press this to add multiple books to buy from this seller.  To complete the sale hit the select button above.')" onMouseOut="UnTip()"><font size="4">Add<img src="images/question.gif" border="0"></a> </font>

        

        </th></tr><tbody><tr><td align="left"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT="Engaging the Christian Scriptures"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0801039444', '9780801039447', '47598')">Engaging the Christian Scriptures</a></td><td align="center">0801039444<br>9780801039447</td><td align="center">LOW: $12<BR>AVG: $14</td><td align="center">$15</td><td align="center"><input type="checkbox" id="1cb47592" name="1cb47592" value="47598" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT="Foundations of Business"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('1305511069', '9781305511064', '47599')">Foundations of Business</a></td><td align="center">1305511069<br>9781305511064</td><td align="center">Only Textbook Listed</td><td align="center">$15</td><td align="center"><input type="checkbox" id="2cb47592" name="2cb47592" value="47599" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT="Microsoft Access 2016"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0134479556', '9780134479552', '47600')">Microsoft Access 2016</a></td><td align="center">0134479556<br>9780134479552</td><td align="center">Only Textbook Listed</td><td align="center">$12</td><td align="center"><input type="checkbox" id="3cb47592" name="3cb47592" value="47600" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT="Microsoft Excel 2016"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0134479564', '9780134479569', '47601')">Microsoft Excel 2016</a></td><td align="center">0134479564<br>9780134479569</td><td align="center">Only Textbook Listed</td><td align="center">$12</td><td align="center"><input type="checkbox" id="4cb47592" name="4cb47592" value="47601" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="images/no-image.gif" align="center" border="2" ALT="Principles of Marketing"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0273742973', '9780273742975', '47593')">Principles of Marketing</a></td><td align="center">0273742973<br>9780273742975</td><td align="center">Only Textbook Listed</td><td align="center">$15</td><td align="center"><input type="checkbox" id="5cb47592" name="5cb47592" value="47593" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="amazonImages/isbn9780060633165.gif" align="center" border="2" ALT="The Story of Christianity"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0060633166', '9780060633165', '47591')">The Story of Christianity</a></td><td align="center">0060633166<br>9780060633165</td><td align="center">Only Textbook Listed</td><td align="center">$10</td><td align="center"><input type="checkbox" id="6cb47592" name="6cb47592" value="47591" onclick="IsChecked('cb47592', 7);"></td></tr><tr><td align="left"><img width="50" height="65" align="center" src="amazonImages/isbn9780060633158.jpg" align="center" border="2" ALT="The Story of Christianity"> 

			&nbsp;&nbsp; 


			<a href="javascript:openNewWindow('0060633158', '9780060633158', '47597')">The Story of Christianity</a></td><td align="center">0060633158<br>9780060633158</td><td align="center">Only Textbook Listed</td><td align="center">$10</td><td align="center"><input type="checkbox" id="7cb47592" name="7cb47592" value="47597" onclick="IsChecked('cb47592', 7);"></td></tr></tbody></table></td></tr>

</tbody></table> 



</FORM>			



<!--- Footer --->


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

<div align="center"><font size="-1">&copy;2003-2021 Bubooks.com - All rights reserved</font></div>

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