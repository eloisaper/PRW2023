<?php
//TEMPO E COMBUSTIVEL
$vel = fgets(STDIN);
$dist = fgets(STDIN);
$cons = fgets(STDIN);

$combustivel = $dist/$cons;
$tempo = $dist/$vel;
$tempo = number_format($tempo, 2, ".", " ");
$combustivel = number_format($combustivel, 2, ".", " ");
echo "Total horas: $tempo\n";
echo "Total combustivel: $combustivel\n";
?>