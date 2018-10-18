<?php
namespace Mlife\Cbots;

class DialogssessionTable extends DataManager
{
	
	public static function getFilePath()
	{
		return __FILE__;
	}
	
	public static function getTableName()
	{
		return 'mlife_cbots_dialogs_session';
		/*
		CREATE TABLE IF NOT EXISTS `mlife_cbots_dialogs_session` (
		`ID` int(18) NOT NULL AUTO_INCREMENT,
		`SESSION_ID` varchar(655) DEFAULT NULL,
		`USER` varchar(255) DEFAULT NULL,
		`USER_PARAMS` varchar(2655) DEFAULT NULL,
		`DIALOG_PARAMS` varchar(2655) DEFAULT NULL,
		`CLIENT` varchar(655) DEFAULT NULL,
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