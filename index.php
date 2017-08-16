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








</body>
</html>