<?php
$dictionary=array(
'KODI_MEDIA_ENDPOINT'=>'Адрес API',
'KODI_MEDIA_METHOD'=>'HTTP-метод',
'KODI_MEDIA_TOKEN'=>'Токен доступа',
'KODI_MEDIA_REGION'=>'Регион / маршрут',
'KODI_MEDIA_TRACKING'=>'Номер отправления',
'KODI_MEDIA_PAYLOAD'=>'Шаблон POST-запроса',
'KODI_MEDIA_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'KODI_MEDIA_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}