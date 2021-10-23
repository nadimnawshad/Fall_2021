<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "CV";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}


function InsertEmployee($conn,$table,$userName,$password,$fullName,$MobileNo,$dob,$university,$degree,$major,$result,$passingYear ) {

     $sql = "INSERT INTO $table (userName,password,fullName,MobileNo,dob,university,degree,major,result,passingYear ) VALUES ('$userName','$password','$fullName','$MobileNo','$dob','$university','$degree','$major','$result','$passingYear')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>