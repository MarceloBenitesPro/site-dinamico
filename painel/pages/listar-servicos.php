<?php
	if(isset($_GET['excluir'])){
      $idExcluir = (int)$_GET['excluir'];
      Painel::deletar('tb_site.servicos',$idExcluir);
      Painel::redirect(INCLUDE_PATH_PAINEL.'listar-servicos');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
       Painel::orderItem('tb_site.servicos',$_GET['order'],$_GET['id']);
  }
   $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
   $porPagina = 4;
   $servicos = Painel::selectAll('tb_site.servicos',($paginaAtual - 1 )* $porPagina,$porPagina);
   
?>
<div class="box-content">
	<h2><i class="fa-solid fa-clipboard-list"></i> Serviços Cadastrados</h2>
	<div class="wraper-table">
   <table>
   	  <tr>
   	  	<td><i class="fa-solid fa-clipboard-list"></i> Serviço:</td>
   	  	<td><i class="fa-solid fa-pencil"></i> Editar:</td>
   	  	<td><i class="fa-solid fa-circle-xmark"></i> Deletar:</td>
        <td><i class="fa-solid fa-arrow-up"></i></td>
        <td><i class="fa-solid fa-arrow-down"></i></td>

   	  </tr>
   	     <?php
   	       foreach ($servicos as $key => $value) {   
   	     ?>
   	  <tr>
   	  	<td><?php echo $value['servico']; ?></td>
   	  	<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-servico?id=<?php echo $value['id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
   	  	<td><a actionBtn ="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?excluir=<?php echo $value['id']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?order=up&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-up"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?order=down&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-down"></i></a></td>
   	  </tr>
   	<?php } ?>
   </table>
</div><!--wraper-table-->

<div class="paginacao">
	<?php
	  $totalPaginas = ceil(count(Painel::selectAll('tb_site.servicos')) / $porPagina);
     
     for($i = 1 ; $i <= $totalPaginas; $i++){
     	if($i == $paginaAtual)
        echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-servicos?pagina='.$i.'">'.$i.'</a>';
        else
        echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-servicos?pagina='.$i.'">'.$i.'</a>';
     }

	?>
</div><!--paginacao-->

</div><!--box-content-->

