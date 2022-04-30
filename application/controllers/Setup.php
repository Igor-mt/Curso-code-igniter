<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setup extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Option_model', 'option');
    }

    public function index()
    {
        if ($this->option->get_option('setup_executado') == 1) {
            // setup configurado, mostrar tela para editar dados de setup
            redirect('setup/alterar', 'refresh');
        } else {
            // nõa instalado,, mostrar tela de alteração
            redirect('setup/instalar', 'refresh');
        }
    }

    public function instalar()
    {
        if ($this->option->get_option('setup_executado') == 1) {
            // setup configurado, mostrar tela para editar dados de setup
            redirect('setup/alterar', 'refresh');
        }

        // carrega view
        $dados ['titulo'] = 'Igor Matheus - Setup do sistema';
        $dados ['h2'] = 'Setup do sistema';
        $this->load->view('painel/setup', $dados);
    }

    public function alterar()
    {
        echo "metodo alterar";
    }
}
