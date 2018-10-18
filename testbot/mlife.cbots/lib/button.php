<?
namespace Mlife\Cbots;

class Button{
	
	public $button = array();
	
	function __construct($params=array()){
		$this->setData($params);
	}
	
	/*
	array(
		'hide' => true, false - параметр скрытия кнопки после нажатия
		'title_button' => короткий текст на кнопке
		'title_comand' => длинный текст на кнопке
		'payload' => команда переданная по нажатию на кнопку
	)
	*/
	public function setData($params=array()){
		if(empty($params)) return;
		
		if($params['title_button'] && !$params['title_comand']) $params['title_comand'] = $params['title_button'];
		
		$this->button = $params;
		
	}
	
	public function formatButton($type){
		if($type == 'alisa'){
			$but = new \stdClass();	
			$but->hide = $this->button['hide'];
			$but->title = $this->button['title_button'];
			$but->payload = $this->button['payload'];
			return $but;
		}elseif($type === false){
			return $this->button;
		}
	}
	
}