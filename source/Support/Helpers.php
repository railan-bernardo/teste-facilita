<?php

/**
 *  ##################
 *  ###   URL   ###
 *  ##################
 */


/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}



/**
 * ##################
 * ###   ASSETS   ###
 * ##################
 */

/**
 * @param string|null $path
 * @param string $theme
 * @return string
 */
function theme(string $path = null, string $theme = CONF_VIEW_THEME): string
{

    if ($path) {
        return CONF_URL_BASE . "/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE . "/{$theme}";
}


/**
 * @return string
 */
function calcAge(): string
{
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
}


/**
 * @return string
 */
function matriz(): string
{
    $matriz = [1,2,3,4,5];
    $pares = 0;
    $impares = 0;
    for($i = 0; $i < count($matriz); $i++){
        if($matriz[$i]%2 == 0){
            $pares++;
        }
    }
    $impares = count($matriz) - $pares;

    return "Pares {$pares} Impares {$impares}";
}



function order()
{
    $n = [1,13,55,21,5,83];
    $a = [count($n)-2];

    $end = end($n);


    if(is_numeric((int)array_values($n))){
        sort($n);
        if($n[$a[0]] < $end){
            array_pop($n);
        }

        $value = implode(",", $n);
        echo $value;
    }
}