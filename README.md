## Send Messages - NOT AN OFFICIAL API
Send messages via WhatsApp with Chatmix

## Requirements
* [Chatmix Support](https://wa.me/5543991733784)

## Composer:
```
composer require nilsonpessim/chatmix-whatsapp
```

## Basic Use:

```
<?php

use Source\Chatmix;
require_once __DIR__ . "/../vendor/autoload.php";

$chatmix = new Chatmix();
$chatmix->auth(YOUR-KEY, YOUR-TOKEN);
$chatmix->sendNumber(WHATSAPP-SEND-NUMBER);
$chatmix->textMessage("YOUR-MESSAGE");
$chatmix->sendMessage();
```

[![Whatsapp Badge](https://img.shields.io/badge/-Whatsapp-4CA143?style=flat-square&labelColor=4CA143&logo=whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone=5537999351046)](https://api.whatsapp.com/send?phone=5537999351046)