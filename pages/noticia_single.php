<?php
   $url = explode('/', $_GET['url']);
 
   $verifica_categoria = MYSql::conectar()->prepare("SELECT * FROM  `tb_site.categorias` WHERE slug = ?");
   $verifica_categoria->execute(array($url[1]));
   if($verifica_categoria->rowCount() == 0){
         Painel::redirect(INCLUDE_PATH.'noticias');
   }
   $categoria_info = $verifica_categoria->fetch();
   $post = MYSqL::conectar()->prepare("SELECT * FROM `tb_site.noticias` WHERE slug = ? AND categoria_id = ?");
   $post->execute(array($url[2],$categoria_info['id']));
   if($post->rowCount() == 0){
        Painel::redirect(INCLUDE_PATH.'noticias');
   }

   //É por que a minha notícia existe

   $post = $post->fetch();

?>
           <div class="center">
             <div class="sidebar"   style="margin-top: 50px;">
				 	<div class="box-content-sidebar">
					<h3> <i class="fa fa-list-ul"></i> Selecione A Categoria: </h3>
					<form>
						<select name="categoria">
							<option value="" selected="">Todas as Categorias</option>
							<?php
							  $categorias = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` ORDER BY order_id ASC");
							  $categorias->execute();
							  $categorias = $categorias->fetchAll();
							  foreach ($categorias as $key => $value) {
							?>
							<option <?php if($value['slug'] == @$url[1]) echo 'selected'; ?> value="<?php echo $value['slug']?>"><?php echo $value['nome'];?></option>
						<?php } ?>
						</select>
					</form>
				</div><!--box-content-sidebar-->

				<div class="box-content-sidebar">
					<h3> <i class="fa fa-user"></i> Sobre o Autor: </h3>
					<div class="autor-box-portal">
						 <?php
			                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.img_autor` ORDER BY order_id ASC LIMIT 1 ");
			                $sql->execute();
			                $img_autor = $sql->fetchAll();
			                foreach ($img_autor as $key => $value) {
				             ?>
				   	       <div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['img_autor']; ?>');" class="box-img-autor"></div>
				         <?php } ?>
						<div class="texto-autor-portal  text-center">
							<?php
							    $infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
                                $infoSite->execute();
                                $infoSite = $infoSite->fetch();
							?>
							<h3><?php echo $infoSite['nome_autor']; ?></h3>
							<p> <?php echo substr($infoSite['descricao'],0,150).'...'; ?> </p>
						</div><!--texto-autor-portal-->
					</div><!--autor-box-portal-->
				</div><!--box-content-sidebar-->
		</div><!--sidebar-->

<section class="noticia-single">
	<div class="center">
		<head>
			<h1><p> <i class="fa fa-clock"></i> <?php echo $post['data']?> - <?php echo $post['titulo'] ?></p> </h1>
		</head>
		<article> <?php echo $post['conteudo']; ?> </article>
	</div>	
</section>
</div><!--center-->
<div class="clear"></div>