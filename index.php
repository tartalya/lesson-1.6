<?php

$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';

if ($_POST['send']) {
    
    
    echo 'результат получен';
    print_r($_POST);
    die();
    
}


if (!isset($_GET['id']))  {
    
    http_response_code(404);
    echo '404 страница не найдена';
    die();
}

if (!fopen($uploads_dir . '/' .$_GET['id'] . '.json', 'r')) {
    
    http_response_code(404);
    echo 'Такой тест не найден';
    die();
}

$file = $uploads_dir . '/' .$_GET['id'] . '.json';

$test = json_decode(file_get_contents($file), true);

//echo '<pre>';
//var_dump($test);

include'template.php';

?>





