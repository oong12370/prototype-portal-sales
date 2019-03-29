<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends CI_Model{
	function semuaproduk()
	{
	$query=$this->db->query("SELECT * FROM product, kategori WHERE product.id_kat=kategori.id_kat;");
	return $query->result();
	}

	function newproduct()
	{
	$query=$this->db->query("SELECT * FROM product, kategori WHERE product.id_kat=kategori.id_kat LIMIT 6;");
	return $query->result();
	}
}