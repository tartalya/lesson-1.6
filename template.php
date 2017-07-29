<html>
    <head>
        <title>тест</title>
        <meta charset="utf-8">

        

    </head>

    <body>

    <center><h1>тест</h1></center>
        
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        
    <?php 
     
        
       for ($i=0; $i<count($test); $i++) {
           
           echo '<b>' . $test[$i]['questions'] . '<br><br>';
           
           foreach ($test[$i]['variants'] as $valu) {
               
               
               echo '<input type="radio" value="' . $valu . '" name="' . $i . '">' . $valu . '<br><br>';
               
               
           }
       }
 
    ?>
        <input type="hidden" name="testid" value="<?= $_GET['id'] ?>">
        <input type="submit" name="send" value="отправить">
    </form>
        
    </body>
</html>