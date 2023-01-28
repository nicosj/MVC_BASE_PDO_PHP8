<?php

function base_url()
{
    return BASE_URL;
}

function media()
{
    return BASE_URL."/Assets";
}
function d($data)
{
    $format=print_r( "<pre>");
    $format.=print_r($data);
    $format.=print_r("</pre>");;
    return $data;
}

function strClean($strCadena){
    $strCadena = preg_replace("/\s+/", " ", $strCadena);
    $strCadena = trim($strCadena);
    $strCadena = stripslashes($strCadena);
    $strCadena = str_ireplace("<script>", "", $strCadena);
    $strCadena = str_ireplace("</script>", "", $strCadena);
    $strCadena = str_ireplace("<script src>", "", $strCadena);
    $strCadena = str_ireplace("<script type=>", "", $strCadena);
    $strCadena = str_ireplace("SELECT * FROM", "", $strCadena);
    $strCadena = str_ireplace("DELETE FROM", "", $strCadena);
    $strCadena = str_ireplace("INSERT INTO", "", $strCadena);
    $strCadena = str_ireplace("SELECT COUNT(*) FROM", "", $strCadena);
    $strCadena = str_ireplace("DROP TABLE", "", $strCadena);
    $strCadena = str_ireplace("OR '1'='1'", "", $strCadena);
    $strCadena = str_ireplace('OR "1"="1"', "", $strCadena);
    $strCadena = str_ireplace('OR ´1´=´1´', "", $strCadena);
    $strCadena = str_ireplace("is NULL; --", "", $strCadena);
    $strCadena = str_ireplace("LIKE '", "", $strCadena);


}