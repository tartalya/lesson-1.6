<?php

error_reporting(E_ALL & ~E_NOTICE);

if (!json_decode(file_get_contents('list.db'), true)) {

    echo 'В базе нет ни одного теста';
    die;
}

$result = json_decode(file_get_contents('list.db'), true);

foreach ($result as $key => $value) {


    echo '<a href="test.php?id=' . $key . '">' . $value['name'] . '</a>';
    echo '<br><br>';
}
?>

