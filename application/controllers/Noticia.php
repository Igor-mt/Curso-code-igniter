<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Noticia extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Option_model', 'option');
        $this->load->model('Noticia_model','noticia');
        }

    public function index(){
        redirect('noticia/listar', 'refresh');
    }
    
    public function listar(){
        //verifica login se o usuário está logado
        verifica_login();

        //carrega view
        $dados['titulo'] = 'Igor Matheus - Listagem de Notícias';
        $dados['h2'] = 'Listagem de Notícias';
        $dados['tela'] = 'listar';
        $this->load->view('painel/noticias', $dados);
    }
}
