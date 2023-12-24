<?php
	$name=$_REQUEST['name'];
        $email=$_REQUEST['Email'];
        $country=$_REQUEST['country'];

 if (isset($_post['btntest']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="web";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect-error){
die("connection failed:".$conn->connect_error);
}
$sql="insert into golden arab world values('$name','$email','$country')";
if($conn->query($sql)==true){
echo"Your Registration is Done";

}
else{
echo"Your Registration is Falied!".$conn->error;
}
$conn->close();
}
?>

