<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'contato@ateliesalgados.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto          = $_POST['assunto'];
$mensagem          = $_POST['mensagem']; 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FOMULÁRIO DE CONTATO ATELIÊ SALGADOS</P>
<p><b>Nome:</b> '.$nomeremetente.'
<p><b>E-Mail:</b> '.$emailremetente.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 

 if($envio){
	echo "<script>alert('Mensagem enviada com sucesso, obrigado!')</script>"; // Página que será redirecionada
 	echo "<script>location.href='produtos.php'</script>";
 }
