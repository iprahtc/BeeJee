<?php
session_start();
class Model_Login extends Model
{
    public function set_admin($post)
    {
        $sth = $this->db->prepare("SELECT COUNT(id) as count FROM admin WHERE name_admin = '". $post['name'] ."' or pass = '". md5($post['password']) ."'");
        $sth->execute();
        $count = $sth->fetch(PDO::FETCH_ASSOC)['count'];

        if($count == 1){
            $_SESSION['admin'] = true;
            return true;
        }
        else{
            return false;
        }

    }

}