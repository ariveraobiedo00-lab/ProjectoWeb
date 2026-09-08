<?php
function sumar($num1,$num2) {
    return $num1+$num2;
}

function restar($num1,$num2) {
    return $num1-$num2;
}
function invertirString($cadena) {
    $respuesta="";
    for ($i=strlen($cadena)-1 ; $i>=0 ; $i--) {
        $respuesta.=$cadena[$i];
    }
    return $respuesta;
}

function sumatorio($numero) {
    $total=0;
    for ($valor=1 ; $valor<=$numero ; $valor++) {
        $total+=$valor;
    }
    return $total;
}

function sumatorioRecursivo($numero) {
        if ($numero==0) {
        return 0;
    } else {
        return $numero+sumatorioRecursivo($numero-1);
    }
}

/*
 function mostrarCapicuas($numero) {
    for ($valor=$numero ; $valor>=0 ; $valor--) {
        if ($valor==invertirString(strval($valor))) {
            echo $valor."<br/>";
        }
    }
}
*/

function mostrarCapicuas($numero) {
    $numeros=[];
    for ($valor=$numero ; $valor>=0 ; $valor--) {
        if ($valor==invertirString(strval($valor))) {
            $numeros[]=$valor;
        }
    }
    echo implode(", ",$numeros);
}

$url="http://localhost/calcular.php";
$uri="http://localhost/calcular.php";
$servidor=new SoapServer(null,["location"=>$url,"uri"=>$uri]);
$servidor->addFunction("sumar");
$servidor->addFunction("restar");

$servidor->handle();

?>