<?php

function MascaraCNPJ ($CNPJ){
    $CNPJ = preg_replace('/[^0-9]/', '', $CNPJ);
    return $CNPJ;}

function ValidarCNPJ ($CNPJ){
    $certo = "certo";
    $erro = "O CNPJ informado esta errado!";
    if ($CNPJ = empty($CNPJ)){
        return $erro;}

    if (strlen(MascaraCNPJ($CNPJ)) == 11) {
        return $certo;
    } else { 
        return $erro;}
}
$CNPJ = "12356789110";
echo ValidarCNPJ($CNPJ);
