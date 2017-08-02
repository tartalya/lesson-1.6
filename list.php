<?php


if (!json_decode(file_get_contents('list.db'), true)) {

    echo 'В базе нет ни одного теста';
    die;
}

if (is_null($result = json_decode(file_get_contents('list.db'), true))) {
    
    echo 'Файл базы поврежден или имеет не верный формат';
    die;
}

foreach ($result as $key => $value) {


    echo '<a href="test.php?id=' . $key . '">' . $value['name'] . '</a>';
    echo '<br><br>';
}
?>

