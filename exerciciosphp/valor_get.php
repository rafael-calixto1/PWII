<?php
	
	if($_GET["n1"]>$_GET["n2"])
	{
		echo($_GET["n1"]." é maior que ". $_GET["n2"]);	
	}
	else echo$_GET(["n1"]." é maior que ". $_GET["n2"]);

	if($_GET["nome1"] == $_GET["nome2"])
	{
		echo("<br>os nomes são iguais<br>");
	}
	else
	{
		echo("<br>Os nomes são diferentes <br>");
	}
	

	if($_GET["idade"]>=18)
        {
                echo("Maior de idade"); 
        }
	else
	{
	       	echo("Menor de idade");
	}

?>	
