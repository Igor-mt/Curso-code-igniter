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
        $dados['noticias'] = $this->noticia->get();
        $this->load->view('painel/noticias', $dados);
    }

    public function cadastrar(){
        //verifica login se o usuário está logado
        verifica_login();

        //regras de validação
        $this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required');
        $this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required');

        //Verifica a Validação
        if ($this->form_validation->run() == FALSE) :
            if (validation_errors()):
                set_msg(validation_errors());
            endif;
        else :
            $this->load->library('upload', config_upload());
            if($this->upload->do_upload('imagem')):
                // Upload foi efetuado
                $dados_upload = $this->upload->data();
                $dados_form = $this->input->post();
                $dados_insert['titulo'] = $dados_form['titulo'];
                $dados_insert['conteudo'] = $dados_form['conteudo'];
                $dados_insert['imagem'] = $dados_upload['file_name'];
                // Salvar no banco de dados
            if($id = $this->noticia->salvar($dados_insert)):
                set_msg('<p>Notícia cadastrada com sucesso!</p>');
                redirect('noticia/listar','refresh');
            else:
                set_msg('<p>Erro! Notícia não cadastrada.</p>');
            endif;

        else:
                // erro no upload
                $msg = $this->upload->display_errors();
                $msg .= '<p>São permitidos arquivos JPG e PNG de até 512kb. </p>';
                set_msg($msg);
        endif;
    endif;
        //carrega view
        $dados['titulo'] = 'Igor Matheus - Cadastro de Notícias';
        $dados['h2'] = 'Cadastro de notícias';
        $dados['tela'] = 'cadastrar';
        $this->load->view('painel/noticias', $dados);
    }
}

