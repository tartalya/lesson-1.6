<?php

require_once 'functions.php';

if ($_POST['submit']) {
    
    $user = new user();

    //if (have_user($_POST['login'])) {
    
    if ($user->exist($_POST['login'])) {
        echo 'Такой пользователь существует'; //нужно проверить пароль
    } else if (!$user->exist($_POST['login']) && (empty($_POST['password']))) {

        echo 'Здравствуй гость ' . $_POST['login'];
    } else {

        echo 'Ошибка авторизации';
        include'templates/login.php';
    }

    //var_dump($_POST);
    die;
}

include'templates/login.php';



// too memory 
// ini_set("session.gc_maxlifetime",10800) ;
// session_start();

?>