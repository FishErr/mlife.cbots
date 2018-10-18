<?
namespace Mlife\Cbots;

class Helper {
	
	public static function toLowerText($text){
		$text = mb_strtolower($text);
		return $text;
	}
	
	public static function getTextErrorDefault(){
		
		$text = array(
			'Не удалось определить команду.',
			'Я не совсем понимаю Вас.',
			'Не могу обработать Ваш запрос.',
			'Не могу ответить на Ваш запрос.',
			'Попробуйте перефразировать Ваш запрос.'
		);
		
		return $text;
	}
	
}