<?php
   ob_start();
   session_start();
?>

<?php
   setcookie("name", $_SESSION['username'], time()+3600, "/","", 0);
?>
<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         echo 'Name :'.$_COOKIE["name"]. "<br />";
        
      ?>
      
   </body>
</html>

<?php
   if( isset($_COOKIE["name"]))
   {
            echo "Welcome " . $_COOKIE["name"] . "<br />";
         }
         else{
            echo "Sorry... Not recognized" . "<br />";
		}
?>
