<?php
$branch = $_GET['datavalue'];
include "../connect.php";
$query = "SELECT * FROM training WHERE branch='$branch' ";
$data = mysqli_query($connect,$query);
$tech = [];
while($result = mysqli_fetch_assoc($data))
{
array_push($tech,$result['technology']);
}
foreach($tech as $value)
{
    echo "<option>$value</option>";
}
?>