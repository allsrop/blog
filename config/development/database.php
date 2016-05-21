<?php
return array(

    'fetch' => PDO::FETCH_CLASS,
    'default' => '不使用default',
    'connections' => array(

    ),
    'redis' => array(
        'cluster' => false,
        // session 用
        'default' => array(
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ),
    ),
    'telegram' => array(
        'token'=> '173870494:AAE1ZzhraP0wvws1FhfKlWXJ-k0tpogGePQ', //allstop
        'chat_id' => 154747271,
    ),
);
