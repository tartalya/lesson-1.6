<?php

function draw_admin_form() {
    ?>

    <form enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">


        Загрузить файл с тестом в формате JSON, расширение файла должно быть обязательно .JSON !!!
        <br>
        <input name="testfile" type="file" />
        <br>
        <input type="text" name="testname" placeholder="Введите название теста">
        <br>
        <input type="submit" value="Отправить">
    </form>

    <?php
}

function get_test($id) {


    $test_path = json_decode(file_get_contents('list.db'), true);



    if (!$test_path[$id]['path']) {

        return false;
    }

    $file = $test_path[$id]['path'];
    $test = json_decode(file_get_contents($file), true);

    return $test;
}

function get_test_name($id) {

    $test_path = json_decode(file_get_contents('list.db'), true);
    $test_name = $test_path[$id]['name'];

    return $test_name;
}
?>