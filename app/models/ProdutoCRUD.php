<?php

namespace Models;

use Models\Conexao;

class ProdutoCrud {		

	/*public function create(Produto $p) {
		$sql = 'INSERT INTO db_produtos (nome, quantidade, valor, data, descricao) VALUES (?, ?, ?, ?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);
		$stmt->bindValue(2, $p->getQuantidade(), \PDO::PARAM_INT);
		$stmt->bindValue(3, $p->getValor());
		$stmt->bindValue(4, $p->getData());
		$stmt->bindValue(5, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->execute(); 
		
	}*/

	public function createProduto(Produto $p) {
		$sql = 'INSERT INTO tbl_produto (produto_nome, produto_descricao) VALUES (?, ?)';
		       
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);		
		$stmt->bindValue(2, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->execute();		
	}

	public function read() {
		$sql = 'SELECT * FROM db_produtos';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute(); 		
	}

	/*public function update(Produto $p) {
		$sql = 'UPDATE db_produtos SET nome = ?, quantidade = ?, valor = ?, data = ?, descricao = ?  WHERE id = ?';
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);
		$stmt->bindValue(2, $p->getQuantidade(), \PDO::PARAM_INT);
		$stmt->bindValue(3, $p->getValor());
		$stmt->bindValue(4, $p->getData());
		$stmt->bindValue(5, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->bindValue(6, $p->getId());
		$stmt->execute();
	}*/

	public function updateProduto(Produto $p) {
		$sql = 'UPDATE tbl_produto SET produto_nome = ?, produto_descricao = ?  WHERE produto_id = ?';
		
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome(), \PDO::PARAM_STR);		
		$stmt->bindValue(2, $p->getDescricao(), \PDO::PARAM_STR);
		$stmt->bindValue(3, $p->getId());
		$stmt->execute();
	}

	public function delete($id) {

		$sql = 'DELETE FROM tbl_produto WHERE id = ?';

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $id);
		$stmt->execute(); 		
	}
}


?>