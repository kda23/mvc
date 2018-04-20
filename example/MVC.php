<?php
class MainController
{
	public function index()
	{
		$model = new MainModel;
		$data = $model->getData();
		include 'view.php';
	}
}

class MainModel
{
	public function getData()
	{
		return $this->getDataFromDatabase();
	}

	private function getDataFromDatabase()
	{
		return 'Data from MainModel!';
	}
}

//router

$controller = new MainController;
call_user_func([$controller,'index']);
?>