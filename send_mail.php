<?php
$m = "defensedelesprit@gmail.com";
$sub = "Contato site pessoal";

$valida = isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['human']);
if($valida){
    $mensagem = "Nome: ".$_POST['name']."<br>"."Email: ".$_POST['email']."<br>".$_POST['message']."<br>";
    if($_POST['human'] == 5){
        file_put_contents('isthisreallife.html', $mensagem.PHP_EOL , FILE_APPEND);
    }else{
        http_response_code(404);
    }
}else{
    http_response_code(404);
}