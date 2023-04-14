<?php
session_start();

     mysql_connect("localhost","root","");
     mysql_select_db("exam_guide_system");
   $pc=$_GET['userid'];
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #333333}
.style3 {color: #FFFFFF}
.style4 {	color: #FF0000;
	font-weight: bold;
}
.style5 {color: #000033}
.style7 {color: #CCCCCC}
.style8 {
	color: #0000FF;
	font-weight: bold;
}
.style9 {color: #0000FF}
-->
</style>
</head>

<body>
<table width="980" align="center" bordercolor="#000000">
  <tr>
    <td width="972" height="151" bgcolor="#CCCCCC" ><table width="965" height="122">
      <tr>
        <td width="126" height="116" background=""><img src="images (68).jpg" width="129" height="114" /></td>
        <td width="827" bordercolor="#FFFFFF"><h2 class="style1">Saroj Mohan Institute of Technology (Diploma Division) </h2>
              <p class="style4">Recognized By-A.I.C.T.E. Govt. of india &amp; State Council Education(W.B.)</p>
          <table width="831">
                <tr>
                  <td width="59" height="25" bgcolor="#666666"><div align="center"><span class="style3">&nbsp;<strong>Home</strong></span></div></td>
                  <td width="76" bgcolor="#666666"><div align="center" class="style3"><strong>About Us</strong> </div></td>
                  <td width="72" bgcolor="#666666"><div align="center"><span class="style3"><strong>Academic</strong></span>&nbsp;</div></td>
                  <td width="108" bgcolor="#666666"><div align="center"><strong><span class="style3">Administration</span>&nbsp;</strong></div></td>
                  <td width="119" bgcolor="#666666"><div align="center"><span class="style3"><strong>Organisation</strong></span>&nbsp;</div></td>
                  <td width="84" bgcolor="#666666"><div align="center"><strong><span class="style3">Course </span>&nbsp;</strong></div></td>
                  <td width="96" bgcolor="#666666"><div align="center" class="style3"><strong>Institute&nbsp;</strong></div></td>
                  <td width="181" bgcolor="#666666"><div align="center"><strong><span class="style3">Admission Procedure</span>&nbsp;</strong></div></td>
                </tr>
            </table></td>
      </tr>
    </table>
        <table width="968">
          <tr>
            <td width="960" bgcolor="#666666"><marquee behavior="alternate">
              <span class="style5">
              <marquee width="200">
              <strong>SAROJ MOHAN INSTITUTE OF TECHNOLOGY</strong>
              </marquee>
              </span>
            </marquee></td>
          </tr>
      </table></td>
  </tr>
</table>
<table width="300" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="674" align="center" border="1">
  <tr>
    <td width="664" height="161" bgcolor="#CCCCCC"><table width="664" border="1">
      <tr>
        <td width="656" height="32" bgcolor="#666666"><div align="center">
          <strong><font face="forte"><span class="style7">Assign Allocation</span></font><font color="blue" face="forte">&nbsp;</font></strong>
        </div></td>
      </tr>
    </table>
      <table width="664"><form action="ss.php" method="POST">
        <tr>
          <td width="270" height="43"><div align="center">&nbsp;<span class="style8"><strong>Room number :</strong>
		   </span></div></td>
          <td width="382"><input  type="text"  id="college_name"  name="collegename" style="background-color:#CC9966;  border-color:#e7fcff;"  size="30" maxlength="100"  /></td>
        </tr>
        <tr>
          <td height="43"><div align="center"><span class="style9"><strong>User ID:</strong> &nbsp;</span></div></td>
          <td><input   type="text"  id="user_id" name="userid" value="<?php echo $pc ?>" style="background-color:#CC9966;  border-color:#e7fcff;" size="30" maxlength="100" /></td>
        </tr>
        <tr>
          <td height="42"><div align="center"><span class="style9"><strong>College Address:</strong></span> &nbsp;</div></td>
          <td><input  type="text" id="collegeaddress" name="collegeaddress" style="background-color:#CC9966; border-color:#e7fcff;"   size="30" maxlength="100" /></td>
        </tr>
        <tr>
          <td><div align="center"><span class="style9"><strong>Date-Time:<br />
            Dateformat(YYYY-MM-DD H-M-S)</strong></span>&nbsp;</div></td>
          <td><input type="text" name="allocatedt" id="allocated_date_time"  style="background-color:#CC9966;  border-color:#e7fcff;" size="30" maxlength="100" placeholder="<?php echo date('Y-m-d h:i:s'); ?>" /></td>
        </tr>
        <tr>
          <td><div align="right">
            <label>
            <input type="SUBMIT" value="Submit">
            </label>
            &nbsp;</div></td>
          <td><label>
            <input type="reset" name="Submit2" value="Reset" />
          </label></td>
        </tr>
      </table>      </td>
  </tr>
</table>
<hr width="800" size="2" color="#666666" />
<p>&nbsp;</p>
</form>
</body>
</html>
