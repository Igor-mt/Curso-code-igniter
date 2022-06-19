<meta charset="UTF-8" />
<title><?php echo $titulo; ?></title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/painel.css') ?>" />

<?php $this->load->view('painel/header'); ?>
<div class="linha">
    <div class="coluna col3">&nbsp;</div>
    <div class="coluna col6">

        <h2><?php echo $h2; ?></h2>
        <?php
        if ($msg = get_msg()) :
            echo '<div class="msg-box">' .$msg. '</div>';
        endif;
        echo form_open();
        echo form_label('Nome para login:', 'login');
        echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
        echo '<br>';
        echo form_label('Email do administrador do site', 'email');
        echo form_input('email', set_value('email'));
        echo '<br>';
        echo form_label('Senha (deixe em branco para não alterar):', 'senha');
        echo form_password('senha', set_value('senha'));
        echo '<br>';
        echo form_label('Repita a senha', 'senha2');
        echo form_password('senha2', set_value('senha2'));
        echo '<br>';
        echo form_label('Nome do site:', 'nome_site');
        echo form_input('nome_site', set_value('nome_site'));
        echo '<br>';
        echo form_submit('enviar', 'Salvar dados', array('class' => 'botao'));
        echo form_close();
        ?>

    </div>

    <div class="coluna col3">&nbsp;</div>
</div>
<?php $this->load->view('painel/footer'); ?>