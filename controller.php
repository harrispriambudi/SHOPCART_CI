<?php function add($id) {
		$this->load->model('model');
		$product = $this->model->get_data($id);
		
		$data = array(
			'id' => $product->id,
            'qty'     => $this->input->post('quantity'),
            'price'   => $product->harga,
            'name'    => $product->nama,
		);
		$this->cart->insert($data);
		redirect("view_page");
	}
	
	public function view_page()
		{
			$this->load->model('model');
			$data['data_barang'] = $this->model->view_data();
			$this->load->view('view', $data);
		}
	?>