<?php

function draw_admin_form() {
    
    ?>

<form enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="POST">


Загрузить файл с тестом в формате JSON, расширение файла должно быть обязательно .JSON !!!
<br>
<input name="testfile" type="file" />
<br>
<input type="submit" value="Отправить">
</form>

<?php
    
    
}

?>