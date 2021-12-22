<?php

$url = 'https://studycenter.works/envia_fale.php';

$destinatario = "contato@studycenter.me";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Contato Study Center" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>