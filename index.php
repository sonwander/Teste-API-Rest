
<html>
<head>
<title>teste api</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="width:700px; margin:0 auto;">

<h3>Teste API - TRANSAÇÕES</h3>   
<form action="" method="POST">
<label>ID do pedido:</label><br />
<input type="text" name="order_id" placeholder="Insira ID do pedido" required/>
<br /><br />
<button type="submit" name="submit">Enviar</button>
</form>    

<?php
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
	$order_id = $_POST['order_id'];
	$url = "http://localhost/rest/api/".$order_id;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	echo "<table>";
	echo "<tr><td>ID DO PEDIDO:</td><td> $result->order_id</td></tr>";
	echo "<tr><td>QUANTIDADE:</td><td> $result->amount</td></tr>";
	echo "<tr><td>CÓD. RESPOSTA:</td><td> $result->response_code</td></tr>";
	echo "<tr><td>DESC. RESPOSTA:</td><td> $result->response_desc</td></tr>";
	echo "</table>";
}
    ?>

<br />
<strong>Insira um numero para demonstração:</strong><br />
15478952<br />
15478955<br />
15478958<br />
15478959
<br /><br />

</div>
</body>
</html>