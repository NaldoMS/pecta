<?php

$mensagem ="<body>
                <div style='display: block; position:absolute; background-color: #f8f8f8; width: 500px;  height: 300px; border: 5px solid #1b6d85; border-bottom: 25px solid #1b6d85; border-top: 25px solid #1b6d85;background-color: #fff; padding: 20px;'>
                    
                    <div style='display: block; position: relative; float: left; width: 500px; height: 65px; left: 8px; top: 35px;'>
                        <img src='cid:maisconectt' style='width: 224px; height: 45px;'/>
                    </div>
                    <br/>
                    <hr style='margin-top: 20px;'>
                    <div style='display: block; position: absolute; font-size: 14pt; top: 50px; text-align: left;'>
                        <br/>Uma solicitação para verificar planos e orçamento foi realizada!<br/>
                        Segue abaixo as informações do cliente.".
                    "<br/><br/></div>

                    <div style='display: block; position: relative; width: 480px; font-size: 14pt;  top: 140px; padding: 3px; min-height: 300px; height: auto; overflow-y: auto;'>
                        <p><b>Nome: </b>".$_POST['nome']."</p>"
                    ."<p><b>Email: </b>".$_POST['email']."</p>"
                    ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
                    ."<p><b>Rua: </b>".$_POST['rua']."</p>"
                    ."<p><b>Bairro: </b>".$_POST['bairro']."&nbsp;&nbsp;&nbsp;&nbsp;<b>Número: </b>".$_POST['numero']."</p>"
                    ."<p><b>Complemento: </b>".$_POST['complemento']."</p>"
                    ."<p><b>Data: </b>".date('d/m/Y H:i')."</p>
                    </div></br>
                    <hr>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='http://www.maisconectt.com.br/'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>";

/*$mensagem ="<body style='background-color: #d4d4d4;'>
                <div style='display: block; position:absolute; max-width: 40%; width: auto;  min-height: 502px; border: 2px solid #2c3f70; border-bottom: 25px solid #2c3f70; background-color: #fff; padding: 1.5%;'>
                    <div style='display: block; position: relative; float: left; max-width: 60%; width: auto; height: 60px; left: 0.5%; top: 1%;'>
                        <img src='cid:connect' style='width: 180px; height: 60px;'/>
                    </div>

                    <div style='display: block; position: absolute; font-size: 14pt; top: 120px; text-align: left;'>
                        <br/>Uma solicitação para verificar planos e orçamento foi realizada!<br/>
                        Segue abaixo as informações do cliente.".
                    "<br/></div>

                    <div style='display: block; position: relative; width: 97%; font-size: 14pt; border: 2px solid #003193; top: 140px; padding: 3px; min-height: 300px; max-height: 350px; height: auto; overflow-y: auto;'>
                     <p><b>Nome: </b>".$_POST['nome']."</p>" 
                    ."<p><b>Email: </b>".$_POST['email']."</p>"
                    ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
                    ."<p><b>Rua: </b>".$_POST['rua']."</p>"
                    ."<p><b>Bairro: </b>".$_POST['bairro']."&nbsp;&nbsp;&nbsp;&nbsp;<b>Número: </b>".$_POST['numero']."</p>"
                    ."<p><b>Complemento: </b>".$_POST['complemento']."</p>"
                    ."<p><b>Data: </b>".date('d/m/Y H:i')."</p>
                    </div></br>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='10.100.10.88:8080/linkce' target='_blank'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>"; */

$result2 = sendMail('Solicitação de orçamento',$mensagem,'regisousa7@gmail.com','Mais Conectt', NULL, NULL, NULL,'../Images/logoEmail.png');

