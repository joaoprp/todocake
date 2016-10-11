<?php // 1. adicionar o php a abertura da tag. Short opens não são sempre disponíveis em configurações de servidor

	if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) ||
		(isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true)) { // 2 . juntando if e elseif pra mesma condicional, uma vez que ambas retornam a mesma coisa. KISS é um bom padrão a ser seguido nesses casos.
		
		header("Location: http://www.google.com");
		exit();
	}