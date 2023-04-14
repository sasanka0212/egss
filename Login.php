<?php
 include('main.php');
session_start();

$strmsg=null;
if(isset($_POST['logsub']) && $_POST['logsub']=='loginsubmit')
{
	$userid=$_POST['userid'];
	$pwd=$_POST['pwd'];
	$sql="select count(*) as 'count' from reg2 where userid='".$userid."' and password='".$pwd."'";
	$record_set=mysql_query($sql);
	$row=mysql_fetch_array($record_set);
	
	if($row['count']>0)
	{
		$_SESSION['userid']=$userid;
		header('location: college_allow.php');
	}
	else{
		$strmsg='Wrong User Id and Password';
	}	
		
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style3.css"></link>
<link href='//fonts.googleapis.com/css?family=Atomic Age' rel='stylesheet'>
<style type="text/css">
<!--
.style1 {color: #333333}
.style3 {color: #FFFFFF}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style5 {color: #000033}
.style8 {color: #990033; font-weight: bold; }
.style9 {color: #000000}
-->
</style>
</head>

<body bgcolor="#FFFFFF">
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
          </table>          </td>
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
    </table>      
    </td>
  </tr>
</table>
<table width="48%" height="254" align="center">
              <td height="2">
              <tr> 
                <td height="212"> <hr color="#669966" width="100%"> 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <?php if($strmsg!=null)
         {
       ?>
       <h3 align="center" ><font face="forte" color="red"><?php echo $strmsg; ?> </font></h3>
      <?php
	  } 
	  ?>
                    <table width="80%" height="207" border="1" align="center">
                          <tr><th colspan="2" bgcolor="#666666" ><span class="style3">Login</span></th>
                      </tr>
                        <tr bgcolor="#F2F1D9"> 
                          <td width="32%" align="right"><span class="style8"><strong>Userid</strong></span></td>
                          <td width="68%" align="left">
                            <label>
                              <input name="userid" type="text" class="po" />
                            </label>
                          </td>
                        </tr>
                        <tr bgcolor="#F2F1D9"> 
                          <td align="right"><span class="style8"><strong>Password</strong></span></td>
                          <td align="left" >
                            <label>
                            <input name="pwd" type="password" class="po" />
                            </label>
                          </td>
                        </tr>
                      <tr bgcolor="#F2F1D9"> 
                        <td align="right">
                          <label>
                         <input type="hidden" value="loginsubmit" name="logsub" id="logsub">
		         <input name="Submit" type="submit"  class="style8" value="Login" />
                          </label>
                        </td>
                        <td align="left">
                          <label>
                          <input name="Submit2" type="reset" class="style8" value="Reset" />
                          </label>
                        </td>
                      </tr>
                      <tr > 
                        <td colspan="2"> <div align="center"><a href="reg.php" class="style9"><strong>New 
                            users - Please Create New Account</strong></a></div></td>
                      </tr>
                  </table>
                  <hr width="100%" color="#669966">
                <h3 align="center">&nbsp;</h3></td>
         </tr>
</table>
<form>
</body>
</html>
