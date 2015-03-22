<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ecommerce extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('modelProducts');
		$allProducts['allProducts'] = $this->modelProducts->get_all_products();
		$this->load->view('viewProducts' , $allProducts);
	}
	public function purch()
	{
		$session = array(
						'quantity' => $this->input->post('quantity'),
						'description' => $this->input->post('description'),
						'price' => $this->input->post('price')
						);
		$this->load->model('modelProducts');
		$this->modelProducts->add_products($session);

		redirect('/');
	}
	public function buy()
	{
		$this->load->model('modelProducts');
		$allProducts['allProducts'] = $this->modelProducts->get_all_products();
		$this->load->view('viewCheckOut' , $allProducts);
	}
	public function thanks()
	{
		$thanks_session = array(
						'name' => $this->input->post('name'),
						'address' => $this->input->post('address')
						);
		$this->load->model('modelProducts');
		$this->modelProducts->add_customers($thanks_session);

		$this->load->model('modelProducts');
		$allCustomers['allCustomers'] = $this->modelProducts->get_all_customers();
		$this->load->view('viewThanks' , $allCustomers);
	}
	public function delete()
	{
		$this->load->model('modelProducts');
		$this->modelProducts->clear_cart();
		redirect('/');
	}
	public function remove()
	{
		$this->load->model('modelProducts');
		$this->modelProducts->clear_cart();
		redirect('/');
	}

}
