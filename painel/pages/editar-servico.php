<?php
if(isset($_GET['id'])){
  $id = (int)$_GET['id'];
  $servico = Painel::select('tb_site.servicos','id = ?',array($id));
}else{
	Painel::alert('erro','Você precisa passar o parametro ID.');
	die();
}
?>
<div class="box-content">
	<h2><i class="fa-solid fa-pencil"></i> Editar Serviço </h2>
	<form method="post" enctype="multipart/form-data">
		<?php
		   if(isset($_POST['acao'])){
		   if(Painel::update($_POST)){
                 Painel::alert('sucesso', 'O Serviço foi editado com sucesso! '); 
                 $servico = Painel::select('tb_site.servicos','id = ?',array($id)); 
             }else{
             	Painel::alert('erro', 'Campos Vázios Não São Permitidos! ');
             }
             
		   }
		?>
		
	

    <div class="form-group">
      <label> <i class="fa-solid fa-clipboard-list"></i> Serviço:</label>
      <textarea name="servico" class="tinymce" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ><?php echo $servico['servico'] ?></textarea>
    </div><!--form-group-->



		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id;  ?>">
			<input type="hidden" name="nome_tabela" value ="tb_site.servicos" />
			<input type="submit" name="acao" value="Atualizar!" />
		</div><!--form-group-->
	</form>
</div><!--box-content-->