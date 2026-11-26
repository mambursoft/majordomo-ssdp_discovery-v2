<?php
$dictionary=array(
'SSDP_DISCOVERY_ENDPOINT'=>'API endpoint',
'SSDP_DISCOVERY_METHOD'=>'HTTP method',
'SSDP_DISCOVERY_TOKEN'=>'Access token',
'SSDP_DISCOVERY_REGION'=>'Region / route',
'SSDP_DISCOVERY_TRACKING'=>'Tracking number',
'SSDP_DISCOVERY_PAYLOAD'=>'POST payload template',
'SSDP_DISCOVERY_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SSDP_DISCOVERY_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}