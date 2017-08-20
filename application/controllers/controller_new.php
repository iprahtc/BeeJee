<?php

class Controller_New extends Controller
{
    function __construct()
    {
        $this->model = new Model_New();
        $this->view = new View();
    }

    function action_index()
    {
        //var_dump($_POST);
        if(!$_POST){
            $this->view->generate('new_view.php', 'template_view.php');
        }
        else{
            $this->model->set_data();
            $this->view->generate('end_view.php', 'template_view.php');
        }
    }
}

