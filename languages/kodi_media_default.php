<?php
$dictionary=array(
'KODI_MEDIA_ENDPOINT'=>'API endpoint',
'KODI_MEDIA_METHOD'=>'HTTP method',
'KODI_MEDIA_TOKEN'=>'Access token',
'KODI_MEDIA_REGION'=>'Region / route',
'KODI_MEDIA_TRACKING'=>'Tracking number',
'KODI_MEDIA_PAYLOAD'=>'POST payload template',
'KODI_MEDIA_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'KODI_MEDIA_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}