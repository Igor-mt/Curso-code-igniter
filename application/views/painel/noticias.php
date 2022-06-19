<?php $this->load->view('painel/header'); ?>
<div class="linha">
    <div class="coluna col2">&nbsp;
        <ul class="sem-marcador sem padding">
            <li><a href="<?php echo base_url('noticia/cadastrar'); ?>">INSERIR</a></li>
            <li><a href="<?php echo base_url('noticia/listar'); ?>">LISTAR</a></li>
        </ul>
    </div>
    <div class="coluna col10">

        <h2><?php echo $h2; ?></h2>
        <?php
        if ($msg = get_msg()) :
            echo '<div class="msg-box">'.$msg.'</div>';
        endif;
        switch ($tela):
            case 'listar':
                echo 'tela de listagem';
                break;
            case 'cadastrar':
                echo 'tela de cadastro';
                break;
            case 'editar':
                echo 'tela de alteração';
                break;
            case 'excluir':
                echo 'tela de exclusão';
                break;
        endswitch;
        ?>
    </div>
</div>
<?php $this->load->view('painel/footer'); ?>