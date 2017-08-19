<?php


class Model_New extends Model
{
    public function get_data()
    {
        if($_POST['ajax'] == true){
            echo 'ok';
        }
        else{
            return array(
            );
        }
    }
}