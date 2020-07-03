
<?php

$temperatura = $_GET["temperatura"];

$client = new SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

$function = 'CelsiusToFahrenheit';

$arguments = array('CelsiusToFahrenheit' => array(
    'Celsius' => $temperatura
));

$options = array('location' => 'https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

$result = $client->__soapCall($function,$arguments,$options);
if($temperatura != NULL){
    $celsius = $result->CelsiusToFahrenheitResult . "°F";
}else{
    $celsius = "Temperatura não informada";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<link rel="stylesheet" href="css/style.css" />
<body>
    <h1 class="resultado"><?="Temperatura Convertida:" . $celsius?></h1>
</body>
</html>