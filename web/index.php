<?php
$t=time()+(60*60*24*7);
$n="conta";
?>

<html> 
    <head> 
        <title>Contatore accessi alla pagina</title> 
    </head> 
    <body> 
	<?php
	    if(!isset($_COOKIE["conta"]))
	    {
		$value=1;
		echo "Is the first time!";
		setcookie($n,$value,$t);
	    }
	    else
	    {
		$value=++$_COOKIE["conta"];
		echo "total:".$_COOKIE["conta"];
		setcookie($n,$value,$t);
	    }
	?>
    </body> 
</html>
