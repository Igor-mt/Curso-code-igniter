	<div class="linha">
		<section>
			<div class="coluna col5 sidebar">
				<h3>Localização</h3>
				<img src="img/mapa.jpg" alt="" />
				<ul class="sem-padding sem-marcador">
					<li>Rua Machado de Assis, 121</li>
					<li>Bairo Moinhos</li>
					<li>Possibilândia - UF</li>
				</ul>
				<h3>Contato direto</h3>
				<ul class="sem-padding sem-marcador">
					<li>Fone: <strong>(00) 9999-9999</strong></li>
					<li>Email: <strong>contato@rbernardi.com</strong></li>
					<li>Skype: <strong>login.skype</strong></li>
				</ul>
			</div>
			<div class="coluna col7 contato">
				<h2>Envie uma mensagem</h2>
				<form action="">
					<label for="nome">Seu nome:</label>
					<input type="text" name="nome" id="nome" />
					<label for="email">Seu email:</label>
					<input type="text" name="email" id="email" />
					<label for="assunto">Assunto:</label>
					<input type="text" name="assunto" id="assunto" />
					<label for="mensagem">Mensagem:</label>
					<textarea name="mensagem" id="mensagem"></textarea>
					<input type="submit" class="botao" name="enviar" value="Enviar mensagem &raquo;" />
				</form>
			</div>
		</section>
	</div>
	<div class="conteudo-extra">
		<div class="linha">
			<div class="coluna col7">
				<section>
					<h2>Método alternativo de contato</h2>
					<p>Caso não consiga me contatar por alguns dos meio acima, possivelmente eu estarei em uma ilha deserta em algum lugar do pacífico. Neste caso há duas possibilidades:</p>
					<ol>
						<li>Enviar uma mensagem em uma garrafa</li>
						<li>Tentar um sinal de fumaça</li>
					</ol>
					<p>Mas sinceramente não sei se algum desses métodos será eficiente, tente por sua conta e risco :D</p>
				</section>
			</div>
			<div class="coluna col5">
				<?php require_once('noticias.php'); ?>
			</div>
		</div>
	</div>