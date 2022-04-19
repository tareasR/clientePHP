<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>

<body>
    <form action="" method="get" name="formulario">
        <label for="xxx">nombre:</label>
        <input type="text" id="xxx" name="saludador">
        <button type="submit">Saludar!!</button>
    </form>

    <?php
	if (isset($_GET['saludador']) && !empty($_GET['saludador']) ) {
	    // instancia de la clase SoapClient
		$client = new SoapClient("http://192.168.1.80:8080/ws/saludos.wsdl");	
		// definición y paso de parámetros
		$parametros = array("nombre" => $_GET['saludador'] );
		$response = $client->__soapCall('saludar', array($parametros));
		print "<h1>" . $response->{'respuesta'} . "</h1>";
    	}
    ?>
</body>
</html>






