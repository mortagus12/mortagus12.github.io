<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Compilador</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
<link rel="stylesheet" href="estilos.css">
<body>
	<form class="formulario3">
	<h1>Compiladores</h1>
	¿Qué es un compilador?
	<br>
	Un compilador  es un programa que traduce un programa escrito en lenguaje fuente y produce otro equivalente escrito en un lenguaje destino.
	<br>
	Las fases de un compilador son:
	<ol type="I">
		<li>Preprocesamiento</li>
		<li>Análisis Léxico</li>
		<li>Análisis Sintático</li>
		<li>Análisis Semántico</li>
		<li>Generación de código intermedio</li>
		<li>Optimización de código</li>
		<li>Generación de código</li>
		<li>Depuración</li>
	</ol>
	Los principales IDES que utilizan un compilador son:
	<ol type="I">
		<li>Dev-C++</li>
		<li>Eclipse</li>
		<li>Zinjal</li>
	</ol>
	Planteamiento del problema:
	<br>
	Una Tienda de ropa quiere contratar personal nuevo, y solicita un programa que registre las solicitudes recibidas y decida quiénes pueden obtener una cita para entrevista, se listan los siguientes requisitos:
	<ol type="a">
		<li>Proporciona las vacantes que se ofertan</li>
		<li>Proporciona los Días de entrevista para cada vacante</li>
		<li>Almacena los datos del solicitante</li>
		<li>Evalúa de acuerdo con la disponibilidad de la vacante si puede o no obtener una entrevista y muestra los datos y el día agendado.</li>
	</ol>
	<label>Código fuente: </label>
	<textarea rows="10" cols="100" readonly>
		#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int edad,a, grado, experiencia, dias, numTel;
char nombre[20], apellidos[20], sexo[1], *gradEsc, *diEn;
void requGlov(void);
void dirMark(void);
void RH(void);
void ventas(void);
void disGraf(void);
void estilista(void);
void prod(void);
void caj(void);
void limp(void);
void datos(void);
int main(int argc, char *argv[]) {
	int b;
	do{
requGlov();
menu();
puts("Deseas hacer otra consulta de entrevista? 1.Si 2.No");
scanf("%d", &b);
}while(b==1);
return 0;
}

int menu(void){
	int b;	
if ( edad < 17 ){
	printf("Eres menor de edad y no aplicas para trabajar \n");
}
else{
printf("Esta es una lista de los trabajos disponibles: \n");
printf("1.- Director de marketing\n");
printf("Dias de entrevista: Lunes a jueves\n");
printf("Horario de entrevista de 11:00 a 18:00 \n");
printf("2.- Gerente de recursos humanos\n");
printf("Dias de entrevista: Martes\n");
printf("Horario de entrevista de 14:00 a 20:00 \n");
printf("3.- Jefe de ventas\n");
printf("Dias de entrevista: Lunes a sabado\n");
printf("Horario de entrevista de 8:00 a 16:00 \n");
printf("4.- Disenador grafico\n");
printf("Dias de entrevista: lunes, miercoles y viernes\n");
printf("Horario de entrevista de 12:00 a 16:00 \n");
printf("5.- Estilista\n");
printf("Dias de entrevista: martes y jueves \n");
printf("Horario de entrevista de 10:00 a 16:00 \n");
printf("6.- Desarrollador de producto\n");
printf("Dias de entrevista: miercoles \n");
printf("Horario de entrevista de 8:00 a 14:00 \n");
printf("7.- Cajero\n");
printf("Dias de entrevista: jueves y viernes \n");
printf("Horario de entrevista de 9:00 a 12:00 \n");
printf("8.- Limpieza\n");
printf("Dias de entrevista: lunes, martes y jueves\n");
printf("Horario de entrevista de 16:00 a 20:00 \n");
	do{
printf("Seleccione para que trabajo desea aplicar, usando el numero correspondiente del trabajo.\n");
printf("*Favor de usar solo numeros, nada de letras*\n");
scanf("%d", &a);
	printf("Desea seleccionar una opcion diferente? SI = 1 NO = 2\n");
	scanf("%d",&b);
		} while (b==1);
	switch(a){
		case 1: puts("Ha seleccionado director de marketing");
		dirMark();
		break;
		case 2: puts("Ha seleccionado gerente de recursos humanos");
		RH();
		break;
		case 3: puts("Ha seleccionado jefe de ventas");
		ventas();
		break;
		case 4: puts("Ha seleccionado disenador grafico");
		disGraf();
		break;
		case 5: puts("Ha seleccionado estilista");
		estilista();
		break;
		case 6: puts("Ha seleccionado desarrollador de producto");
		prod();
		break;
		case 7: puts("Ha seleccionado cajero");
		caj();
		break;
		case 8: puts("Ha seleccionado limpieza");
		limp();
		break;
		default: puts("Error, no ha escogido un numero correcto o ha usado letras");
	}

system("pause");
	}
	return 0;
}

int edadT(void){
	printf("Bienvenidos a la tienda de ropa Seena \n");
	printf("Favor de introducir tu edad \n");
	scanf("%d", &edad);
	return 0;
}

void requGlov(){
	int b;
	edadT();
	puts("Ingresa tu nombre: ");
	scanf("%s", nombre);
	puts("Ingresa apellidos: ");
	scanf("%s", apellidos);
	puts("Selecciona tu sexo: H = Hombre M = Mujer");
	scanf("%s", sexo);
	puts("Ingresa tu numero telefonico");
	scanf("%d", &numTel);
	do{
		b=0;
	puts("Ingresar nivel academico acabado y en caso de estar estudiando, seleccionar el grado en curso:");
	puts("1.- Secundaria \n 2.- Bachillerato \n 3.- Universidad");
	scanf("%d", &grado);
	switch (grado){
		case 1: gradEsc="Secundaria";
		break;
		case 2: gradEsc="Bachillerato";
		break;
		case 3: gradEsc="Universidad";
		break;
		default: puts("No seleccionó un grado correto");
		b=1;
	}
		}while(b==1);
	puts("Experiencia laboral en meses: ");
	scanf("%d", &experiencia);
}
void dirMark(){
	int b;
	if(experiencia<12 || grado<3 || edad<30){
	puts("No cumples con los requisitos para la entrevista");

	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("1. Lunes 2. Martes 3.Miercoles 4.Jueves");
	scanf("%d", &dias);
	if(dias<=4){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
	}
}
void RH(){
	int b;
	int habla;
	if(grado>3 || experiencia>6 || edad>24){
		puts("Tienes facilidad de habla y experiencia tratando personas? 1.-Si  2.-No");
		scanf("%d", &habla);
		if(habla==1){
			do{
	puts("Selecciona el dia para la entrevista: ");
	puts("2. Martes");
	scanf("%d", &dias);
	if(dias==2){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
		}
		else{
			puts("No cumple con los requisitos para la entrevista");
		}
	}
	else{
		puts("No cumple con los requisitos para la entrevista");
	}
}
void ventas(){
	int b;
	if(grado<2){
		puts("No cumples con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("1. Lunes 2. Martes 3.Miercoles 4.Jueves 5.Viernes 6.Sabado");
	scanf("%d", &dias);
	if(dias<=6){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
	}
}
void disGraf(){
	int b;
	if(grado<3 || experiencia>4 ){
		puts("No cumples con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("1. Lunes 3.Miercoles 5.Viernes");
	scanf("%d", &dias);
	if(dias==1 || dias == 3 || dias == 5){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
	}
}
void estilista(){
	int b;
	if(strcmp(sexo, "H") == 0 || grado < 2 || edad>29){
		puts("No cumples con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("2. Martes 4.Jueves");
	scanf("%d", &dias);
	if(dias==4 || dias==2){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
	}
	
}
void prod(){
	int b;
	if(grado < 3 || experiencia<12 || edad<25){
		puts("No cumple con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("3.Miercoles");
	scanf("%d", &dias);
	if(dias==3){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);		
	}
}
void caj(){
	int b;
	if(experiencia<4 || edad<20){
		puts("No cumple con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("4.Jueves 5.Viernes");
	scanf("%d", &dias);
	if(dias==4 || dias==5){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);
	}
}
void limp(){
	int b;
	if(strcmp(sexo,"M")==0){
		puts("No cumples con los requisitos para la entrevista");
	}
	else{
		do{
	puts("Selecciona el dia para la entrevista: ");
	puts("1.Lunes 2. Martes 4.Jueves");
	scanf("%d", &dias);
	if(dias==4 || dias==2 || dias==1){
	datos();
	puts("Su solicitud para entrevista ha sido aceptada");
	b=1;
	}
	else{
		puts("Selecciona una fecha correta");
	}
}while(b!=1);	
	}
}
void datos(){
	switch(dias){
		case 1: diEn="Lunes";
		break;
		case 2: diEn="Martes";
		break;
		case 3: diEn="Miercoles";
		break;
		case 4: diEn="Jueves";
		break;
		case 5: diEn="Viernes";
		break;
		case 6: diEn="Sabado";
		break;
		case 7: diEn="Domingo";
		break;
	}
	printf("Su nombre es %s %s \n Sexo: %s \n Edad: %d \n Grado escolar: %s \n Dia de entrevista: %s \n Numero telefonico: %d\n", nombre, apellidos, sexo, edad, gradEsc, diEn, numTel);
}
	</textarea>
	<img src="imagenes/1.png" width="750" height="500" alt="Demo">
	<img src="imagenes/2.png" width="750" height="500" alt="Demo">	
	<button type="button" onclick="location.href='index.php'" class="boton">Llévame al index</button>
	<button type="button" onclick="location.href='interpretes.php'" class="boton">Llévame a los intérpretes</button>
	<button type="button" onclick="location.href='afd.php'" class="boton">Llévame al AFD</button>
	</form>
</body>
</html>