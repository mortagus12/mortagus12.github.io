<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AFD</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
<link rel="stylesheet" href="estilos.css">
<body>
	<form class="formulario3">
	<h1>Un Autómata Finito Determinista (AFD)</h1>
	<br>
	Definición MATEMÁTICA de un AFD
	<h3><b><i>A = (Q, Σ, δ, s, F)</i></b></h3>
	<br>
	Donde:<br>
	Q: Un conjunto finito de estados.<br>
 	Σ: Un conjunto finito de símbolos de entrada (alfabeto)<br>
 	q0: El estado inicial/de comienzo.<br>
 	F: cero o más estados finales/de aceptacion<br>
 	δ: Funcion de transición.<br><br>
	Expresión Regular
	<br>
	Son patrones utilizados para encontrar una determinada combinación de caracteres dentro de una cadena de texto. Las expresiones regulares proporcionan una manera muy flexible de buscar o reconocer cadenas de texto. Por ejemplo, el grupo formado por las cadenas Handel, Händel y Haendel se describe con el patrón "H(a|ä|ae)ndel"
	<br>
	<br>	
	Gramática
	<br>
	La gramática es un ente formal para especificar, de una manera finita, el conjunto de cadenas de símbolos que constituyen un lenguaje.
	<br>
	<br>
	Definición formal de gramática
	<br>
	Una gramática G es una cuádrupla: 
	<h3><b><i>G=(VT, VN, S, P)</i></b></h3>
	donde:
	<br>
	VT = {conjunto finito de símbolos terminales}<br>
	VN = {conjunto finito de símbolos no terminales}<br>
	S el es símbolo inicial y pertenece a VN.<br>
	P = {conjunto de producciones o de reglas de derivación}<br>
	<br>
	<br>
	Lenguaje Regular
	<br>
	Conjunto de todas las cadenas generadas por un autómata.
	<br>
	<br>
	<center><a class="link" href="javascript:abrir()">Línea de producción </a></center>
	<!-- Otra forma de hacerlo
	<p style="cursor:s-resize" onClick="Alternar(seccion1)">
   HACER CLICK AQUÍ PARA OCULTAR O MOSTRAR
	</p>
	<div id="seccion1" style="display:none">
   	<textarea rows="10" cols="100" readonly>
		<?php
		exec("dlv cuaderno.plan -FP -N=45", $output);
		foreach ($output as $x ) {
			print_r($x . "\n");
			}
		?>
	</textarea>	</div> 
	
	<script>
	function Alternar(Seccion){ 
    if (Seccion.style.display=="none"){
    	Seccion.style.display=""}
    else{Seccion.style.display="none"} 
	}
	</script>
 -->
	<textarea rows="10" cols="110" readonly ID="vent" style="display:none">
		<?php
		exec("dlv cuaderno.plan -FP -N=45", $output);
		foreach ($output as $x ) {
			print_r($x . "\n");
			}
		?>
	</textarea>
	<h3 id="v" style="display: none">Diagrama de la línea de producción</h3>
	<img src="imagenes/cuaderno.jpg" id="ve" style="display: none" class="imagen" />
	<button class="boton" onclick="javascript:cerrar()" ID="ven" style="display: none"> Cerrar </button>
	<script>
	function abrir(){
		document.getElementById("vent").style.display="block";
		document.getElementById("ven").style.display="block";
		document.getElementById("ve").style.display="block";
		document.getElementById("v").style.display="block";

	}		
	function cerrar(){
		document.getElementById("vent").style.display="none";
		document.getElementById("ven").style.display="none";
		document.getElementById("ve").style.display="none";
		document.getElementById("v").style.display="none";

	}
	</script>

	<h3>Diagramas de transición</h3>
	<div class="container">  
  <ul class="slider">
    <li id="slide1">
      <img src="imagenes/1.jpg"/>
    </li>
    <li id="slide2">
      <img src="imagenes/2.jpg"/>
    </li>
    <li id="slide3">
      <img src="imagenes/3.jpg"/>
    </li>
    <li id="slide4">
      <img src="imagenes/4.jpg"/>
    </li>
    <li id="slide5">
      <img src="imagenes/5.jpg"/>
    </li>
    <li id="slide6">
      <img src="imagenes/6.jpg"/>
    </li>
    <li id="slide7">
      <img src="imagenes/7.jpg"/>
    </li>
    

  </ul>
  
  <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
    <li>
      <a href="#slide3">3</a>
    </li>
     <li>
      <a href="#slide4">4</a>
    </li>
    <li>
      <a href="#slide5">5</a>
    </li>
    <li>
      <a href="#slide6">6</a>
    </li>
    <li>
      <a href="#slide7">7</a>
    </li>
    
  </ul>
  
	</div>
	<button type="button" onclick="location.href='index.php'" class="boton">Llévame al index</button>
	<button type="button" onclick="location.href='compiladores.php'" class="boton">Llévame a los compiladores</button>
	<button type="button" onclick="location.href='interpretes.php'" class="boton">Llévame a los intérpretes </button>
	</form>
</body>
</html>