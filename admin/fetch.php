<?php
$tech = $_GET['datavalue'];
include "../connect.php";
$query = "SELECT * FROM training WHERE technology='$tech' ";
$data = mysqli_query($connect,$query);
// echo($data);
$img = [];

while($result = mysqli_fetch_assoc($data))
{
    foreach($result as $value)
    {
        echo "$value=";
    }
    
// array_push($img,$result['wfu']);

}




?>