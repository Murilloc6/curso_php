<?php


function addMask($TelCell, $TelMask) {

    $m = 0;
    $TelMask = "";
    
    for ($i=0; $i <= strlen($TelMask); $i++) {

        if ($TelMask[$i] == '#') {
            $TelMask .=  $TelCell[$m];
            $m++;
        } else {
            $TelMask .= $TelMask[$i];
        }
    }
    return $TelMask;
}
$TelMask = "(##) # ####-####";
$TelCell = "54991278993";
// echo addMask($TelCell, $TelMask);

function validarDDD($TelCell){
    $DDDsValidos = ['09', '11', '12', '13', '14', '15', '16', '17', '18', '19', '21', '22', '24', '27', '28', '31', '32', '33', '34', '35', '37', '38', '41', '42', '43', '44', '45', '46', '47', '48', '49', '51', '53', '54', '55', '61', '62', '63', '64', '65', '66', '67', '68', '69', '71', '73', '74', '75', '77', '79', '81', '82', '83', '84', '85', '86', '87', '88', '89', '91', '92', '93', '94', '95', '96', '97', '98', '99'];
    $dddCerto = "Correto";
    $dddErrado = "O DDD informado esta errado!";
    $padrao = "/[^0-9]/is";
    $celular = preg_replace($padrao, "", $TelCell);

    $tamanho = strlen($celular);

    if ($tamanho != 13) {
        return false;
    }

    $pais = substr($celular, 0, 2); // 55 - 5554999912933
    $ddd = substr($celular, 2, 2); // 54 - 5554999912933

    if ($pais != 55) {
        return false;
    }

    $dddValido = in_array($ddd, $DDDsValidos); // TRUE || FALSE

    return $dddValido ? $dddCerto : $dddErrado;

}

$TelMask = "(##) # ####-####";
$TelCell = "5500991278993";
echo addMask($TelCell, $TelMask);
echo validarDDD($TelCell);

// (1 = 1) ? true : false;
