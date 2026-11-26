<?php
$dictionary=array(
'SSDP_DISCOVERY_ENDPOINT'=>'API endpoint',
'SSDP_DISCOVERY_METHOD'=>'HTTP method',
'SSDP_DISCOVERY_TOKEN'=>'Access token',
'SSDP_DISCOVERY_REGION'=>'Region / route',
'SSDP_DISCOVERY_TRACKING'=>'Tracking number',
'SSDP_DISCOVERY_PAYLOAD'=>'POST payload template',
'SSDP_DISCOVERY_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SSDP_DISCOVERY_LAST'=>'Last result',
'SSDP_DISCOVERY_IGNORE_LIST'=>'Ignore list',
'SSDP_DISCOVERY_TIMEOUT'=>'Discovery timeout',
'SSDP_DISCOVERY_IGD_URL'=>'IGD control URL',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}