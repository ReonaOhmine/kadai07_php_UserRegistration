<?php

session_start(); 

$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$job = $_POST['job'];
$experience = $_POST['experience'];

$str = $name.$email.$birthday.$job.$experience;

$file  = fopen("data.csv", "a");
fwrite($file, $str . "\n");
fclose($file);

$_SESSION["name"] = $name; 


// スプレッドシートに書き込む
if (isset($_POST['name'])) {

    define('POST_URL', 'https://script.google.com/macros/s/AKfycbxtpkj2vWfaRnpw1x_vMFxCcqPWyrt9ESeIdZnzOWGdLktplAuMs-JIHao_cfoQpSSR/exec');

    $post_data = [
        'name' => $_POST['name'],
        'email ' => $_POST['email'],
        'birthday' => $_POST['birthday'],
        'job' => $_POST['job'],
        'experience' => $_POST['experience'],
    ];

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => POST_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($post_data),
    ]);
    $response = curl_exec($ch);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    curl_close($ch);
}



header("Location: finish.php");
exit;



?>

