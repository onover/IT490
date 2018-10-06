<?php

$user = $_POST['username'];
$pass = $_POST['password'];
$type = $_POST['type'];
include('/home/test/git/rabbitmqphp_example/testRabbitMQClient.php');
if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
#$request = getData($_GET['type'], $_GET['username'], $_GET['password']);
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";
switch ($type)
{
	case "login":
		$response = "login, yeah we can do that";
	break;
	
}
echo json_encode($response);
exit(0);

?>
