<!DOCTYPE html>
<html>
<head>
  <title>Rating for John Osborn</title>
  <style type="text/css">

  <!--
        h2
        {
                text-align: center;
                color: #476A8E;
                font-family: Verdana;
        } 
        p
        {
                color: #111111;
                font-family: Verdana;
                font-size: 10pt;
        } 
        .a
        {
                font-family: "Times New Roman", Times, serif;
                font-size:17px;
                color: #000000;
        }
        form
        {
                margin-top: 0px;
                margin-bottom: 0px;
        }
        .text
        {
                font-family: Verdana;
                font-size: 10pt;
                color: #263B4E;
        }
        .search
        {
                font-family: Verdana;
                font-size: 12pt;
                font-weight: bold;
                color: #263B4E;
        }
        .title 
        {
                font-family: Verdana;
                font-variant: small-caps;
                text-transform: lowercase;
                font-weight: bold;
                color: #FFFFFF;
                font-size: 16pt;
                padding-left: 10pt;
        }
        .title2
        {
                font-family: Verdana;
                font-variant: small-caps;
                text-transform: lowercase;
                font-weight: bold;
                color: #FFFF00;
                font-size: 16pt;        
        }
  -->
  </style>
</head>
<body bgcolor="#FFFFFF" vlink="#0066FF" leftmargin="0" rightmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table border="1" rules="all" cellpadding="3" cellspacing="0" bordercolor="#476A8E" bgcolor="#476A8E" width="100%" align="center">
    <tr>
      <td width="100%" height="85" bgcolor="#476A8E" colspan="5">
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#476A8E" width="100%">
          <tr>
            <td align="left" rowspan="2" width="70%">
              <a href="index.php"><img src="logo.gif" width="261" height="64" border="0"></a>
            </td>
            <td align="right">
              <table align="right" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <a href="clicksLog1.php?redirect=http://bubooks.com/advertising.php&adID=5" target='_new'><img src="ads/bubooks.gif" border="0">
                    <table>
                      <tr>
                        <td align="center"><font face="verdana" size="1" color="#FFFFFF">Advertisement - Click for coupon or website</font></td>
                      </tr>
                    </table></a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="center" width="20%" bgcolor="#FFFFFF" height="23" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
              <a href="login.php" style='text-decoration:none;'><font face="Arial, Verdana" size="3" color="#000000"><b>Login</b></font></a>
            </td>
            <td align="center" width="20%" bgcolor="#FFFFFF" height="23" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
              <a href="books.php" style='text-decoration:none;'><font face="Arial, Verdana" size="3" color="#000000"><b>Textbooks</b></font></a>
            </td>
            <td align="center" width="20%" bgcolor="#FFFFFF" height="23" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
              <a href="profrate.php" style='text-decoration:none;'><font face="Arial, Verdana" size="3" color="#000000"><b>Professor Ratings</b></font></a>
            </td>
            <td align="center" width="20%" bgcolor="#FFFFFF" height="23" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');">
              <a href="classified.php" style='text-decoration:none;'><font face="Arial, Verdana" size="3" color="#000000"><b>Classified Ads</b></font></a>
            </td>
            <td align="center" width="20%" bgcolor="#FFFFFF" height="23" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#FFFFFF', EndColorStr='#B2B6C8');"><font face="Arial, Verdana" size="3" color="#000000"><b>Apartment Guide</b></font></td>
          </tr>
          <tr>
            <td colspan="5" background="bckground.gif" bgcolor="#FFFFFF">
              <script language="javascript" type="text/javascript">
              //Change the image without refreshing the page...
              function setTempImage(f, name, c) 
              {
                var color = c;
                var hit = document.getElementById("color_" + name).value;

                //if star is already red and they clicked on a star
                //we need to change that star to yellow
                if(c != 2) 
                {
                        if(hit == "hit")
                        {
                                c = 2;
                                //if user did not click on a star, keep star same color
                        }
                        else 
                        {
                                c = 1;
                        }
                }

                eval("document.getElementById('" + name + "').src='stars_" + c + "_" + f + ".gif';");

                //sets the hidden field the value of the rating to keep for future reference
                eval("document.getElementById('input_" + name + "').value=" + f);
              }

              function rateF(f, num, id, name, c) 
              {
                var nn4 = (document.layers) ? true : false
                var ie = (document.all) ? true : false
                var dom = (document.getElementById && !document.all) ? true : false

                if(nn4)
                {
                        path = document.layers["userName" + num].value;
                }
                else if(ie)
                {
                        path = document.all["userName" + num].value;
                } 
                else 
                {
                        path = document.getElementById("userName" + num).value;
                }
                
                window.open("rate.php?rateid=" + num + "&user=" + path + "&rate=" + f + "&profid=" + id, "newwindow", config="height=1, width=1, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no");
                window.focus();

                //Change the image without refreshing the page...
                document.getElementById("color_" + name).value = "hit";

                setTempImage(f, name, c);
              }
              </script> 
              <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
            </td>
          </tr>
          <tr>
            <td bgcolor="#476A8E" align="left" colspan="5"><span class="title">Search / Options</span></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" colspan="5" background="images/bckground.gif">
              <form id="search" method="get" action="profdisplay.php" name="search">
                <table width="100%" cellspacing="0" cellpadding="2" border="1" bordercolor="#476A8E" rules="none">
                  <tr>
                    <td align="center" colspan="5"><span class="search"><br>
                    Showing professor &nbsp;&nbsp; <select id="profid" name="profid">
                      <option value="">
                        -- SELECT --
                      </option>
                      <option style="font:courier" value="2991">
                        Adamson, Amber (85)
                      </option>
                      <option style="font:courier" value="2153">
                        Bates, Elizabeth (68)
                      </option>
                      <option style="font:courier" value="1182">
                        Burleson, Cassandra (46)
                      </option>
                      <option style="font:courier" value="2041">
                        Callaway, Curtis (82)
                      </option>
                      <option style="font:courier" value="1043">
                        Darden, Robert (91)
                      </option>
                      <option style="font:courier" value="2258">
                        Gietzen, Bruce (67)
                      </option>
                      <option style="font:courier" value="2573">
                        Hernandez, Macarena (59)
                      </option>
                      <option style="font:courier" value="2900">
                        Iazzetti, Emily (87)
                      </option>
                      <option style="font:courier" value="2025">
                        Neill, Marlene (71)
                      </option>
                      <option style="font:courier" value="399">
                        Owens, Brad (73)
                      </option>
                      <option style="font:courier" value="2743">
                        Parrish, Sussane (63)
                      </option>
                      <option style="font:courier" value="342">
                        Parrish, (89)
                      </option>
                      <option style="font:courier" value="2891">
                        Rogers, Franci (98)
                      </option>
                      <option style="font:courier" value="1020">
                        Tankersley, Kevin (96)
                      </option>
                      <option style="background-color: LightGrey;" value="oldprofs">
                        -- OLD PROFESSOR RATINGS --
                      </option>
                      <option style="background-color: LightGrey;" value="1148">
                        Abercrombie, Alisan (25)
                      </option>
                      <option style="background-color: LightGrey;" value="868">
                        Abercrombie, Eric (70)
                      </option>
                      <option style="background-color: LightGrey;" value="849">
                        Baker, Clark (75)
                      </option>
                      <option style="background-color: LightGrey;" value="744">
                        Bishop, Michael (77)
                      </option>
                      <option style="background-color: LightGrey;" value="580">
                        Bracken, Sharon (70)
                      </option>
                      <option style="background-color: LightGrey;" value="867">
                        Bradfield, Rick (75)
                      </option>
                      <option style="background-color: LightGrey;" value="1547">
                        Carr, Paul (83)
                      </option>
                      <option style="background-color: LightGrey;" value="2060">
                        Ferdon, Douglas (75)
                      </option>
                      <option style="background-color: LightGrey;" value="174">
                        Hamric, (90)
                      </option>
                      <option style="background-color: LightGrey;" value="2791">
                        Holbrook, Brad (35)
                      </option>
                      <option style="background-color: LightGrey;" value="302">
                        James, K (75)
                      </option>
                      <option style="background-color: LightGrey;" value="579">
                        Key, Cassy (73)
                      </option>
                      <option style="background-color: LightGrey;" value="386">
                        Moody-Hall, (77)
                      </option>
                      <option style="background-color: LightGrey;" value="2525">
                        Moore, Bethany (65)
                      </option>
                      <option style="background-color: LightGrey;" value="558">
                        Perry, Carol (76)
                      </option>
                      <option style="background-color: LightGrey;" value="363">
                        Polk, (65)
                      </option>
                      <option style="background-color: LightGrey;" value="805">
                        Preddy, Randy (73)
                      </option>
                      <option style="background-color: LightGrey;" value="259">
                        Quarles (woman), (85)
                      </option>
                      <option style="background-color: LightGrey;" value="1340">
                        Sanchez, Carlos (60)
                      </option>
                      <option style="background-color: LightGrey;" value="2415">
                        Starnes, Amy (95)
                      </option>
                      <option style="background-color: LightGrey;" value="193">
                        Taylor, Rebecca (72)
                      </option>
                    </select> &nbsp;&nbsp;in the &nbsp;&nbsp; <select id="dept" name="dept" style="cursor:pointer; font-size : 10pt">
                      <option value="select">
                        --SELECT--
                      </option>
                      <option value="Show All">
                        Show All
                      </option>
                      <option value="Accounting">
                        Accounting
                      </option>
                      <option value="Aerospace Studies">
                        Aerospace studies
                      </option>
                      <option value="African Studies">
                        African studies
                      </option>
                      <option value="Air Pilot">
                        Air pilot
                      </option>
                      <option value="Anthropology">
                        Anthropology
                      </option>
                      <option value="Arabic">
                        Arabic
                      </option>
                      <option value="Art">
                        Art
                      </option>
                      <option value="Asian Studies">
                        Asian studies
                      </option>
                      <option value="Aviation Sciences">
                        Aviation sciences
                      </option>
                      <option value="Baylor Interdisciplinary Core">
                        Baylor interdisciplinary core
                      </option>
                      <option value="Biology">
                        Biology
                      </option>
                      <option value="Business">
                        Business
                      </option>
                      <option value="Business Law">
                        Business law
                      </option>
                      <option value="Chapel">
                        Chapel
                      </option>
                      <option value="Chemistry">
                        Chemistry
                      </option>
                      <option value="Chinese">
                        Chinese
                      </option>
                      <option value="Christian Religious Education">
                        Christian religious education
                      </option>
                      <option value="Church-state studies">
                        Church-state studies
                      </option>
                      <option value="Civic Education & Community Service">
                        Civic education & community service
                      </option>
                      <option value="Classics">
                        Classics
                      </option>
                      <option value="Communication Sciences & Disorders">
                        Communication sciences & disorders
                      </option>
                      <option value="Communication Studies">
                        Communication studies
                      </option>
                      <option value="Computer Science">
                        Computer science
                      </option>
                      <option value="Curriculum and Instruction">
                        Curriculum and instruction
                      </option>
                      <option value="Economics">
                        Economics
                      </option>
                      <option value="Education">
                        Education
                      </option>
                      <option value="Educational Psychology">
                        Educational psychology
                      </option>
                      <option value="Engineering">
                        Engineering
                      </option>
                      <option value="English">
                        English
                      </option>
                      <option value="Entrepreneurship">
                        Entrepreneurship
                      </option>
                      <option value="Environmental Studies">
                        Environmental studies
                      </option>
                      <option value="Family and Consumer Sciences">
                        Family and consumer sciences
                      </option>
                      <option value="Film and Digital Media">
                        Film and digital media
                      </option>
                      <option value="Finance">
                        Finance
                      </option>
                      <option value="First Year Seminars">
                        First year seminars
                      </option>
                      <option value="Forensic Science">
                        Forensic science
                      </option>
                      <option value="French">
                        French
                      </option>
                      <option value="Geography">
                        Geography
                      </option>
                      <option value="Geology">
                        Geology
                      </option>
                      <option value="German">
                        German
                      </option>
                      <option value="Gerontology">
                        Gerontology
                      </option>
                      <option value="Great Texts">
                        Great texts
                      </option>
                      <option value="Greek">
                        Greek
                      </option>
                      <option value="Health Education">
                        Health education
                      </option>
                      <option value="History">
                        History
                      </option>
                      <option value="Honors">
                        Honors
                      </option>
                      <option value="Human Performance">
                        Human performance
                      </option>
                      <option value="Information Systems">
                        Information systems
                      </option>
                      <option value="International">
                        International
                      </option>
                      <option value="International Business">
                        International business
                      </option>
                      <option value="Italian">
                        Italian
                      </option>
                      <option value="Japanese">
                        Japanese
                      </option>
                      <option value="Journalism" selected>
                        Journalism
                      </option>
                      <option value="Korean">
                        Korean
                      </option>
                      <option value="Latin">
                        Latin
                      </option>
                      <option value="Law">
                        Law
                      </option>
                      <option value="Leadership Development">
                        Leadership development
                      </option>
                      <option value="Leadership/Administration">
                        Leadership/administration
                      </option>
                      <option value="Management">
                        Management
                      </option>
                      <option value="Marketing">
                        Marketing
                      </option>
                      <option value="Mathematics">
                        Mathematics
                      </option>
                      <option value="Medical Humanities">
                        Medical humanities
                      </option>
                      <option value="Modern Foreign Languages">
                        Modern foreign languages
                      </option>
                      <option value="Music">
                        Music
                      </option>
                      <option value="Neuroscience">
                        Neuroscience
                      </option>
                      <option value="none">
                        None
                      </option>
                      <option value="Nursing">
                        Nursing
                      </option>
                      <option value="OTHER">
                        Other
                      </option>
                      <option value="Philosophy">
                        Philosophy
                      </option>
                      <option value="Physics">
                        Physics
                      </option>
                      <option value="Political Science">
                        Political science
                      </option>
                      <option value="Portuguese">
                        Portuguese
                      </option>
                      <option value="Pre-Health Professions">
                        Pre-health professions
                      </option>
                      <option value="Psychology">
                        Psychology
                      </option>
                      <option value="Quantitative Business Analysis">
                        Quantitative business analysis
                      </option>
                      <option value="Real Estate">
                        Real estate
                      </option>
                      <option value="Recreation & Leisure Services">
                        Recreation & leisure services
                      </option>
                      <option value="Religion">
                        Religion
                      </option>
                      <option value="Risk Management and Insurance">
                        Risk management and insurance
                      </option>
                      <option value="Russian">
                        Russian
                      </option>
                      <option value="Social Work">
                        Social work
                      </option>
                      <option value="Sociology">
                        Sociology
                      </option>
                      <option value="Spanish">
                        Spanish
                      </option>
                      <option value="Statistics">
                        Statistics
                      </option>
                      <option value="Swahili">
                        Swahili
                      </option>
                      <option value="Teacher Education">
                        Teacher education
                      </option>
                      <option value="Telecommunications">
                        Telecommunications
                      </option>
                      <option value="Theater Arts">
                        Theater arts
                      </option>
                    </select> &nbsp;&nbsp; department</span></td>
                  </tr>
                  <tr>
                    <td align="center" colspan="6">
                      <hr width="75%" color="#476A8E">
                    </td>
                  </tr>
                  <tr align="center">
                    <td bgcolor="#FFFFFF" colspan="5" background="images/bckground.gif">
                      <br>
                      <a href="clicksLog.php?redirect=http://bubooks.com/advertising.php&adID=1" target='_new'><img src="ads/bubooks.gif" border="0"></a>
                    </td>
                  </tr>
                </table>
                <script type="text/javascript">
                function submit_form(frm) 
                {
                frm.submit();
                }

                function getElmById(aID)
                { 
                return (document.getElementById) ? document.getElementById(aID)
                                  : document.all[aID];
                } 

                function validate_search()
                {
                var myDropDown = getElmById("dept");
                var errors = 0;

                if(errors>0) 
                {
                return false;
                }
                }

                function onChangeHandler(e)
                {
                var myevent = (e) ? e : window.event;

                submit_form(getElmById("search"));
                }

                function onChangeHandler_dept(e)
                {
                var myevent = (e) ? e : window.event;
                var prof = getElmById("profid");

                prof.selectedIndex = 0;

                submit_form(getElmById("search"));
                }

                var myDropDown = getElmById("profid");

                if(typeof(myDropDown) == "object")
                {
                myDropDown.onchange = onChangeHandler;
                }

                var myDropDown_dept = getElmById("dept");

                if(typeof(myDropDown_dept) == "object")
                {
                myDropDown_dept.onchange = onChangeHandler_dept;
                }

                var mySearchForm = getElmById("search");

                mySearchForm.onsubmit = validate_search;
                </script>
                <table>
                  <tr>
                    <td align="center" colspan="5" style="filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#B2B6C8', EndColorStr='#476A8E');"><font size="4"><a href="login.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>LOGIN</b></font></a> &nbsp; &nbsp; <a href="home.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>HOME</b></font></a> &nbsp; &nbsp; <a href="about.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>ABOUT US</b></font></a> &nbsp; &nbsp; <a href="faq.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>FAQ</b></font></a> &nbsp; &nbsp; <a href="privacy.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>PRIVACY</b></font></a> &nbsp; &nbsp; <a href="terms.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>TERMS OF USE</b></font></a> &nbsp; &nbsp; <a href="advertising.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>ADVERTISING</b></font></a> &nbsp; &nbsp; <a href="contact.php" style="text-decoration:none"><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><b>CONTACT US</b></font></a> &nbsp; &nbsp;</font></td>
                  </tr>
                </table><br>
                <div align="center">
                  <font size="-1">&copy;2003-2020 Bubooks.com - All rights reserved</font>
                </div>
                <script type="text/javascript">

                try {
                var pageTracker = _gat._getTracker("UA-98854-1");
                pageTracker._trackPageview();
                } catch(err) {}
                </script>
              </form>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
