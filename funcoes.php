<?php

    //print()
    //sort()
    //array()
    //var_dump()

    //function digaOla(){
        //instruçoes
       // print "olá";
   // }

    // digaOla();   //FUNÇÃO VEM AQUI!!!!!

    function cartao(){
        print "\n =================================================================\n";
        print "\n | Nome: Alcindo                                                  |\n";
        print "\n | Cidade: Acaguaquetetuba                                        |\n"; 
        print "\n | Data de Nascimento: Dia 31 de Fevereiro de algum ano longíncuo |\n";
        print "\n | Sexo: Assexual Extraterrestre                                  |\n";
        print "\n =================================================================\n";
    }

    #cartao();

    function exibirDataHoraAtual(){
        print "Agora são exatamente : ". date("H:i:s d/m/Y");
    }

    #exibirDataHoraAtual();

    function digaOla($nome){
        print "Vá a merda $nome \n";
    }

    #digaOla("Joana");
    #digaOla("Carlos");
    #digaOla("Edinaldo");
    #digaOla();

    function cartao1(string $nome, $cidade )//parametro
    {
        print "\n =================================================================\n";
        print "\n | Nome: $nome                                                                  |\n";
        print "\n | Cidade: $cidade                                      |\n"; 
        print "\n | Data de Nascimento: Dia 31 de Fevereiro de algum ano longíncuo |\n";
        print "\n | Sexo: Assexual Extraterrestre                                  |\n";
        print "\n =================================================================\n";
    }

    $nome = fgets(STDIN);

    cartao1("$nome", "Pau Grande do Sul");//argumento


