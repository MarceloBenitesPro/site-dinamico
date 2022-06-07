<?php 
   $site = Painel::select('tb_site.config',false);
?>
<div class="box-content">
	<h2><i class="fa-solid fa-pencil"></i> Editar Configurações do Site</h2>
	<form method="post" enctype="multipart/form-data">
		<?php
		   if(isset($_POST['acao'])){
		   if(Painel::update($_POST,true)){
                 Painel::alert('sucesso', 'O Site foi editado com sucesso! '); 
                 $site = Painel::select('tb_site.config',false); 
             }else{
             	Painel::alert('erro', 'Campos Vázios Não São Permitidos! ');
             }
             
		   }
		?>
		
	

    <div class="form-group">
      <label> Título do Site:</label>
      <input type="text" name="titulo" value="<?php echo $site['titulo']?>" />
    </div><!--form-group-->

      <div class="form-group">
      <label> Logo:</label>
      <input type="text" name="logo" value="<?php echo $site['logo']?>" />
    </div><!--form-group-->

     <div class="form-group">
      <label> Título do E-mail:</label>
      <input type="text" name="titulo_email" value="<?php echo $site['titulo_email']?>" />
    </div><!--form-group-->

      <div class="form-group">
      <label> Descrição Do E-mail:</label>
      <textarea class="tinymce" name="descricao_email" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ><?php echo $site['descricao_email'] ?></textarea>
    </div><!--form-group-->


    <div class="form-group">
      <label> Nome do Autor do Site:</label>
      <input type="text" name="nome_autor" value="<?php echo $site['nome_autor']?>" />
    </div><!--form-group-->

      <div class="form-group">
      <label> imagem do autor:</label>
      <input type="file" name="img_autor" value="<?php echo $site['img_autor']?>" />
    </div><!--form-group-->


    <div class="form-group">
      <label> Descrição Do Autor do Site:</label>
      <textarea class="tinymce" name="descricao" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ><?php echo $site['descricao'] ?></textarea>
    </div><!--form-group-->

    <?php
     
     for ($i=1; $i <= 3; $i++) { 
  
     
    ?>

    <div class="form-group">
      <label> Ícone  <?php echo $i; ?> </label>
      <input type="text" name="icone<?php echo $i; ?>" value="<?php echo $site['icone'.$i]?>" />
    </div><!--form-group-->

     <div class="form-group">
      <label> Título do Ícone <?php echo $i; ?> :</label>
      <input type="text" name="titulo<?php echo $i; ?>" value="<?php echo $site['titulo'.$i]?>" />
    </div><!--form-group-->

    <div class="form-group">
      <label> Descrição Do Ícone <?php echo $i; ?></label>
      <textarea class="tinymce" name="descricao<?php echo $i; ?>" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ><?php echo $site['descricao'.$i] ?></textarea>
    </div><!--form-group-->

       <?php } ?>

		<div class="form-group">
			<input type="hidden" name="nome_tabela" value ="tb_site.config" />
			<input type="submit" name="acao" value="Atualizar!" />
		</div><!--form-group-->
	</form>
</div><!--box-content-->