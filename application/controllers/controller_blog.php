<?php
class Controller_blog extends Controller
{
	function action_index()
	{	
		$this->view->generate('blog_view.php', 'template_view.php');
	}
}
?>