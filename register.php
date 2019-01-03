<?php
   ob_start();
   session_start();
?>
<html lang = "en">
   
    <head>
      <title>Register page</title>
	</head>
	
   <body>
      
      <h2>Register form</h2> 
     
        
      
      <form action="addRecord.php" method = "post">
           Enter Username : <input type = "text" name ="username" placeholder = "Enter username" 
               required autofocus></br>
            Enter Password : <input type = "password" name ="password" placeholder = "Enter password" required></br>
            
	    <button type = "submit" name = "Register">Submit</button>
		
		 <input type="button" value="Go back" onclick="window.location.href='login.php'"/>
         </form>
			
      
     </body>
</html>
