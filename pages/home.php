
 <section class="banner-container">
    <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.slides` ORDER BY order_id ASC LIMIT 3 ");
                $sql->execute();
                $slides = $sql->fetchAll();
                foreach ($slides as $key => $value) {
             ?>
	       <div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['slide']; ?>');" class="banner-single"></div><!--banner-single-->
      <?php } ?>
   <div class="overlay"></div><!--overlay-->    
   	    <div class="center"><!--center-->
            <div class="w50 left"> 
           <form>
   	       	<h2><?php echo $infoSite['titulo_email']; ?></h2>
   	       	<p style="color:white"><?php echo $infoSite['descricao_email']; ?></p>
   	       	<input type="email" name="email" required />
   	       	<input type="submit" name="acao" value="Cadastrar!">
   	       </form>
            <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.banner` ");
                $sql->execute();
                $banner = $sql->fetchAll();
                foreach ($banner as $key => $value) {
             ?>
               <div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['banner']; ?>');" class="banner-img"></div>
             <?php } ?>
   	   </div>
   	   </div><!--w50-->
   	   <div class="clear"></div>
   	    </div><!--center-->
		   <div class="bullets">
             
		   </div>
   </section><!--banner-principal-->
   <section class="descricao-autor">
   	    <div class="center">
   	       <div class="w100 left">
   	       <h2><?php echo $infoSite['nome_autor']; ?></h2>
   	       <p><?php echo $infoSite['descricao']; ?></p>
   	   </div><!--w50-->
   	 </div><!--center-->
   	   <div class="w50 left">
             <div class="center">
   	   	<!--Pegar imagem depois-->
         <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.img_autor` ORDER BY order_id ASC LIMIT 1 ");
                $sql->execute();
                $img_autor = $sql->fetchAll();
                foreach ($img_autor as $key => $value) {
             ?>
   	       <div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['img_autor']; ?>');" class="img_autor"></div>
         <?php } ?>
            </div><!--center-->
   	   </div><!--w50-->
         <div class="clear"></div>
   </section><!--descricao-autor-->
   <section class="especialidades">
   	     <div class="center">
   	     <h2 class="title">Especialidades</h2>
   	     	<div class="w33 left box-especilidade">
   	     		<h3><i class="<?php echo $infoSite['icone1']; ?>"></i></h3>
   	     		<h4><?php echo $infoSite['titulo1']; ?></h4>
   	     		<p><?php echo $infoSite['descricao1']; ?></p>
   	     	</div><!--especialidade-->
   	     	<div class="w33 left box-especilidade">
   	     		 <h3><i class="<?php echo $infoSite['icone2']; ?>"></i></h3>
   	     		<h4><?php echo $infoSite['titulo2']; ?></h4>
   	     		<p><?php echo $infoSite['descricao2']; ?></p>
   	     	</div><!--especialidade-->
   	     	<div class="w33 left box-especilidade">
   	     		 <h3><i class="<?php echo $infoSite['icone3']; ?>"></i></h3>
   	     		<h4><?php echo $infoSite['titulo3']; ?></h4>
   	     	<p><?php echo $infoSite['descricao3']; ?></p>
   	     	</div><!--especialidade-->
            <div class="clear"></div><!--clear-->
   	     </div><!--center-->
   </section><!--especialidades-->
   <section class="extras">
   	   <div class="center">
   	   	 <div id ="depoimentos" class="w50 left depoimentos-container">
   	   	 <h2 class="title">Depoimentos Dos Nossos Clientes</h2>
             <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3 ");
                $sql->execute();
                $depoimentos = $sql->fetchAll();
                foreach ($depoimentos as $key => $value) {
             ?>
   	   	 <div class="depoimento-single">
   	   	 	<p class="depoimento-descricao">
   	   	 	<?php echo $value['depoimento']; ?>	
   	   	 	</p>
   	   	 	  <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
   	   	 </div><!--depoimento-simgle-->
            <?php } ?>
   	     </div><!--w50-->
   	      <div id ="servicos" class="w50 left servicos-container">
   	   	 <h2 class="title">Serviços</h2>
   	   	  <div class="servico">
   	   	    <ul>
                  <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.servicos` ORDER BY order_id ASC LIMIT 3 ");
                   $sql->execute();
                   $servicos = $sql->fetchAll();
                   foreach ($servicos as $key => $value) {
                  ?>
   	   	    	<li><?php echo $value['servico'] ?></li>
   	   	     <?php } ?>
   	   	    </ul>
   	   	</div>
   	   	</div><!--w50-->
   	   	    <div class="clear"></div>
   	   </div><!--center-->
   </section><!--extras-->