<?php

    print "Preço do produto: ";
    $preco = (float) fgets (STDIN);

    print "Digite a porcentagem de desconto: ";
    $desc = (float) fgets (STDIN);

    $nova_desc = $desc/100;

    $valor_real_porcentagem = $preco*$nova_desc;
    $novo_preco = $preco-$valor_real_porcentagem;

    print "O salário atual reajustado é: $novo_preco";
