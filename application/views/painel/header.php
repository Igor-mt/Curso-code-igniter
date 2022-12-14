<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css')?>"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css')?>"/> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/painel.css')?>"/> 
</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<h1 class="logo">
					<?php
						echo $this->option->get_option('nome_site', 'Você não cadastrou a option "nome_site".');
						?> - Painel
					</h1>
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem-marcador">
							<li><a target='_blank' href="<?php echo base_url(); ?>">ver site</a></li>
							<li><a href="<?php echo base_url('noticia'); ?>">Noticias</a></li>
							<li><a href="<?php echo base_url('setup'); ?>">Configuração</a></li>
							<li><a href="<?php echo base_url('setup/logout'); ?>">Sair</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>