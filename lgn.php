<?php
$conn-mysqli_connect("localhost","root","beacky1234","my final website");
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Username = $_POST["Username"];
$Username = $_POST["Password"];
if($Username==="example_user" && $Password==="example_Password"){
    echo"Login successfull.welcome,". $Username."!";

}
else{
    echo"invalid username or password. please try again.";
}

}

?>

