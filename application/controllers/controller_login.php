<?php
session_start();

class Controller_Login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function action_index()
    {
        if($_SESSION['admin']){
            header('Location: /');
        }
        else{
            $isAdmin = $this->model->set_admin($_POST);
            if($isAdmin){
                header('Location: /');
            }
            else
                $this->view->generate('login_view.php', 'template_view.php');
        }
    }
}