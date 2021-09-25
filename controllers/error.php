<?php

class hata extends Controller  {
	
	
	function __construct() {
		parent::__construct();	
		
		$this->view->mesaj="Değişken ile gelen mesaj";		
		$this->view->goster("hata/index");
		
	}
	
	
	
	

	
}




?>