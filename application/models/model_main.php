<?php
session_start();

class Model_Main extends Model
{

    public function get_data()
    {
        return array(
            'pag' => $this->getCountList(),
            'db' => $this->gerDbList($_GET['p'], $_POST['filter'])
        );

    }

    private function gerDbList($get_pag, $filter)
    {
        //запоминаем фильтры который использовал пользователь
        if($_POST['filter'] == 'email')
            $_SESSION['Order'] = ' ORDER BY email ';
        if($_POST['filter'] == 'name')
            $_SESSION['Order'] = ' ORDER BY name ';
        if($_POST['filter'] == 'status')
            $_SESSION['Order'] = ' ORDER BY status ';

        if($get_pag == NULL)
            $get_pag = 0;
        else
            $get_pag = ($get_pag - 1)*3;

        $sth = $this->db->prepare("SELECT
                                      tasks.*,
                                      user.email,
                                      user.name
                                    FROM tasks
                                      INNER JOIN user
                                        ON tasks.id_user = user.id_user 
                                        ".$_SESSION['Order']."
                                        LIMIT ".$get_pag.",3");

        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * возвращает HTML с пагинацией
     * @return string
     */
    private function getCountList()
    {
        $sth = $this->db->prepare("SELECT COUNT(id) as count FROM tasks");
        $sth->execute();
        $count = $sth->fetch(PDO::FETCH_ASSOC)['count'];

        if($_GET['p'] == NULL || $_GET['p'] == 1)
        {
            if($count <= 3){
                return '<div class="row center"> 
                            <ul class="pagination">
                                <li class="active"><a href="main?p=1">1</a>
                                </li>
                            </ul>
                        </div>';
            }
            else {
                $html = '<div class="row center"> 
                            <ul class="pagination">
                                <li class="active"><a href="main?p=1">1</a></li>';
                for ($i = 3, $y = 2; $i < $count; $i++, $y++) {
                    $i += 2;
                    $html .= '<li class="waves-effect"><a href="/main?p='.$y.'">'. $y .'</a></li>';

                    if($i >= $count){
                        $html .= '<li class="waves-effect">
                                    <a href="main?p='. ($_GET['p']+1) .'"><i class="material-icons">chevron_right</i></a>
                                </li>';
                    }
                }

                $html .= '</ul></div>';

                return $html;

            }
        }
        else {
            if ($count <= $_GET['p'] || $_GET['p'] == 0) {
                $html = '<div class="row center"> 
                            <ul class="pagination">';
                for ($i = 0, $y = 1; $i <= $count; $i++, $y++) {
                    $i += 2;
                    $html .= '<li class="waves-effect"><a href="/main?p='.$y.'">'. $y .'</a></li>';
                }
                $html .= '</ul></div>';

                return $html;

            } else {

                $html = '<div class="row center"> 
                            <ul class="pagination">
                                <li class="disabled"><a href="main?p='. ($_GET['p']-1) .'"><i class="material-icons">chevron_left</i></a></li>';
                for ($i = 0, $y = 1; $i <= $count; $i++, $y++) {
                    $i += 2;
                    if($y == $_GET['p']){
                        $html .= '<li class="active"><a href="main?p='. $_GET['p'] .'">'. $_GET['p'] .'</a>';
                        continue;
                    }
                    $html .= '<li class="waves-effect"><a href="/main?p='.$y.'">'. $y .'</a></li>';
                    if($i >= $count){
                        $html .= '<li class="waves-effect">
                                    <a href="main?p='. $y .'"><i class="material-icons">chevron_right</i></a>
                                </li>';
                    }
                }
                $html .= '</ul></div>';

                return $html;
            }
        }
    }

}
