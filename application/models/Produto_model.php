<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model
{
	public function getTodosProdutos()
	{
		$this->db->select('*');
		$this->db->from('produto');
		$this->db->join('categoria', 'categoria.id = produto.id_categoria');
		$this->db->join('tipoProduto', 'tipoProduto.id = produto.id_tipoProduto');

		$query = $this->db->get();
		return $query;
	}

	public function getTodosProdutosLandingpage()
	{
		$this->db->select('*');
		$this->db->from('produtoLandingpage');

		$query = $this->db->get();
		return $query;
	}
}