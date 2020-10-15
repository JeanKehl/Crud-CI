<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function getProdutos(){
        $query = $this->db->get('produtos');
        return $query->result();
    }

    public function addProdutos($dados=NULL){
        if($dados!=null){
            $this->db->insert('produtos',$dados);
        }
    }
    public function getProdutoByID($id=NULL){
        if($id!=null){
            $this->db->where('id',$id);
            $this->db->limit(1);
            $query = $this->db->get("produtos");
            return $query->row();
        }
    }
    public function editarProdutos($dados=NULL,$id=NULL){
        if($dados!=null && $id != null){
            $this->db->update('produtos',$dados,array('id'=>$id));
        }
    }
    public function apagarProdutos($id=NULL){
        if($id != NULL){
            $this->db->delete('produtos',array('id'=>$id));
        }

    }
}