<div class="row">
    <div class="col s12 m3">
        <div class="card grey light-green lighten-5">
            <h5 class="center-align">Сортировка</h5>
            <div class="card-content white-text">
                <div class="row">
                    <?
                    $url = (isset($_GET['p'])) ? '/main?p='.$_GET['p'] : '/main';
                    ?>
                    <form action="<?=$url?>" method="post">
                        <p>
                            <input name="filter" type="radio" id="email" value="email"/>
                            <label for="email">email</label>
                        </p>
                        <p>
                            <input name="filter" type="radio" id="name" value="name"/>
                            <label for="name">Имя пользователя</label>
                        </p>
                        <p>
                            <input name="filter" type="radio" id="status"  value="status"/>
                            <label for="status">Статус</label>
                        </p>
                        <button class="waves-effect waves-light btn" type="submit">Сортировать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="row">
            <? foreach($data['db'] as $v){?>
            <div class="col s12 m12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <div class="row">
                            <div class="col s6">
                                <img class="activator" <?="src='images/". $v['img']."'"?> width="320" height="240"/>
                            </div>
                            <div class="col s6">
                                <h6>Имя пользвателя: <?=$v['name'] ?></h6>
                                <h6>Email: <?=$v['email'] ?></h6>
                                <h6>Статус: <?=$v['status'] ?></h6>
                            </div>
                        </div>
                        <span class="card-title"><?=$v['name_text'] ?></span>
                        <p><?=$v['text'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?=$data['pag']?>
</div>