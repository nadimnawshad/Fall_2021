<?php
session_start();
include('control.php'); 
if(!empty($_SESSION["uname"])) 
{
header("Location: page2.php"); 
}

?>
<!DOCTYPE html>
<html>
<body>
<h1>Personal Details</h1>
<form action="page2.php" method="POST">
User Name: <input type="text" name="uname" placeholder="Enter user name" required> <?php echo $validateuname; ?><br><br>
Password : <input type="password" name="password" placeholder="Enter a password" required> <?php echo $validatepass; ?><br><br>
Full Name: <input type="text" name="fullname" placeholder="Enter your full name" required><br><br>
Mobile No. <input type="tel" name="mobileNumber" pattern="[0]{1}[1]{1}[0-9]{9}" placeholder="01777111111" required><br><br>

Date of Birth : <input type="date" name="dob" required><br><br>
<input type="submit" value="Next">

</form>
</body>
</html>
