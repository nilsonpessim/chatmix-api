<?php

use Nilsonpessim\ChatmixWhatsApp\Chatmix;

require_once __DIR__ . "/../vendor/autoload.php";

$chatmix = new Chatmix();
$chatmix->auth(CONF_CHATMIX_KEY, CONF_CHATMIX_TOKEN);
$chatmix->config(CONF_CHATMIX_AGENDAMENTO, CONF_CHATMIX_GERARPDF, CONF_CHATMIX_INCLUIRACENTOS, CONF_CHATMIX_LIMITECARACTERES);
$chatmix->sendNumber(CONF_CHATMIX_SENDMENSAGEM);
$chatmix->textMessage("YOUR-MESSAGE");
$chatmix->sendMessage();