 <?php
include('dbcon.php');
            
            if (isset($_POST['Register']) ) {

		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$qry="INSERT INTO admin (username, password) VALUES ('$username','$password')";
		//$result=mysqli_query($con,$qry);
		

		 if (mysqli_query($con,$qry)) {
                  
                  ?>
		<script>
			alert("Result added successfully you can login now");
			window.open('login.php','_self');
		</script>
	      <?php
               }else {
			?>
		<script>
			alert("fail to add record please register again");
			window.open('login.php','_self');
		</script>
	      <?php
                  
               }
            }
	
	 
	
         ?>
<html>
<body>
