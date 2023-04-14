<?php include('main.php');?>

<?php session_start();?>
<?php
       $name=$_POST["name"];
      $userid=$_POST["userid"];
      $pass1=$_POST["secret1"];
      $pass2=$_POST["secret2"];
      $email=$_POST["email"];
         $f=1;
   echo " College name:- ". $name . " <br />";
   echo "Userid:- ". $userid . " <br />";
   echo "Email-id ". $email . " <br />";
if($pass1==$pass2)
{
 $query="insert into reg2(name,userid,password,email) values('$name','$userid','$pass1','$email')";
 $flag=false;
if(mysqli_query($dbc,$query))
{
    $_SESSION['email']= $email;
	    $flag=true;	
	    echo'<a href="reg2.php">Next Page</a>';
              			
          }
     }
	else
	{
                $flag=false;
		echo "password  must be same";
	}
?>
