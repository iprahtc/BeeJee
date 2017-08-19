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
        $data = $this->model->get_data();
        if(!$_POST['ajax'])
            $this->view->generate('new_view.php', 'template_view.php', $data);
    }
}