<?php
	/**
	* 
	*/
	class Anuncios extends model
	{
		
		public function getQtdAnuncios(){
			$sql = "SELECT COUNT(*) AS c FROM ANUNCIOS";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				return $sql['c'];
			} else {
				return 0;
			}
		}

		public function getNome(){
			$nome = 'Vinicius';

			return $nome;
		}
	}