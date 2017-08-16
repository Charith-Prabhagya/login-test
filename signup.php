<?php
include 'header.php';
?>


 <?php
 	if (isset($_SESSION['id'] )) { 
 		// display content acording to user log in
 		echo $_SESSION['id'];
 	}
 	else{
 		echo "You are not logged in!";
 	}
 ?>

<br><br><br>

<?php 
	if (isset($_SESSION['id'] )) {  
 		// display content acording to user log in
 		echo "you are already logged in!";
 	}
 	else{
 		//echo "You are not logged in!";

 		echo "<form action='includes/signup.inc.php' method='POST'>
		<input type='text' name='first' placeholder='Firstname'><br>
		<input type='text' name='last' placeholder='Lastname'><br>
		<input type='text' name='uid' placeholder='Username'><br>
		<input type='password' name='pwd' placeholder='Password'><br>
		<button type='submit'>SIGN UP</button>
		</form> ";
 	}
?>





</body>
</html>