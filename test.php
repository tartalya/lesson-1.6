<?php

$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';




if ($_POST['send']) {
    
    
    echo 'результат получен';
    print_r($_POST);
    
    
    
    var_dump($test);
    die();
    
}


if (!isset($_GET['id']))  {
    
    http_response_code(404);
    echo '404 страница не найдена';
    die();
}

$test_path = json_decode(file_get_contents('list.db'), true);



if (!$test_path[$_GET['id']]['path']) {
    
    http_response_code(404);
    echo 'Такой тест не найден';
    die();
    
}


$file = $_SERVER['DOCUMENT_ROOT'] . $test_path[$_GET['id']]['path'];



$test = json_decode(file_get_contents($file), true);

//echo '<pre>';
//var_dump($test);

include'template.php';

?>





