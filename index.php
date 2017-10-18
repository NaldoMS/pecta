<?php

/** Arquivo de configuração do sistema */
include_once('classes/Config.inc.php');

/** @var array parametros passados via URL */
$url = Url::getParametros();

include_once("pages/topo.php");
if (file_exists("pages/{$url[0]}.php")) {
    include_once("pages/{$url[0]}.php");
} else if ($url[0] == "sac"){
    echo'<script>window.location="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC"</script>';
}else {
    include_once("pages/erro404.php");
}
include_once("pages/rodape.php");
