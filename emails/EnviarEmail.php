<?php

function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){

    $mail = new PHPMailer(); //INICIA A CLASSE
    $mail->IsSMTP(); //Habilita envio SMPT
    $mail->SMTPAuth = true; //Ativa email autenticado
    $mail->IsHTML(true);
    $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
    /* Protocolo da conexão */
    //$mail->SMTPSecure = "ssl\tls";
    $mail->Host = 'nuvem34br.hoteldaweb.com.br'; //Servidor de envio
    $mail->Port = 26 ; //Porta de envio
    $mail->Username = 'contato@maisconectt.com.br'; //email para smtp autenticado
    $mail->Password = 'Maisconectt100'; //
    $mail->From = 'contato@maisconectt.com.br'; //remetente
    $mail->FromName = 'Mais Conectt'; //nome remetente


    /* Enviar imagem */
    $mail->AddEmbeddedImage($logo, 'maisconectt');

    if($reply != NULL){
        $mail->AddReplyTo($reply,$replyNome);
    }

    if($anexo != NULL){
        $mail->AddAttachment($anexo);
    }

    $mail->Subject = $assunto; //assunto
    $mail->Body = $mensagem; //mensagem
    $mail->AddAddress($destino,$nomeDestino); //email e nome do destino


    if($mail->Send()) {
        return 1;
    } else {
        $mail->ErrorInfo;
    }
}
?> 