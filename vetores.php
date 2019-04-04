<?php

    //$lista=array('Ana','Bianca','Carol');
    //$lista=[];

    //print $lista [2];

    print "Vilões e o Lobo\n";
    $lista=array('Lobo','Coringa','Hera Venenosa','Charada','Pinguim','Duas Caras','Espantalho','Bane',"Ra's Al Ghul",'Crocodilo','Senhor Frio');

    sort($lista);

    //unset($lista[]) //remover um elemento em específico


    //print_r ($lista);

    for($i = 0; $i < count($lista); $i++){
        print $i + 1 ."° lugar: ".$lista[$i]."\n";
        sleep(1);
    }





