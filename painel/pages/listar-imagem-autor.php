<?php
	if(isset($_GET['excluir'])){
      $idExcluir = (int)$_GET['excluir'];
      $selectImagem = MySql::conectar()->prepare("SELECT img_autor FROM `tb_site.img_autor` WHERE id = ?");
      $selectImagem->execute(array($_GET['excluir']));
      $imagem = $selectImagem->fetch()['img_autor'];
      Painel::deleteFile($imagem);
      Painel::deletar('tb_site.img_autor',$idExcluir);
      Painel::redirect(INCLUDE_PATH_PAINEL.'listar-imagem-autor');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
       Painel::orderItem('tb_site.img_autor',$_GET['order'],$_GET['id']);
  }
   $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
   $porPagina = 4;
   $img_autor = Painel::selectAll('tb_site.img_autor',($paginaAtual - 1 )* $porPagina,$porPagina);
   
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
   	       foreach ($img_autor as $key => $value) {   
   	     ?>
   	  <tr>
   	  	<td><?php echo $value['nome']; ?></td>

   	  	<td><img style="width:50px; height:50px; "src="<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['img_autor']; ?>" /></td>
   	  	<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-imagem-autor?id=<?php echo $value['id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
   	  	<td><a actionBtn ="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-imagem-autor?excluir=<?php echo $value['id']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-imagem-autor?order=up&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-up"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-imagem-autor?order=down&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-down"></i></a></td>
   	  </tr>
   	<?php } ?>
   </table>
</div><!--wraper-table-->

<div class="paginacao">
	<?php
	  $totalPaginas = ceil(count(Painel::selectAll('tb_site.img_autor')) / $porPagina);
     
     for($i = 1 ; $i <= $totalPaginas; $i++){
     	if($i == $paginaAtual)
        echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-imagem-autor?pagina='.$i.'">'.$i.'</a>';
        else
        echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-imagem-autor?pagina='.$i.'">'.$i.'</a>';
     }

	?>
</div><!--paginacao-->

</div><!--box-content-->

