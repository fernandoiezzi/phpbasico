<?php

//$i = $i + 1
//$i += 1
//$i++
//!= diferente de
//continue = continua a instrução E NÃO PRECISA DO ELSE
//break =  encerra a instrução imediatamente

 for ($i =1; $i <= 15; $i++){
    if ($i == 13) {
      echo "Aluno foi expulso!" . PHP_EOL;
    } else {
        echo "#$i" . PHP_EOL;
    }
 }