<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Sobre MongoDB</title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/bdb2e97244.js" crossorigin="anonymous"></script>
	<meta name='viewport' content="width=device-width, initial-scale=1">
	<meta name='author' content="Erick Lima da Silva">
	<meta name='description' content="MongoDB, história do mongodb.">
	<meta name='keywords' content='mongodb'>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="imagens/logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- Banner -->
<div id="banner">
	<a href="https://www.mongodb.com/who-uses-mongodb" target="_blank"><img src="imagens/mongodblogo.png"></a>
</div>

<!-- Conteúdo -->

<!-- História -->
<div class="content historia direction-column">
	<h1 class="titulo">Como surgiu o MongoDB?</h1>
	<p class="text">Os fundadores do MongoDB criaram grandes empresas, como a <a href="https://support.google.com/faqs/answer/2727482?hl=en" target="_blank"><span>DoubleClick</span></a>, que é especializada em mídia eletrônica (Marketing de Banner, motores de busca, etc...), pertencente ao Google. E os problemas enfrentados para o armazenamento da grande massa de dados produzida por essa empresa, levaram à criação do MongoDB, um banco de dados capaz de gerenciar essa grande quantidade de dados de forma eficiente.</p>

	<!-- Imagens -->
	<div class="img direction-row">

		<div id="doubleclick">
			<a href="https://support.google.com/faqs/answer/2727482?hl=en" target="_blank"><img src="imagens/doubleclick.png"></a>
		</div>

		<!-- Fundadores -->
		<div id="fundadores" class="direction-row">
			<div class="perfil direction-column">
				<img src="imagens/eliot.jpg">
				<p>Eliot Horowitz</p>
			</div>

			<div class="perfil direction-column">
				<img src="imagens/dwigth.jpg">
				<p>Dwight Merriman</p>
			</div>

			<div class="perfil direction-column">
				<img src="imagens/kevin.jpeg">
				<p>Kevin P. Ryan</p>
			</div>
		</div>
	</div>
</div>

<!-- Curiosidades -->
<div class="content curiosidades direction-column">
	<h1 class="titulo">Curiosidades sobre:</h1>
	<div id="mongodb">
		<img src="imagens/mongodblogo.png">
	</div>
	<h1 class="subtitulo2">Qual o significado do nome?</h1>
	<p class="text2">- Mongo vem da palavra inglesa Humongous, que quer dizer Gigantesco.</p>
	<h1 class="subtitulo2">Qual o significado da folha?</h1>
	<p class="text2">- A folha vem da filosofia de que programar tem que ser algo natural. Logo, eles esperam que quem use o MongoDB consiga programar de forma natural e simples, como uma folha.</p>
</div>

<!-- Diferencial -->
<div class="content diferenca direction-column">
	<h1 class="titulo">Qual a diferença do MongoDB?</h1>
	<p class="text">A estrutura de dados do MongoDB é diferente do Mysql, que armazena seus dados em tabelas. No MongoDB, os dados são armazenados em <span>arquivos</span> que contém <span>Objetos JSON</span>. E o conjunto desses arquivos é chamado de <span>Collection</span>.</p>
	<div class="img">
		<div id="JSON">
			<img src="imagens/JSON.png">
		</div>
	</div>
</div>

<!-- Aplicações -->
<div class="content aplicacao direction-column">
	<h1 class="titulo">Principais Aplicações</h1>
	<p class="text">O MongoDB tem como principal característica a grande capacidade de armazenamento, logo, ele deve ser usado em projetos que realmente precisam de toda essa capacidade.</p>
	<p class="subtitulo">Empresas que utilizam o MongoDB:</p>
	<div class="apps direction-row">
		<a href="https://www.ebay.com/" target="_blank"><img src="imagens/logo/ebay.png" alt="Ebay"></a>
		<a href="https://www.facebook.com/" target="_blank"><img src="imagens/logo/facebook.png"></a>
		<a href="https://www.adobe.com/br/" target="_blank"><img src="imagens/logo/adobe.png"></a>
		<a href="https://www.cisco.com/" target="_blank"><img src="imagens/logo/cisco.png"></a>
		<a href="https://www.ea.com/pt-br/sports" target="_blank"><img src="imagens/logo/EA.png"></a>
	</div>
</div>

<!-- Vantagens e desvantagens -->
<div class="content VanxDes direction-column">
	<div class="van_content direction-row">
		<div class="direction-column">
			<h1 class="titulo">Vantagens</h1>
			<ul>
				<li>- Melhor performance, pois com uma única consulta conseguimos tudo o que precisamos saber sobre o documento.</li>
				<li>- As consultas são simples de serem feitas.</li>
				<li>- Multiplataforma.</li>
				<li>- Possui uma funcionalidade chamada GridFS que possibilita o armazenamento de arquivos grandes, como vídeos, gifs e fotos grandes.</li>
				<li>- Possui drivers para diversas linguagens de programação.</li>
			</ul>
		</div>

		<div class="hr direction-column">
			<hr>
		</div>

		<div class="van_content direction-column">
			<h1 class="titulo">Desvantagens</h1>
			<ul>
				<li>- Possui grande consumo de memória.</li>
				<li>- Demora até 100ms para gravar dados efetivamente no disco.</li>
			</ul>
		</div>
	</div>
</div>

<!-- Rodapé -->
<div id="rodape">
	<p>Copyright &copy; <?php echo date("Y"); ?> | Erick Lima da Silva Todos os direitos reservados. </p>
</div>

</body>
</html>