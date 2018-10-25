<?php

$nome = "Tiago";
$sobrenome = "Wesguerber";	
$nomecompleto = $nome ." ". $sobrenome; //concatenar (." ". = espaço)
echo $nomecompleto;
exit; // exit = para a execução do código aqui, não executa nada depois de exit.

//apagar variáveis
unset($Nome);	//apagar o conteúdo das variáveis

//isset = verificação para verificar se a variavel existe
if (isset($Nome)){
	echo $Nome;
}
?>
