<?php



/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/PHPMailerAutoload.php');

/* Inclui página de enviar email */
require("EnviarEmail.php");

$mensagem ="<body>
                <div style='display: block; position:absolute; background-color: #f8f8f8; width: 500px;  min-height: 600px; height: auto; border: 5px solid #1b6d85; border-bottom: 25px solid #1b6d85; border-top: 25px solid #1b6d85;background-color: #fff; padding: 20px;'>
                    
                    <div style='display: block; position: relative; float: left; width: 500px; height: 65px; left: 8px; top: 15px;'>
                        <img src='cid:maisconectt' style='width: 224px; height: 45px;'/>
                    </div>
                    <br/>
                    <hr style='margin-top: 20px;'>
                    <div style='display: block; position: absolute; font-size: 14pt; top: 50px; text-align: left;'>
                        <br/><br/><b>Nome:</b>  ".$_POST['nome']."<br/>
                        <b>Email:</b>  ".$_POST['email'].
                    "<br/><br/></div>

                    <div style='display: block; position: relative; width: 480px; font-size: 14pt;  top: 140px; padding: 3px; height: 300px; overflow-y: auto;'>
                        ".$_POST['mensagem']."
                    </div></br>
                    <hr>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='http://www.maisconectt.com.br'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>"; 

$result = sendMail('Fale Conosco - Site MaisConectt', $mensagem, 'contato@maisconectt.com', 'Mais Conectt', NULL, NULL, NULL, '../Images/logoEmail.png');


if($result == 1) {
    echo 1;
} else {
    echo 0;
}
?>