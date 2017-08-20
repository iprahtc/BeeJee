<div class="row">
    <div class="container">
        <h2 class="center-align">Ведите данны для записи</h2>
        <form class="col s12" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Обязательно к заполнению" name="name" id="name" type="text" class="validate">
                    <label for="name">Имя*</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Обязательно к заполнению" name="email" id="email" type="text" class="validate">
                    <label for="email">Email*</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Не обязательно к заполнению" name="name_text" id="name_text" type="text" class="validate">
                    <label for="name_text">Название задачи</label>
                </div>
                <div class="input-field col s3">
                    <select name="status" id="status">
                        <option value="Выполненно">Выполненно</option>
                        <option value="Не выполненно">Не выполненно</option>
                    </select>
                    <label>Статус*</label>
                </div>
                <div class="file-field input-field col s6">
                    <div class="btn">
                        <span>File</span>
                        <input name="photo" type="file" id="photo" onchange="getPhoto(this)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea name="text" id="text" class="materialize-textarea"></textarea>
                    <label for="text">Задача*</label>
                </div>
                <div class="col s3">
                    <button id="save" class="waves-effect waves-light btn" type="submit">Сохранить</button>
                </div>
                <div class="col s3">
                    <button class="waves-effect waves-light btn modal-trigger" href="#modal" onclick="preload()">Пример</button>
                </div>
            </div>
        </form>
        <!-- Modal Structure -->
        <div id="modal" class="modal">
            <div class="modal-content" id="preview">
            </div>
        </div>
    </div>
</div>