<html>
<head>
</head>
<body>
<?php

if ((isset($_POST["sumar"])) || (isset($_POST["restar"]))) {
    $url="http://localhost/calcular.php";
    $uri="http://localhost/calcular.php";
    $cliente=new SoapClient(null,["location"=>$url,"uri"=>$uri,"trace"=>1]);
    
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    if (isset($_POST["sumar"])) {
        echo "<p>La suma del número $num1 y $num2 es ".$cliente->sumar($num1,$num2)."</p>";
    } else {
        echo "<p>La resta del número $num1 y $num2 es ".$cliente->restar($num1,$num2)."</p>";
    }
    
    //echo $cliente->__getFunctions();
    echo $cliente->__getLastRequest();
    echo "-----------------------";
    echo $cliente->__getLastResponse();
    
    
}
    
?>
    
<form target="cliente.php" method="post">
    <fieldset>
            Número 1:<input type="text" name="num1"/><br/>
            Número 2:<input type="text" name="num2"/><br/>
            <input type="submit" name="sumar" value="SUMAR" />
            <input type="submit" name="restar" value="RESTAR" />
    </fieldset>
</form> 
    
    

</body>
</html>