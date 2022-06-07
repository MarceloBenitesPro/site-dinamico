<div class="box-content">
	<h2><i class="fa-solid fa-laptop-file"></i> Cadastrar Serviço</h2>
	<form method="post" enctype="multipart/form-data">
		<?php
		   if(isset($_POST['acao'])){
		   	
		   	if(Painel::insert($_POST)){
            Painel::alert('sucesso', 'O cadastro do serviço foi realizado com sucesso');  
             }else{
             	Painel::alert('erro', 'Campos vazios não são permitidos!');
             }
             
		   }
		?>
		

    <div class="form-group">
      <label>Descreva o Serviço:</label>
      <textarea name="servico" class="timyce" style="margin-top: 8px; font-size: 16px; font-weight: normal; color: black; width: 100%; height:150px; border: 1px solid #ccc; padding-left: 8px; resize: vertical;" ></textarea>
    </div><!--form-group-->


		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value ="tb_site.servicos" />
			<input type="submit" name="acao" value="Cadastrar!" />
		</div><!--form-group-->
	</form>
</div><!--box-content-->