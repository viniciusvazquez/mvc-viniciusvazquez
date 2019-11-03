<?php

	/**
	* 
	*
	**/

	class homeController extends controller{
		public function index(){
			$anuncios = new Anuncios();

			$dados = array(
				'quantidade' => $anuncios->getQtdAnuncios(),
				'nome' => $anuncios->getNome()
			);

			$this->loadTemplate('home', $dados);
		}
	}