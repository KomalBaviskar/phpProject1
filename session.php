<?php
   ob_start();
   session_start();
?>

 <?php
include('dbcon.php');
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {

		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result=mysqli_query($con,$qry);
	
      
    	        $count = mysqli_num_rows($result);

		 if ($count==1) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] =$username;
                  
                  echo 'Welcome '.$_SESSION['username'];
               }else {
			?>
		<script>
			alert("Invalid Login details please click on Register");
			window.open('login.php','_self');
		</script>
	      <?php
                  
               }
            }
	
	 
	
         ?>
<html>
<body>

<h4>Click here to clean </h4><a href = "logout.php" tite = "Logout">Session Logout

</body>
</html>


