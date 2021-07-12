############# teste prático ###########

Resolvendo problemas utilizando PHP

1 - Descobrindo quantos anos seria necessários para juca ultrapassar chico
 $chico = 1.5;
    $juca = 1.1;

    $year = 0;

    //condição
    while($chico >= $juca){
        //acrescenta 2 cm para chico
        $chico += 0.02;
        //acrescenta 3 cm para juca
        $juca += 0.03;
        // incrementa o ano
        $year++;
    }
    return "São necessário  {$year} anos para que Juca tenha {$juca} e Ultrapasse Chico com {$chico}";