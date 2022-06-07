<?php
if(isset($_GET['id'])){
  $id = (int)$_GET['id'];
  $depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id));
}else{
	Painel::alert('erro','Você precisa passar o parametro ID.');
	die();
}
?>
<div class="box-content">
	<h2><i class="fa-solid fa-pencil"></i> Editar depoimento </h2>
	<form method="post" enctype="multipart/form-data">
		<?php
		   if(isset($_POST['acao'])){
		   if(Painel::update($_POST)){
                 Painel::alert('sucesso', 'O depoimento foi editado com sucesso! '); 
                 $depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id)); 
             }else{
             	Painel::alert('erro', 'Campos Vázios Não São Permitidos! ');
             }
             
		   }
		?>
		
	<div class="form-group">
      <label>Nome da Pessoa:</label>
      <input type="text" name="nome" value = "<?php echo $depoimento['nome'] ?>"/>
    </div><!--form-group-->

    <div class="form-group">
      <label>Depoimento:</label>
      <textarea class="timyce" name="depoimento" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ><?php echo $depoimento['depoimento'] ?></textarea>
    </div><!--form-group-->

     <div class="form-group">
      <label>Data:</label>
      <input formato ="data" type="text" name="data" value="<?php echo $depoimento['data'] ?>" />
    </div><!--form-group-->


		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id;  ?>">
			<input type="hidden" name="nome_tabela" value ="tb_site.depoimentos" />
			<input type="submit" name="acao" value="Atualizar!" />
		</div><!--form-group-->
	</form>
</div><!--box-content-->