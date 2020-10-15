<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('home');
	}
	public function listarprodutos(){
		//carregando o model
		$this->load->model('produtos_model','produtos');
		//Pega dados do model
		$data['produtos'] = $this->produtos->getProdutos();
		$this->load->view('listarprodutos',$data);
	}
	public function addprodutos(){
		//Carrega o model
		$this->load->model('produtos_model','produtos');
		$this->load->view('addprodutos');
	}
	public function salvar(){

		if($this->input->post('nome')==NULL){
			echo 'O campo nome é obrigatorio';
		}else{
			$this->load->model('produtos_model','produtos');
			$dados['nome']=$this->input->post('nome');
			$dados['preco']=$this->input->post('preco');
			$dados['ativo']=$this->input->post('ativo');


			if($this->input->post('id') != null){
			$this->produtos->editarprodutos($dados,$this->input->post('id'));
			}else{
			$this->produtos->addProdutos($dados);
			}
			
			redirect("produtos/listarprodutos");
		}
	}
	public function editarProdutos($id=NULL){
		
		if($id==NULL){
			redirect('/');
		}
			$this->load->model('produtos_model','produtos');
			$query=$this->produtos->getProdutoByID($id);

			if($query==NULL){
				redirect("produtos/listarprodutos");
			}
			$dados['produto']=$query;
			$this->load->view('editarprodutos',$dados);	
	}

	public function apagarProdutos($id=NULL){
		if($id == null){
			redirect('produtos/listarprodutos');
		}
		$this->load->model('produtos_model','produtos');

		$query = $this->produtos->getProdutoByID($id);

		if($query!= null){
			$this->produtos->apagarProdutos($query->id);
			redirect('produtos/listarprodutos');
		}else{
			redirect('produtos/listarprodutos');
		}
	}
}
