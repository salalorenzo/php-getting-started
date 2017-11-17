<?php
    setcookie('c', isset($_COOKIE['c']) ? $_COOKIE['c']++ : 1);
    $contaVisite = $_COOKIE['c'];

    if ($contaVisite == 1): 
        E' la prima volta!
    else:
        Totale visite: <?= $_COOKIE['c'] ?> times. 
    endif;
?>


<html> 
    <head> 
        <title>Contatore accessi alla pagina</title> 
    </head> 
    <body> 

    </body> 
</html>
