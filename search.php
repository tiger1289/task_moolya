
<?php

$link = mysqli_connect("127.0.0.1", "root", "12345678", "salary"); 
$set=$_POST['search'];
if($set){
$show ="SELECT * FROM basic where Name='$set'";
$result = mysqli_query($link, $show);
while ($rows=mysqli_fetch_array($result))
 {
echo "Name of User :";
echo $rows['Name'];
echo "<br>";
echo "Employee id :";
echo $rows['eid'];
echo "<br>";
echo "Basic salary :";
echo $rows['bsalary'];
echo "<br>";
echo "Expenditure :";
echo $rows['expension'];
echo "<br>";
echo "Total salary :";
echo $rows['total'];
exit;
  }
echo "NOTHING FOUND";
}
?>