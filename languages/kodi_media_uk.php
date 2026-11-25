<?php
$dictionary=array(
'KODI_MEDIA_ENDPOINT'=>'Адреса API',
'KODI_MEDIA_METHOD'=>'HTTP-метод',
'KODI_MEDIA_TOKEN'=>'Токен доступу',
'KODI_MEDIA_REGION'=>'Регіон / маршрут',
'KODI_MEDIA_TRACKING'=>'Номер відправлення',
'KODI_MEDIA_PAYLOAD'=>'Шаблон POST-запиту',
'KODI_MEDIA_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'KODI_MEDIA_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}