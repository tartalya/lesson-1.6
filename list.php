<?php

/*
  $test_primer = array(

  array ('questions' => 'Сколько будет 2х2',
  'variants' => array('5', '3', '4'),
  'right' => array('4')),

  array ('questions' => 'Сколько будет 2х8',
  'variants' => array('19', '56', '16'),
  'right' => array('16')


  ));



  echo json_encode($test_primer);

  echo '<pre>';
  print_r($test_primer);
 */
?>


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

