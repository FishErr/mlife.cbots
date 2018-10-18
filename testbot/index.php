<?php
ini_set('error_reporting', E_ALL);
header('Content-Type: text/html; charset=utf-8');
$time_start = microtime(true);
include(__DIR__.'/mlife.cbots/include.php');
use \Mlife\Cbots\Main as App;

$app = App::getInstance(
	array(
		'transport'=>array(
			'CLASS'=>'\Mlife\Cbots\Transport\Alisa',
			'CONFIG'=>array(
				'TIME_START'=>$time_start
			)
		),
		'session'=>array(
			'CLASS'=>'\Mlife\Cbots\Usersession',
			'SESSION_EXPIRED'=>24*60*60*28,
			'SESSION_DIR'=>__DIR__.'/sessions',
			'CONTECST'=>'\Mlife\Cbots\Contecst\Bot\Start',
			'CONTECST_GLOBAL'=>'\Mlife\Cbots\Contecst\Bot\Globalc',
		),
		'log' => array(
			'CLASS' => '\Mlife\Cbots\Log',
			'FILE_NAME' => 'log_txt.txt',
			'FILE_DIR' => __DIR__
		),
		'data'=>array(
			
		)
	)
);

$app->send();