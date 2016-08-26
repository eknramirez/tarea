<?php
	
	echo "Taller 1 continuacion o parte 2:<br><br>";
        $numero = 7;
       // ejercicio literal a taller 1 continuacion parte 2:*
     if($numero < 0) {
		echo " El numero ingresado es negativo.<br>";
	}else {
		echo " El numero ingresado no es negativo.<br>";
	}

	  //ejercicio literal b taller 1 continuacion parte 2:*
	$varia = true;

	if($varia) {
		echo " Verdadero.<br><br>";
	}else {
		echo " Falso.<br><br>";
	}

	//ejercicio literal c taller 1 continuacion o parte *
	$valor = 4;
	$numeroprimo = 0;
	 
	for ($k = 1; $k < $valor; $k++) {
	    if ($valor % $k == 0) {
	        $numeroprimo++;
	    }
	}
	   if ($primo >= 2) {
	    echo .$valor." No es numero primo.<br>";
	} else {
	    echo .$valor." Es numero primo.<br>";
	}

	//ejercicio literal d taller 1 continuacion parte 2:*
	$numero2 = 44;

	if($numero2 > 35) {
		echo .$numero2." es mayor que el numero 35.<br>";
	}else {
		echo .$numero2." es menor que el  numero 35.<br>";
	}

	//ejercicio literal e taller 1 continuacion parte 2:*
	$num3 = 80;

	if($numero3 >= 0 && $numero3 <100) {
		echo .$numero3." es positivo y menor que el numero 100.<br><br>";
	}else {
		echo .$numero3." es negativo y menor queel numero  100.<br><br>";
	}

	//ejercicio literal F taller 1 continuacion parte 2:**
	$numero4 = 15;
    if($numero4 >= -3 && $numero4 <= 27) {
		echo .$numero4." pertenece al rango -3, 27.<br><br>";
	 }else {
		echo .$numero4." no pertenece al rango -3, 27.<br><br>";
	 }

	//ejercicio literal G taller 1 continuacion parte 2:**
	$num5 = 78;

	if($num5 >= 25 && $num5 <= 50) {
		echo .$num5." pertenece al intervalo 25, 50.<br>";
	}else {
		echo .$num5." no pertenece al intervalo 25, 50.<br>";
	}

	//ejercicio literal H taller 1 continuacion parte 2:**
	$numero6 = 13;

	if($numero6 % 1 < 15) {
		echo " El modulo de ".$numero6." es menor que 15.<br>";
	}else {
		echo " El modulo de ".$numero6." es mayor que 15.<br>";
	}
//ejercicio literal I taller 1 continuacion parte 2:**
	
	$numero7 = 6;

	if($numero7 % 2 == 0) {
		echo .$numero7." no es un numero impar.<br>";
	}else {
		echo .$numero7." es un numero impar.<br>";
	}
//ejercicio literal J taller 1 continuacion parte 2:**
	$numero8 = 4;
	$resultado;

	if($numero8 % 2 == 0) {
		$resultado = $numero8 ** 2;
		echo "El resultado al potenciar ".$numero8." al cuadrado es ".$resultado.".<br>";
	}else {
		$resultado = $numero8 ** 3;
		echo "El resultado al potenciar ".$numero8." al cubo es ".$resultado.".<br>";
	}

	//ejercicio literal K taller 1 continuacion parte 2:**
	$numero9 = 56;
	$nummero10 = 28;

	if($numero9 < $numero10) {
		echo "El maximo entre ".$numero9." y ".$numero10." es ".$numero10.".<br><br>";
	}else {
		echo " El maximo entre ".$numero9." y ".$numero10." es ".$numero9.".<br><br>";
	}

	//ejercicio literal L taller 1 continuacion parte 2:**
	$numero11 = 10;
	$numero12 = 50;
	$numero13 = 40;

	if($numero11 < $numero12 && $numero12 > $numero13) {
		echo " El maximo entre ".$numero11.", ".$numero12." y ".$numero13." es ".$numero12.".<br>";
	}else if($numero11 > $numero12 && $numero11 > $numero13) {
		echo " El maximo entre ".$numero11.", ".$numero12." y ".$numero13." es ".$numero11.".<br>";
	}else if($numero11 < $numero12 && $numero12 < $numero13) {
		echo " El maximo entre ".$numero11.", ".$numero12." y ".$numero13." es ".$numero13.".<br>";
	}

	//ejercicio literal M taller 1 continuacion parte 2:**
	$numero14 = 10;
	$numero15 = 23;

	if($numero14 < $numero15) {
		echo "Orden de menor a mayor ".$numero14.", ".$numero15.".<br>";
	}else {
		echo "Orden de menor a mayor ".$numero15.", ".$numero14.".<br>";
	}

	//ejercicio literal N taller 1 continuacion parte 2:***
	$numero16 = 45;
	$numero17 = 1342;
	$numero18 = 2343;

	if($numero16 > $numero17 && $numero17 > $numero18) {
		echo " Orden de mayor a menor ".$num16.", ".$numero17.", ".$numero18.".<br>";
	}else if($numero16 < $numero17 && $numero17 < $numero18) {
		echo " Orden de mayor a menor ".$numero18.", ".$numero17.", ".$numero16.".<br>";
	}else if($numero16 < $numero17 && $numero18 < $numero16) {
		echo " Orden de mayor a menor ".$numero17.", ".$numero16.", ".$numero18.".<br>";
	}else if($numero16 < $numero17 && $numero18 > $numero16) {
		echo " Orden de mayor a menor ".$num17.", ".$num18.", ".$num16.".<br>";
	}else if($numero16 > $numero18 && $numero18 > $numero17) {
		echo " Orden de mayor a menor ".$num16.", ".$num18.", ".$num17.".<br>";
	}else if($numero16 < $numero18 && $numero16 > $numero17) {
		echo " Orden de mayor a menor ".$numero18.", ".$numero16.", ".$numero17.".<br>";
	}

	//ejercicio literal O taller 1 continuacion parte 2:*


	// la funcion strlen($cadena) determina el numero de caracteres que componen una cadena de texto
	$cadenas = "amigo";
	
	if(strlen($cadenas) > 5) {
		echo " La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es largo.<br><br>";
	}else {
		echo " La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es corto.<br><br>";
	}

	//ejercicio literal P taller 1 continuacion parte 2:*

	//la funcion isset($miVariable) determina si la variable contenida como parametro existe y no es nula. (null).
	if(isset($existeono)) {
		echo " La variable si existe.<br>";
	}else {
		echo " La variable no existe.<br>";
	}

	//ejercicio literal Q taller 1 continuacion parte 2:*
	// la funcion  vacio o empty($variable) determina si la variabla contenida como parametro contiene informacion o no 
	$variableekn;

	if(empty($variableekn)) {
		echo " La variable no posee informacion.<br><br>";
	}else {
		echo " La variable contiene informacion.<br><br>";
	}
?>



