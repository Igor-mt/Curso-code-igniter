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
            // não instalado,, mostrar tela de alteração
            redirect('setup/instalar', 'refresh');
        }
    }

    public function instalar()
    {
        if ($this->option->get_option('setup_executado') == 1) :
            // setup configurado, mostrar tela para editar dados de setup
            redirect('setup/alterar', 'refresh');
        endif;
        //Regras de validação 
        $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');

        //Verifica a Validação
        if ($this->form_validation->run() == FALSE) :
            if (validation_errors()) :
                set_msg(validation_errors());
            endif;
        else :
            $dados_form = $this->input->post();
            $this->option->update_option('user_login', $dados_form['login']);
            $this->option->update_option('user_email', $dados_form['email']);
            $this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT));
            $inserido = $this->option->update_option('setup_executado', 1);
            if ($inserido) :
                set_msg('<p>Sistema instalado, use os dados cadastrados para logar no sistema.</p>');
                redirect('setup/login', 'refresh');
            endif;
        endif;
        // carrega view
        $dados['titulo'] = 'Igor Matheus - Setup do sistema';
        $dados['h2'] = 'Setup do sistema';
        $this->load->view('painel/setup', $dados);
    }

    public function login()
    {
        if ($this->option->get_option('setup_executado') != 1) :
            // setup não está ok, mostrar tela para instalar o sistema
            redirect('setup/instalar', 'refresh');
        endif;
        //Regras de validação 
        $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');

        //Verifica a Validação
        if ($this->form_validation->run() == FALSE) :
            if (validation_errors()) :
                set_msg(validation_errors());
            endif;
        else :
            $dados_form = $this->input->post();
           if($this->option->get_option('user_login')== $dados_form['login']):
                //usuário existe
                if(password_verify($dados_form['senha'], $this->option->get_option('user_pass'))):
                    //senha ok, fazer login
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user_login', $dados_form['login']);
                    $this->session->set_userdata('user_email', $this->option->get_option('user_email'));
                    //fazer redirect para home do painel
                    var_dump($_SESSION);
                else:
                    //senha incorreta
                    set_msg('<p>A senha incerida está incorreta!</p>');                
                endif;
            else:
                //usuário não existe
                set_msg('<p>Usuário não existe!</p>');
            endif;
        endif;

        // carrega view
        $dados['titulo'] = 'Igor Matheus - Setup do sistema';
        $dados['h2'] = 'Acessar o painel';
        $this->load->view('painel/login', $dados);
    }
}
