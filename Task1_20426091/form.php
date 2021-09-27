<?php include "result.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
First Name: <input type="text" name="fname"> <?php echo $validatefname; ?>
<br>

Last Name: <input type="text" name="lname"> <?php echo $validatelname; ?>
<br>

Age: <input type="text" name="age"> <?php echo $validateage; ?>
<br>

Designation:
  <input type="radio" id="jp" name="designation" value="Junior Programmer">
  <label for="jp">Junior Programmer</label>
  <input type="radio" id="sp" name="designation" value="Senior Programmer">
  <label for="sp">Senior Programmer</label>
  <input type="radio" id="pl" name="designation" value="Project Lead">
  <label for="pl">Project Lead</label>
  <br>
  <?php echo $validateradio; ?>
<br>

Preferred language
<input type="checkbox" id="java" name="JAVA" value="JAVA">
 JAVA<br>
<input type="checkbox" id="php" name="PHP" value="PHP">
PHP<br>
<input type="checkbox" id="cpp" name="C++" value="C++">
 C++<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $j;?>

<?php echo $p;?>

<?php echo $c;?>
<br>
Email: <input type="email" name="email"> <?php echo $validateemail; ?>
<br>
Password: <input type="password" name="password"> <?php echo $validateemail; ?>
<br>

<input type="submit" value="Submit"><input type="reset" value="Reset">
</form>
</body>
</html>
