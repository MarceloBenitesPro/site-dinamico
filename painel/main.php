<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style2.css" />
   <script href="<?php echo INCLUDE_PATH; ?>"src="https://kit.fontawesome.com/f456eda14a.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="menu">
		<div class="menu-wraper">
	    <div class="box-usuario">
	    	<?php
	    	   if($_SESSION['img'] == ''){ 
	    	?>
	    	<div class="avatar-usuario">
	    		<i class="fa fa-user"></i>
	    	</div><!--avatar-usuario-->
	    <?php }else{?>
	    	 <div class="imagem-usuario">
	    	    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
	    	</div><!--avatar-usuario-->
	    <?php } ?>
	    	<div class="nome-usuario">
	    		<p><?php echo $_SESSION['nome']; ?></p>
	    		<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
	    	</div><!--nome-usuario-->
	    </div><!--box-usuario-->
	    <div class="items-menu">

	    	<h2>Cadastro</h2>
	    	<a <?php selecionadoMenu('cadastrar-depoimento'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-depoimento"><i class="fa-solid fa-book"></i> Cadastro Depoimentos</a>
	    	<a <?php selecionadoMenu('cadastrar-servico'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-servico"><i class="fa-solid fa-laptop-file"></i> Cadastro Serviço</a>
	    	<a <?php selecionadoMenu('cadastrar-slides'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-slides"><i class="fa-solid fa-book"></i> Cadastro Slides</a>
	    	<a <?php selecionadoMenu('cadastrar-logo'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-logo"><i class="fa-solid fa-book"></i> Cadastro logo</a>
	    	<a <?php selecionadoMenu('cadastrar-imagem-banner'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-imagem-banner"><i class="fa-solid fa-book"></i> Cadastrar-imagem-banner</a>
	    	<a <?php selecionadoMenu('cadastrar-imagem-autor'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-imagem-autor"><i class="fa-solid fa-book"></i> Cadastrar-imagem-autor</a>

	    	<h2>Gestão</h2>
	    	<a <?php selecionadoMenu('listar-depoimentos'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-depoimentos"><i class="fa-solid fa-address-book"></i> Listar Depoimentos</a>
	    	<a <?php selecionadoMenu('listar-servicos'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-servicos"><i class="fa-solid fa-clipboard-list"></i> Listar Serviço</a>
	    	<a <?php selecionadoMenu('listar-slides'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-slides"><i class="fa-solid fa-file-pen"></i> Listar Slides</a>
	    	<a <?php selecionadoMenu('listar-logo'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-logo"><i class="fa-solid fa-file-pen"></i>Logo Inseridas</a>
	    	<a <?php selecionadoMenu('listar-banner'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-banner"><i class="fa-solid fa-file-pen"></i> Listar-imagem-banner</a>
	    	<a <?php selecionadoMenu('listar-imagem-autor'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-imagem-autor"><i class="fa-solid fa-file-pen"></i> Listar-imagem-autor</a>

	    	<h2>Admintração do Painel</h2>
	    	<a <?php selecionadoMenu('editar-usuario'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>editar-usuario"><i class="fa-solid fa-pencil"></i>  Editar Usuario</a>
	    	<a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario"><i class="fa-solid fa-user"></i>  Adicionar Usuários</a>
	    	<h2>Configuração Geral</h2>
	    	<a <?php selecionadoMenu('editar-site'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>editar-site">Editar Site</a>
	    	<h2>Gestão de Notícias</h2>
	    	<a <?php selecionadoMenu('cadastrar-categoria'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-categoria">Cadastrar Categoria</a>
	    	<a <?php selecionadoMenu('gerenciar-categorias'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-categorias">Gerenciar Categorias</a>
	    	<a <?php selecionadoMenu('cadastrar-noticia'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-noticia">Cadastrar Notícia</a>
            <a <?php selecionadoMenu('gerenciar-noticias'); ?>href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-noticias">Gerenciar Notícias</a>



	    </div><!--itens-menu-->
	</div><!--menu-wraper-->
	</div><!--menu-->
	<header>
		<div class="center">
			<div class="menu-btn">
				<i class="fa-solid fa-bars"></i>
			</div><!--menu-btn-->
			<div class="loggout">
				<a <?php selecionadoMenuPrincipal('home'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>home"><i class="fa-solid fa-home"></i><span> Página Inicial</span></a>
				<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-arrow-right-from-bracket"></i><span style="color: white;"> Sair</span></a>
			</div><!--loggout-->
			<div class="clear"></div>
		</div><!--center-->
	</header>
	<div class="content">
		<?php Painel::carregarPagina(); ?>
	</div><!--content-->
	<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH?>js/jquery.mask.js"></script>
	<script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	  <script>
	  tinymce.init({ 
	  	selector:'.tinymce',
	  	plugins: ['image','link','media'],
	  	height:300
	   });
	  </script>
</body>
</html>