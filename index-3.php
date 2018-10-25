<?php
//tipos de dados
//Básicos
$nome = "Tiago"; //string
$site = 'www.abcdainformatica.com.br';

$ano = 1990; // números
 
$salario = 5000.99; //ponto flutuante

$bloqueado = false;	//booleando T or F
	
///////////////////////////////////////////////
//Compostos	
$frutas = array("abacaxi", "Laranja", "Manga");	//array
echo $frutas[2];

$nascimento = new DateTime(); //object
//var_dump($nascimento);

///////////////////////////////////////////////
//Especiais
$arquivo = fopen("index-3.php", "r"); //Resource
//var_dump($arquivo);

$nulo = NULL; //Null

?>