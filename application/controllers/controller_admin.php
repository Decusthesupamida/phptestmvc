<?php

class Controller_Admin extends Controller
{

	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}
    

	function action_index()
	{	

			$this->view->generate('admin_view.php', 'template_view.php');
		
		
	}
	function action_main()
	{	
		if(isset($_POST['submit']))
		{
			$login = $_POST['login'];
			$password = $_POST['password'];
		}
		if($this->model->check_admin($login,$password))
		{
			$data['login'] = $login;
			$data['article'] = $this->model->get_data();
			$this->view->generate('main_foradmin_view.php', 'template_view.php',$data);
		}
		else
		{
			echo '<script type="text/javascript">

			location="http://testbeejee/";
		  
			document.location.href="http://testbeejee/";
		  
			location.replace("http://testbeejee/");
		  
			window.location.reload("http://testbeejee/");
		  
			document.location.replace("http://testbeejee/");
		  
		  </script>';
		}
		
	}
}
?>