<?php

	/**
	* 
	*
	**/

	class galeriaController extends controller{
		public function index(){
			$dados = array(
				'nome' => 'Galeria',
				'qtdAlbuns' => 30
			);

			$this->loadTemplate('galeria', $dados);
		}
	}