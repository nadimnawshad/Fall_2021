<?php 
$validateuname="";
$validatepass="";
$validatefullname="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname=$password=$fullname="";

if(strlen($_REQUEST["uname"])<4)
{
    $validateuname= "Must be grater than 4 charecter";

}
else
{
    $uname=$_REQUEST["uname"];
}

if(strlen($_REQUEST["fullname"])<6)
{
    $validatefullname= "Must be grater than 6 charecter";

}
else
{
    $fullname=$_REQUEST["fullname"];
}


if(strlen($_REQUEST["password"])<8 || strlen($_REQUEST["password"])>14)
{
    $validatepass= "Must be grater than 8 and less than 14 charecter";

}
else
{
    $password=$_REQUEST["password"];
}



if($uname=="" || $password=="" || $fullname=="")
{
    echo "Failed.";
}
else
{
    
    $_SESSION["uname"] = $uname;
    $_SESSION["password"] = $password;
    $_SESSION["fullname"] = $fullname;
    $_SESSION["mobileNo"] = $_REQUEST["mobileNumber"];
    $_SESSION["dob"] = $_REQUEST["dob"];


  
}
}
?>