<?php
include "db.php";
session_start();
 
$validateuniversity="";
$validatedegree="";
$validatemajor="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $university=$major=$degree="";

if(strlen($_POST["university"])<2)
{
    $validateuniversity= "Must be grater than 2 charecter";

}
else
{
    $university=$_REQUEST["university"];
}

if(strlen($_REQUEST["degree"])<1)
{
    $validatedegree= "Must be grater than 1 charecter";

}
else
{
    $degree=$_REQUEST["degree"];
}

if(strlen($_REQUEST["major"])<1)
{
    $validatemajor= "Must be grater than 1 charecter";

}
else
{
    $major=$_REQUEST["major"];
}



if($university=="" || $major=="" || $degree=="")
{
    echo "Failed.";
}
else
{
    
     $connection = new db();
     $conobj=$connection->OpenCon();



     $userQuery=$connection->InsertEmployee($conobj,"employee",$_SESSION["uname"],$_SESSION["password"],$_SESSION["fullname"],$_SESSION["mobileNo"],$_SESSION["dob"],$university,$degree,$major,$_REQUEST["result"],$_REQUEST["passingYear"]);

    if($userQuery)
    {
        echo "Employee registration Successful.";
        session_destroy();
    }
    else
    {
        echo "Please try again ";
    }
}
  
}

?>