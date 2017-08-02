<?php

setcookie('login', "", time() - 10800);
setcookie('passkey', "", time() - 10800);
setcookie('user_id', "", time() - 10800);
setcookie('name', "", time() - 10800);
setcookie('guest_name', "", time() - 10800);

header('Location:' . $_SERVER['HTTP_REFERER']);



?>
                
