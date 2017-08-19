<?php print_r($data['db'])?>
<div class="row">
    <div class="col s12 m3">
        <div class="card grey light-green lighten-5">
            <h5 class="center-align">Сортировка</h5>
            <div class="card-content white-text">
                <div class="row">
                    <form action="#">
                        <p>
                            <input name="group1" type="radio" id="test1" />
                            <label for="email">email</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test2" />
                            <label for="test2">Имя пользователя</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test3"  />
                            <label for="test3">Статус</label>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="row">
            <?php foreach($data['db'] as $v){?>
            <div class="col s12 m12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <div class="row">
                            <div class="col s4">
                                <img class="activator" <?php echo "src='images/". $v['img']."'"?>/>
                            </div>
                            <div class="col s6">
                                <h6>Имя пользвателя: <?php echo $v['name'] ?></h6>
                                <h6>Email: <?php echo $v['email'] ?></h6>
                                <h6>Статус: <?php echo $v['status'] ?></h6>
                            </div>
                        </div>
                        <span class="card-title"><?php echo $v['name_text'] ?></span>
                        <p><?php echo $v['text'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php echo $data['pag']?>
</div>