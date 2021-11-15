<!DOCTYPE html>
<html>
<head>
	<title>FTTTask1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="headerContent">
				<h1>ABC Management System</h1>
				<h3>We Create Future</h3>
			</div>
			<nav>
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Shop</a></li>
				</ul>
			</nav>
			<div class="registrationForm">
				<div class="RegistrationHeading">
					<h2>Registration Form</h2>
			    </div>

			<br>
			<hr>
			<br>

			<form>
				<div class="l1">
					<label>First Name</label>
      				<input type="text" id="fname" name="firstname">
    			</div>
    			<br>
    			<div class="l2">
					<label>Last Name</label>
      				<input type="text" id="lname" name="lastname">
    			</div>
    			<br>
    			<div>
    				<label>Age: </label><input type="text" name="age">
    			</div>
    			<br>

<div class="l4">
<label>Designation:</label>
  <input type="radio" id="jp" name="designation" value="Junior Programmer">
  <label for="jp">Junior Programmer</label>
  <input type="radio" id="sp" name="designation" value="Senior Programmer">
  <label for="sp">Senior Programmer</label>
  <input type="radio" id="pl" name="designation" value="Project Lead">
  <label for="pl">Project Lead</label>
</div>
<br>
<div class="l5">
<label>Preferred language</label>
<input type="checkbox" id="java" name="JAVA" value="JAVA">
 JAVA
<input type="checkbox" id="php" name="PHP" value="PHP">
PHP
<input type="checkbox" id="cpp" name="C++" value="C++">
 C++<br>
</div>
<br>
<div class="l6">
	<label>Email:</label> <input type="email" name="email"> 
</div>
<br>
<div class="l7">
	<label>Password:</label> <input type="password" name="password">
</div>
<br>
<div class="l8">
	<label>Choose a file :</label><input type="file" name="filetoupload">
</div>
<br>
<div class="l9">
	<input type="submit" value="Submit"><input type="reset" value="Reset">
</div>
<br>
			</form>
			</div>

		</div>
	</header>
	<!-- header end -->

</body>
</html>