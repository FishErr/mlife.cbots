<?php
namespace Mlife\Cbots;

class DialogsTable extends DataManager
{
	
	public static function getFilePath()
	{
		return __FILE__;
	}
	
	public static function getTableName()
	{
		return 'mlife_cbots_dialogs';
		/*
		CREATE TABLE IF NOT EXISTS `mlife_cbots_dialogs` (
		`ID` int(18) NOT NULL AUTO_INCREMENT,
		`SESSION_ID` varchar(655) DEFAULT NULL,
		`MESSAGE_FROM` varchar(6255) DEFAULT NULL,
		`MESSAGE_TO` varchar(6255) DEFAULT NULL,
		`CONTECST` varchar(255) DEFAULT NULL,
		`TRANSPORT` varchar(255) DEFAULT NULL,
		`TIME_ADD` datetime DEFAULT NULL,
		PRIMARY KEY (`ID`)
		) AUTO_INCREMENT=1 ;
		*/
		
	}
	
	public static function getMap()
	{
		return array(
			
		);
	}
	
	
	
}