<?php include('controlpage2.php'); ?>
<!DOCTYPE html>
<html>
<body>
<h1>Education</h1>
<form action="page2.php" method="POST">
University: <input type="text" name="university" placeholder="Enter university name" required> <?php echo $validateuniversity; ?><br><br>
Degree : <input type="text" name="degree" placeholder="Enter your degree" required> <?php echo $validatedegree; ?><br><br>
Major: <input type="text" name="major" placeholder="Enter your major" required><?php echo $validatemajor; ?><br><br>
Result: <input type="number" name="result"  step=".01" min="1.00" max="4.00" placeholder="3.95" required> <br><br>
Passing Year : <input type="date" name="passingYear" required><br><br>
<input type="submit" value="Submit">


</form>
</body>
</html>
