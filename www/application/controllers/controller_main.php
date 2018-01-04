<?php
class Controller_Main extends Controller
{
	
	function action_index()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
	$name = $_POST['username'];
	$email = $_POST['email'];
	$tema = $_POST['sales'];
	$message = $_POST['message']; 
        
       Model_Main::register($name,$email,$tema,$message);
        
        
}

	$this->view->generate('main_view.php', 'template_view.php','forma.php');
		return true;
	}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

