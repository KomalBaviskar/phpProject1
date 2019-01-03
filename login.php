<?php
   ob_start();
   session_start();
?>
<html lang = "en">
   
    <head>
      <title>First Login page</title>
	</head>
	
   <body>
      
      <h2>Login Form</h2> 
     
        
      
      <form action = "session.php" method = "post">
            <input type = "text" name = "username" placeholder = "Enter username" required ></br>
            <input type = "password" name = "password" placeholder = "Enter password" required></br>
            <button type = "submit" name = "login">Login</button>
	    <input type="button" value="Register" onclick="window.location.href='register.php'"/>
         </form>
			
      
     </body>
</html>



