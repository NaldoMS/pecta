<?php

/**
 * Inclui classes de envio de email
 */
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');

/**
 * Inclui função de enviar email
 */
require("EnviarEmail.php");

/**
 * Inclui páginas que serão enviadas com os devidos parâmetros
 */

$mensagem = "<body>
                <div style='display: block; position:absolute; background-color: #f8f8f8; width: 500px;  height: 400px; border: 5px solid #1b6d85; border-bottom: 25px solid #1b6d85; border-top: 25px solid #1b6d85;background-color: #fff; padding: 20px;'>
                    <div style='display: block; position: relative; float: left; width: 500px; height: 65px; left: 8px; top: 35px;'>
                        <img src='cid:maisconectt' style='width: 224px; height: 45px;'/>
                    </div>
                    <br/>
                    <hr style='margin-top: 25px;'>
                    <div style='display: block; position: absolute; font-size: 14pt; top: 20px; text-align: left;'>"
    ."<p>Olá <b style='color: #3c3c3c;'>".$_POST['nome']."</b>!</p>"
    ."<p>Segue em anexo um arquivo com os planos e preços oferecidos pela Mais Conectt.</p>"
    ."<p>Para obter mais informações entre em contato conosco: </br>(85) 9 8799-0759 • (85) 3025-2981 | maisconectt@gmail.com</br></p>"
    ."<p>Att.</br>Mais Conectt.</p>"
    ."</div>"

    ."<div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <p><a href='http://iteva.org.br/maisConectt'>clique aqui para ser redirecionado ao site</a></p>  
                    </div>
                    
                </div>
            </body>";

$anexo = '../planosMaisConectt.pdf';

$result = sendMail('Planos - Mais Conectt', $mensagem, $_POST['email'], $_POST['nome'], NULL, NULL, $anexo, '../Images/logoEmail.png');
if ($result == 1) {
    $mensagem2 ="<body>
                <div style='display: block; position:absolute; background-color: #f8f8f8; width: 500px;  height: 620px; border: 5px solid #1b6d85; border-bottom: 25px solid #1b6d85; border-top: 25px solid #1b6d85;background-color: #fff; padding: 20px;'>
                    
                   <div style='display: block; position: relative; float: left; width: 500px; height: 65px; left: 8px; top: 35px;'>
                        <img src='cid:maisconectt' style='width: 224px; height: 45px;'/>
                    </div>
                    
                    <div style='display: block; position: absolute; font-size: 14pt; top: 60px; text-align: left;'>
                        <br/>Uma solicitação para verificar planos e orçamento foi realizada!<br/>
                        Segue abaixo as informações do cliente.".
                    "</div>
                    <div style='display: block; position: relative; width: 480px; font-size: 14pt;  top: 100px; padding: 3px; min-height: 300px; height: auto; overflow-y: auto;'>
                        <p><b>Nome: </b>".$_POST['nome']."</p>"
                        ."<p><b>Email: </b>".$_POST['email']."</p>"
                        ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
                        ."<p><b>Rua: </b>".$_POST['endereco']."</p>"
                        ."<p><b>Número: </b>".$_POST['numero']."</p>"
                        ."<p><b>Data: </b>".date('d/m/Y')."</p>
                                    </div></br>
                    <hr>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='http://www.maisconectt.com.br'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>";

    $result2 = sendMail('Solicitação de orçamento',$mensagem2,'contato@maisconectt.com','Mais Conectt', NULL, NULL, NULL, '../Images/logoEmail.png');
    if($result2 == 1) {
        echo '1';
    } else {
        echo '0';
    }
} else {
    echo '0';
}



