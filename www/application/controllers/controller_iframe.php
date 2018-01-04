<?php

class Controller_iframe extends Controller
{
  function __construct()
    {
        $this->model = new Model_Iframe();
        $this->view = new View();
    }
public function action_index()
{	        
    
    $data = $this->model->get_data();
    $this->view->generate('iframe_view.php','template_view.php', $data);
    return true;
}    
}

