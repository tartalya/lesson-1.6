<?php

require_once 'functions.php';

if ($_POST['submit']) {

    if (have_user($_POST['login'])) {

        echo 'Такой пользователь существует'; //нужно проверить пароль
    } else if (!have_user($_POST['login']) && (empty($_POST['password']))) {

        echo 'Здравствуй гость ' . $_POST['login'];
    } else {

        echo 'Ошибка авторизации';
        include'templates/login.php';
    }

    //var_dump($_POST);
    die;
}

include'templates/login.php';
?>