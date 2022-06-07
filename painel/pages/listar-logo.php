<?php
	if(isset($_GET['excluir'])){
      $idExcluir = (int)$_GET['excluir'];
      $selectImagem = MySql::conectar()->prepare("SELECT logo FROM `tb_site.logo` WHERE id = ?");
      $selectImagem->execute(array($_GET['excluir']));
      $imagem = $selectImagem->fetch()['logo'];
      Painel::deleteFile($imagem);
      Painel::deletar('tb_site.logo',$idExcluir);
      Painel::redirect(INCLUDE_PATH_PAINEL.'listar-logo');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
       Painel::orderItem('tb_site.logo',$_GET['order'],$_GET['id']);
  }
   $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
   $porPagina = 4;
   $logo = Painel::selectAll('tb_site.logo',($paginaAtual - 1 )* $porPagina,$porPagina);
   
?>
<div class="box-content">
	<h2><i class="fa-solid fa-file-pen"></i> logo Cadastrados</h2>
	<div class="wraper-table">
   <table>
   	  <tr>
   	  	<td><i class="fa-solid fa-id-card"></i> Nome:</td>
   	  	<td><i class="fa-solid fa-calendar-pen"></i> Imagem:</td>
   	  	<td><i class="fa-solid fa-pencil"></i> Editar:</td>
   	  	<td><i class="fa-solid fa-circle-xmark"></i> Deletar:</td>
        <td><i class="fa-solid fa-arrow-up"></i></td>
        <td><i class="fa-solid fa-arrow-down"></i></td>

   	  </tr>
   	     <?php
   	       foreach ($logo as $key => $value) {   
   	     ?>
   	  <tr>
   	  	<td><?php echo $value['nome']; ?></td>

   	  	<td><img style="width:50px; height:50px; "src="<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['logo']; ?>" /></td>
   	  	<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-logo?id=<?php echo $value['id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
   	  	<td><a actionBtn ="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-logo?excluir=<?php echo $value['id']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-logo?order=up&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-up"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-logo?order=down&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-down"></i></a></td>
   	  </tr>
   	<?php } ?>
   </table>
</div><!--wraper-table-->

<div class="paginacao">
	<?php
	  $totalPaginas = ceil(count(Painel::selectAll('tb_site.logo')) / $porPagina);
     
     for($i = 1 ; $i <= $totalPaginas; $i++){
     	if($i == $paginaAtual)
        echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-logo?pagina='.$i.'">'.$i.'</a>';
        else
        echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-logo?pagina='.$i.'">'.$i.'</a>';
     }

	?>
</div><!--paginacao-->

</div><!--box-content-->

