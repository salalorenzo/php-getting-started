<?php
    setcookie('c', isset($_COOKIE['c']) ? $_COOKIE['c']++ : 1);
    $contaVisite = $_COOKIE['c'];
?>


<html> 
    <head> 
        <title>Contatore accessi alla pagina</title> 
    </head> 
    <body> 
        <?if ($contaVisite == 1): ?>
            E' la prima volta!
        <?else:?> 
            Totale visite: <?= $_COOKIE['c'] ?> times. 
        <?endif;?>
    </body> 
</html>
