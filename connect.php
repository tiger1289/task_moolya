<?php
$Name = filter_input(INPUT_POST, 'Name');
$EmployeeId = filter_input(INPUT_POST, 'eid');
$Basic_salary = filter_input(INPUT_POST, 'bsalary');
$Expension = filter_input(INPUT_POST, 'expension');
$Total = filter_input(INPUT_POST, 'total');


if (!empty($Name)){
if (!empty($EmployeeId)){
if (!empty($Basic_salary)){
if (!empty($Expension)){
if (!empty($Total)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "12345678";
$dbname = "salary";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO basic (Name, eid, bsalary, expension, total)
values ('$Name','$EmployeeId','$Basic_salary','$Expension','$Total')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Total should not be empty";
die();
}
}
else{
echo "Expension should not be empty";
die();
}
}
else{
echo "Basic salary should not be empty";
die();
}
}
else{
echo "EmployeeId should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}

