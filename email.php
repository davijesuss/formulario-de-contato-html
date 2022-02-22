<?php


if(isset(($_POST(['email']) && !empty (($_POST(['email']))


$nome = addcslashes($_POST(['nome']));
$email = addcslashes($_POST(['email']));
$mensagen = addcslashes($_POST(['mensagem']));

$to = "davi7195@gmail.com";
$subject = " formulario"
$body = "Nome: ".$nome. "\r\n"
"Email: ".$email."\r\n"
"mensagem: ".$mensagen;
$header = "from davink@gmail.com"."\r\n"
."peply-to:".$email. "\r\n"
."x=mailer: PHP/".phpversion();

if(mail.($to,$dubject,$body,$header)

echo("Email enviado com sucesso!");

}else{
    Echo(" o email não foi enviado");
}

}

?>