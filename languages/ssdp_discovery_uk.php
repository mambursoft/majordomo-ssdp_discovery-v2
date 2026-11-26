<?php
$dictionary=array(
'SSDP_DISCOVERY_ENDPOINT'=>'Адреса API',
'SSDP_DISCOVERY_METHOD'=>'HTTP-метод',
'SSDP_DISCOVERY_TOKEN'=>'Токен доступу',
'SSDP_DISCOVERY_REGION'=>'Регіон / маршрут',
'SSDP_DISCOVERY_TRACKING'=>'Номер відправлення',
'SSDP_DISCOVERY_PAYLOAD'=>'Шаблон POST-запиту',
'SSDP_DISCOVERY_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'SSDP_DISCOVERY_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}