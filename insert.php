<?php
//insert.php
$data = json_decode(file_get_contents("php://input"));

echo $ename = $data -> name;
echo $eemail = $data -> email;
echo $econtact = $data -> contact;
echo $epwd = $data -> pwd;

$connect = mysqli_connect("localhost","root","","Employees");
$query = "INSERT INTO employee(name,email,contact,password)values('ename','eemail','econtact','epwd')";
$result = mysqli_query($connect,$query);

if(!result){
	die("query failed".mysqli_error($connect));
}
?>