<?php include "../control/result.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="result.php" method="POST" onsubmit="return validateForm()">
First Name: <input type="text" name="fname" id="fname"> <?php echo $validatefname; ?>
<p id="firstNameValidation"></p>
<br>

Last Name: <input type="text" name="lname" id="lname">
<p id="lastNameValidation"></p>
<br>

Age: <input type="text" name="age" id="age">
<p id="ageValidation"></p>
<br>

Designation:
  <input type="radio" id="jp" name="designation" value="Junior Programmer">
  <label for="jp">Junior Programmer</label>
  <input type="radio" id="sp" name="designation" value="Senior Programmer">
  <label for="sp">Senior Programmer</label>
  <input type="radio" id="pl" name="designation" value="Project Lead">
  <label for="pl">Project Lead</label>
  <br>
  <p id="designationValidation"></p>
<br>

Preferred language
<input type="checkbox" id="java" name="JAVA" value="JAVA">
 JAVA
<input type="checkbox" id="php" name="PHP" value="PHP">
PHP
<input type="checkbox" id="cpp" name="C++" value="C++">
 C++<br>
<br>
<p id="langValidation"></p>
<?php $language = array($j,$p,$c);?>
<br>
Email: <input type="email" name="email" id="email">
<p id="emailValidation"></p>
<br>
Password: <input type="password" name="password" id="password" >
<p id="passValidation"></p>
<br>
Choose a file : <input type="file" name="filetoupload" id="file">
<p id="fileValidation"></p>
<br>
<input type="submit" value="Submit"><input type="reset" value="Reset">

<br><br><br>
<p id="data"></p>
</form>


<script type="text/javascript" src="../js/myjs.js"></script>
</body>
</html>
