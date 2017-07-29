<?php


$test_primer = array(
    
        array ('questions' => 'Сколько будет 2х2', 
    'variants' => array('5', '3', '4'),
    'right' => array('4')),        
            
           array ('questions' => 'Сколько будет 2х8', 
    'variants' => array('19', '56', '16'),
    'right' => array('16')
            
            
            ));

        
        // 'Сколько будет 2х9'
        echo json_encode($test_primer);
        
    echo '<pre>';
  print_r($test_primer);

?>

<a href="/index.php?id=test1393301">Первый тестовый тест на попробовать</a>

