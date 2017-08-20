<?php


class Model_New extends Model
{
    public function set_data()
    {
        if($_POST['name'] && $_POST['email'] && $_POST['status'] && $_POST['text']){

            if($_POST['name_text'])
                $name_text = $_POST['name_text'];
            else
                $name_text = '';
            $name_photo = '';

            //код работы с картинкой
            if($_FILES['photo']['tmp_name']){

                $sth = $this->db->prepare("SELECT MAX(id) as max FROM tasks");
                $sth->execute();
                $max = $sth->fetch(PDO::FETCH_ASSOC)['max'];
                $name_photo = $max .".jpg";
                $this->resizeimg($_FILES['photo']['tmp_name'], "images/". $name_photo, 320, 240);
            }

            //добавляем пользователя
            $userTable = $this->getInsertUser();
            $userTable->bindParam(':email', $_POST['email']);
            $userTable->bindParam(':name', $_POST['name']);
            $userTable->execute();

            //добавляем задание
            $tasksTable = $this->getInsertTask();
            $tasksTable->bindParam(':id_user', $this->db->lastInsertId());
            $tasksTable->bindParam(':status', $_POST['status']);
            $tasksTable->bindParam(':text', $_POST['text']);
            $tasksTable->bindParam(':img', $name_photo);
            $tasksTable->bindParam(':name_text', $name_text);
            $tasksTable->execute();
        }
    }

    //проверка на размерность картинки, преобразование в случае привышения и сохранение
    public function resizeimg($filename, $smallimage, $w, $h)
    {
        // получим размеры исходного изображения
        $size_img = getimagesize($filename);

        // Если размеры меньше, то масштабирования не нужно
        if (($size_img[0]<$w) && ($size_img[1]<$h)) return true;

        // создадим пустое изображение по заданным размерам
        $dest_img = imagecreatetruecolor($w, $h);
        $white = imagecolorallocate($dest_img, 255, 255, 255);
        if ($size_img[2]==2)
            $src_img = imagecreatefromjpeg($filename);
        else if ($size_img[2]==1)
            $src_img = imagecreatefromgif($filename);
        else if ($size_img[2]==3)
            $src_img = imagecreatefrompng($filename);

        imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $w, $h, $size_img[0], $size_img[1]);

        // сохраняем уменьшенную копию в файл
        if ($size_img[2]==2)  imagejpeg($dest_img, $smallimage);
        else if ($size_img[2]==1) imagegif($dest_img, $smallimage);
        else if ($size_img[2]==3) imagepng($dest_img, $smallimage);
        // чистим память от созданных изображений
        imagedestroy($dest_img);
        imagedestroy($src_img);
        return true;
    }
}