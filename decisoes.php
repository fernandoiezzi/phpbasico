<?php

$idade = 17;
$nome = 'Miguel';
$numeroDePessoas = 5;

if ($idade == 18 || $idade > 18 ){
echo "Você tem $idade anos, pode entrar e se divertir \n";} else {
    echo "Volta para a casa da vovó\n";
}


if($idade >=18 && $nome=='Miguel'){
    echo "Bem-vindo $nome, você tem $idade anos e pode entrar pois está convidado\n";
} else {
    echo "Não está convidado e não tem permissão para entrar na festa\n";
}

/** executando um segundo modelo de negócio */

echo " Segundo modelo de negócios!!" . PHP_EOL;
echo " Você só pode entrar se tiver 18 anos ou mais. ";
echo " A partir de 16 somente acompanhado!" . PHP_EOL;
 if ($idade >=18){
    echo "Você tem $idade anos. Pode entrar sozinho. \n";
 }else if ($idade >=16 && $numeroDePessoas >1){
        echo "Você tem $idade anos e está acompanhado. Pode entrar\n";
 }else{
    echo " Você só tem $idade anos e não está acompanhado. Não pode entrar.\n";
 }

echo "Tenha uma boa noite! ☻";

/** $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso; - sentença ternário
 * */

//$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
//echo $mensagem; 
