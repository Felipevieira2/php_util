session_start();
// Constante com a quantidade de tentativas aceitas
define('TENTATIVAS_ATCS', 5); 
define('MINUTOS_BlQ', 30); 
// Require da classe de conexão
require 'conexao.php';


$username = $_GET["username"];
$password = $_GET["password"];

$stmt = $conn->prepare("select * from users where username = ? and password = ?");
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();
while ($rows = $result->fetch_assoc()){
	echo $rows['username'];
}


//conexao.php

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ado2";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
