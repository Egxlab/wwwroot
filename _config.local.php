<?php
// place for your configuration directives, so you can later easily update myaac
$config['installed'] = true;
$config['mail_enabled'] = true;
$config['server_path'] = 'C:/inetpub/wwwroot/engine/';
$config['mail_admin'] = 'info@falnkera.com';
$config['mail_address'] = 'info@falnkera.com';
$config['date_timezone'] = 'Europe/Berlin';
$config['client'] = '1100';
$config['anonymous_usage_statistics'] = true;
$config['client_download'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/exe/windows';
$config['client_download_linux'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/tar/linux';
$config['session_prefix'] = 'myaac_2qck2eue_';
$config['cache_prefix'] = 'myaac_4hjec8ed_';

$config['highscores_ids_hidden'] = array(1, 2, 3, 4, 5);
