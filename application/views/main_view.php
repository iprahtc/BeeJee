<?php print_r($data)?>
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
            <?php foreach($data as $v){?>
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
    <div class="row center">
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>