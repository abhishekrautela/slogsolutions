<?php 
class FETCH{
public function __construct($email,$password)
{	include "connect.php";
	$query = "SELECT * FROM speaker";
	$data = mysqli_query($connect,$query);
	while($this->result = mysqli_fetch_assoc($data))
	{
		if($this->result['email'] == $email && $this->result['password'] == $password)
		{
			return $this->result;
		} 
	}
}
}


?>