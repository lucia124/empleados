<?php
 include("config.php");
 
  
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id
	  FROM admin
	  WHERE username ='".$myusername."' and passcode = '".$mypassword."'";
	
	  echo $sql;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
	  $_SESSION['login_user'] = $row['id'];
      $sql1='select title from titles where emp_no='.$row['id'];
	  echo $sql1;
	  $result1=mysqli_query($db,$sql1);
	  $row1 = mysqli_fetch_array($result1);
   	
      if($row1['title'] == 'Manager') {
         
         
         $_SESSION['trabajador']=1;
         header("location: welcomeManager.php");
      }else {
		  
         header("location: welcomeEmpleado.php");
      
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = " " method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>