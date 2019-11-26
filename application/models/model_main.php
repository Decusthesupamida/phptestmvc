<?php
class Model_Main extends Model
{
	private $connection;
	public function get_data($offs = 0)
	{	$this->connection = mysqli_connect("localhost","root","","test");
		$result = mysqli_query($this->connection,"SELECT * FROM article LIMIT 3 OFFSET ". $offs ."");
		return $result;
	}
	public function add_article($login,$article){
		$this->connection = mysqli_connect("localhost","root","","test");
		$result = mysqli_query($this->connection,"INSERT INTO article (body, author) VALUES ('$article', '$login')");
	}
}

?>