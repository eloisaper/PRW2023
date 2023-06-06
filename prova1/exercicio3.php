<?php
//CRIPTOGRAFIA DO CEBOLINHA
$linha1 = intval(fgets(STDIN));

for($i=0; $i<=$linha1; $i++){
    $linha[$i] = fgets(STDIN);
    $num_pal = str_word_count($linha[$i]);
    $stringCorrigida = str_replace('P', 'B', $linha[$i]);
    $stringCorrigida = str_replace('R', 'L', $linha[$i]);
    $stringCorrigida = str_replace('F', 'V', $linha[$i]);
    $stringCorrigida = str_replace('T', 'D', $linha[$i]);
    $stringCorrigida = str_replace('J', 'Z', $linha[$i]);
    $stringCorrigida = str_replace('X', 'S', $linha[$i]);

    $stringFinal = array_reverse(array[$num_pal] $stringCorrigida);
    echo "$stringFinal";
}

?>