<?php
class Model_Admin extends Model
{
	public function get_data($offs = 0)
	{	
		$conn = mysqli_connect("localhost","root","","test");
		$result = mysqli_query($conn,"SELECT * FROM article LIMIT 3 OFFSET ". $offs ."");
		return $result;
	}
	public function check_admin($login,$password){
		if(($login === 'admin')&&($password === '123')){
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>