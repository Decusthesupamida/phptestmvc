<?php

class Controller_Main extends Controller
{

	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}

	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
	function action_add()
	{	
		$this->view->generate('main_add_view.php', 'template_view.php');
	}
	function action_addarticle()
	{	
		$article = $_POST['body'];
		$login = $_POST['login'];
		$result = $this->model->add_article($login,$article);
		$data = $this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}