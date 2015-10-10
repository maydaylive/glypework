<?php
/*******************************************************************
* 10/10/2015 - IKW - Moved proxy lookup settings to a separate file
* so that they are not overwritten by the admin function.
******************************************************************/

/*****************************************************************
* Database Connection and config options for pass-through proxy
* server selection.
******************************************************************/
$CONFIG['proxy_lookup_config'] = array(
    'host' => 'p:173.244.42.10',
    'username' => 'glyperemote',
    'password' => 'AIOUDYH97',
    'dbname' => 'ipmonitoring_new',
    'default_port' => 21542 );
