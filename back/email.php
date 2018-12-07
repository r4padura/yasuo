<?php

//identificação para a chamada da classe

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;	


	

// Inclui os arquivos PHPMailer.php e Exception.php e SMTP.php localizados na pasta PHPMailer/src

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/SMTP.php";

 

// resgatando os dados passados pelo form

// $nome = $_POST['nome'];

$email = $_POST['email'];

// $mensagem = $_POST['mensagem'];

// $email_resposta = $_POST['email_resposta'];

// instanciando a classe
    $mail = new PHPMailer();  
	
//  opçao de idioma, setado como br	
    $mail->SetLanguage("br"); 

// habilitando SMTP	
    $mail->IsSMTP(); 

// enviando como HTML
    $mail->IsHTML(true); 
	
// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	
    $mail->SMTPDebug = 1;  
	
// habilitando autenticação	
    $mail->SMTPAuth = true;  
	
// habilitando tranferêcia segura (obrigatório)	
    $mail->SMTPSecure = 'tls'; 


// Configurações para utilização do SMTP do Gmail  

    $mail->Host = 'smtp.gmail.com';

    $mail->Port = 587; // Porta de envio de e-mails do Gmail

    $mail->Username = 'yasuopizzaria@gmail.com';

    $mail->Password = 'mainyasuo!';

    $mail->CharSet = "utf-8";

// Remetente da mensagem

    $mail->SetFrom('yasuopizzaria@gmail.com');
	
// Endereço de destino do email
    $mail->AddAddress($email); 
	
// // Endereço para resposta
	
// 	$mail->addReplyTo($email_resposta);

// Assunto e Corpo do email

    $mail->Subject = "Cadastro realizado com Sucesso";

    $mail->Body =  "<br> Bem-vindo à Yasuo Pizzaria, " . $nome;

// Enviando o email

    if(!$mail->Send())

    {

        $message = "PhpMailer Gmail status: " . $mail->ErrorInfo;

    } else {

        $message = "Bem-vindo à Yasuo Pizzaria " . $email;


 }
 echo $message;

?>