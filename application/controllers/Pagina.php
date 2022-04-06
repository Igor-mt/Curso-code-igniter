<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina extends CI_Controller{

    function __construct(){
        parent::__construct();  
        $this->load->helper('url');      
    }

    public function index(){
        $dados['titulo'] = 'Igor Matheus Desenvolvimento Web';
        $this->load->view('home', $dados);
    }
    
    public function clientes(){
        $dados['titulo'] = 'Clientes - Igor Matheus Desenvolvimento Web';
        $this->load->view('clientes', $dados);
    }

    public function servicos(){
        $dados['titulo'] = 'Serviços - Igor Matheus Desenvolvimento Web';
        $this->load->view('servicos', $dados);
    }

    public function sobre(){
        $dados['titulo'] = 'Sobre - Igor Matheus Desenvolvimento Web';
        $this->load->view('sobre', $dados);
    }

    public function contato(){
        $dados['titulo'] = 'CONTATO - Igor Matheus Desenvolvimento Web';
        $this->load->view('contato', $dados);
    }
}


