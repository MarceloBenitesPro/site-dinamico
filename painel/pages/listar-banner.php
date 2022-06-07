<?php
	if(isset($_GET['excluir'])){
      $idExcluir = (int)$_GET['excluir'];
      $selectImagem = MySql::conectar()->prepare("SELECT banner FROM `tb_site.banner` WHERE id = ?");
      $selectImagem->execute(array($_GET['excluir']));
      $imagem = $selectImagem->fetch()['banner'];
      Painel::deleteFile($imagem);
      Painel::deletar('tb_site.banner',$idExcluir);
      Painel::redirect(INCLUDE_PATH_PAINEL.'listar-banner');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
       Painel::orderItem('tb_site.banner',$_GET['order'],$_GET['id']);
  }
   $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
   $porPagina = 4;
   $banner = Painel::selectAll('tb_site.banner',($paginaAtual - 1 )* $porPagina,$porPagina);
   
?>
<div class="box-content">
	<h2><i class="fa-solid fa-file-pen"></i>Banners Cadastrados</h2>
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
   	       foreach ($banner as $key => $value) {   
   	     ?>
   	  <tr>
   	  	<td><?php echo $value['nome']; ?></td>

   	  	<td><img style="width:50px; height:50px; "src="<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['banner']; ?>" /></td>
   	  	<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-banner?id=<?php echo $value['id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
   	  	<td><a actionBtn ="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-banner?excluir=<?php echo $value['id']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-banner?order=up&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-up"></i></a></td>
        <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-banner?order=down&id=<?php echo $value['id']?>"><i class="fa-solid fa-arrow-down"></i></a></td>
   	  </tr>
   	<?php } ?>
   </table>
</div><!--wraper-table-->

<div class="paginacao">
	<?php
	  $totalPaginas = ceil(count(Painel::selectAll('tb_site.banner')) / $porPagina);
     
     for($i = 1 ; $i <= $totalPaginas; $i++){
     	if($i == $paginaAtual)
        echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-banner?pagina='.$i.'">'.$i.'</a>';
        else
        echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-banner?pagina='.$i.'">'.$i.'</a>';
     }

	?>
</div><!--paginacao-->

</div><!--box-content-->

