<?php
$dictionary=array(
'SSDP_DISCOVERY_ENDPOINT'=>'Адрес API',
'SSDP_DISCOVERY_METHOD'=>'HTTP-метод',
'SSDP_DISCOVERY_TOKEN'=>'Токен доступа',
'SSDP_DISCOVERY_REGION'=>'Регион / маршрут',
'SSDP_DISCOVERY_TRACKING'=>'Номер отправления',
'SSDP_DISCOVERY_PAYLOAD'=>'Шаблон POST-запроса',
'SSDP_DISCOVERY_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'SSDP_DISCOVERY_LAST'=>'Последний результат',
'SSDP_DISCOVERY_IGNORE_LIST'=>'Список игнорируемых',
'SSDP_DISCOVERY_TIMEOUT'=>'Таймаут обнаружения',
'SSDP_DISCOVERY_IGD_URL'=>'URL управления IGD',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}