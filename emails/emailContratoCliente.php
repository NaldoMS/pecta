<?php

$mensagem = "<body>
                <div style='display: block; position:absolute; background-color: #f8f8f8; width: 500px;  height: 300px; border: 5px solid #1b6d85; border-bottom: 25px solid #1b6d85; border-top: 25px solid #1b6d85;background-color: #fff; padding: 20px;'>
                    <div style='display: block; position: relative; float: left; width: 500px; height: 65px; left: 8px; top: 35px;'>
                        <img src='cid:maisconectt' style='width: 224px; height: 45px;'/>
                    </div>
                    <br/>
                    <hr style='margin-top: 20px;'>
                    <div style='display: block; position: absolute; font-size: 14pt; margin-top: 120px; top: 120px; text-align: left;'>"
    ."<p>Olá <b style='color: #3c3c3c;'>".$_POST['nome']."</b>!</p>"
    ."<p>Segue em anexo um arquivo com os planos e preços oferecidos pela Mais Conectt.</p>"
    ."<p>Para obter mais informações entre em contato conosco: </br>(85) 9 8799-0759 | (85) 3025-2981 | contato@maisconectt.com</br></p>"
    ."<p>Att. </br>Mais Conectt</p>"
    ."</div>"

    ."<div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <p><a href='http://www.maisconectt.com.br'>clique aqui para ser redirecionado ao site</a></p>  
                    </div>
                    
                </div>
            </body>";


$result = sendMail('Planos - Mais Conectt', $mensagem, $_POST['email'], $_POST['nome'], NULL, NULL, $anexo, '../Images/logoEmail.png');
