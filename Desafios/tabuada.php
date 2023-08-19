<?php

$num = 15;
echo "Multiplicação: " . PHP_EOL;
for($i = 1; $i <=9; $i++){
  $multi = $num * $i;
  echo "$num X $i = $multi" . PHP_EOL; 
}

echo "Soma: " . PHP_EOL;
for($i = 1; $i <=9; $i++){
  $soma = $num + $i;
  echo "$num + $i = $soma" . PHP_EOL; 
}

echo "Divisão: " . PHP_EOL;
for($i = 1; $i <=9; $i++){
    $multi = $num * $i; 
    $div = $multi/ $i;
  echo "$multi / $i = $div" . PHP_EOL; 
}

echo "Subtração: " . PHP_EOL;
for($i = 1; $i <=9; $i++){ 
    $sub = $num - $i;
  echo "$num - $i = $sub" . PHP_EOL; 
}