<?php
class model extends CI_Model {

	function view_data() {
		$hasil_data = $this->db->get('data')->result();
		return $hasil_data;
	}


	function get($id) {
		$query_get = $this->db->get_where('data_barang', array('id'=>$id))->result();
		$result = $query_get[0];
		return $result;
	}





} ?>

