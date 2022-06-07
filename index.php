<?php include('config.php'); ?>
<?php Site::UpdateUsuarioOnline();?>
<?php Site::contador();?>
<?php
 $infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
 $infoSite->execute();
 $infoSite = $infoSite->fetch();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $infoSite['titulo']; ?></title>
	<link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style1.css" rel="stylesheet" type="text/css" href="">
	<script href="<?php echo INCLUDE_PATH; ?>"src="https://kit.fontawesome.com/f456eda14a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="palavras-chaves,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta rel= "icon" href="<?php echo INCLUDE_PATH;?>favicon.ico" type="images/x-icon" />
	<meta charset="utf-8"/>
</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
	 $url = isset($_GET['url']) ? $_GET['url'] : 'home';
     switch($url){
        case 'depoimentos':
		 echo '<target target="depoimentos"  />';
		 break;
		 case 'servicos':
		 echo '<target target="servicos"  />';
		 break;

	 }
	?>
	<?php new Email();?>
   <header>
   	<div class="center"><!--center-->
          <?php
                $sql = MySql::conectar()->prepare("SELECT * FROM  `tb_site.logo` ORDER BY order_id  ASC LIMIT 1");
                $sql->execute();
                $logo = $sql->fetchAll();
                foreach ($logo as $key => $value) {
             ?>
   	   <a href="<?php echo INCLUDE_PATH; ?>Home"><div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['logo']; ?>');" class="logo"></div></a><!--banner-single-->

            

      <?php } ?>
   	  <nav class="desktop right">
   	  	<ul>
   	  		<li><a href="<?php echo INCLUDE_PATH; ?>Home">Home</a></li>
   	  		<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
   	  		<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
   	  		<li><a  realtime= "noticias" href="<?php echo INCLUDE_PATH; ?>noticias">Noticias</a></li>
   	  		<li><a  realtime= "contato" href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>	 
   	  	</ul>
   	  </nav>
   	  <nav class="mobile right">
         <div class="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
           </div>
   	  	<ul>
   	  		<li><a href="<?php echo INCLUDE_PATH; ?>Home">Home</a></li>
		    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
            <li><a  realtime= "noticias" href="<?php echo INCLUDE_PATH; ?>noticias">Noticias</a></li>
            <li><a realtime= "contato" href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
   	  	</ul>
   	  </nav>
   	  <div class="clear"></div><!--clear-->
   	</div><!--center-->
   </header>
       <div class="container-principal">
		<?php 
			
			if(file_exists('pages/'.$url.'.php')){
				include('pages/'.$url.'.php');
			}else{
				if($url != 'depoimentos' && $url != 'servicos'){
               $urlPar = explode('/', $url)[0];
               if($urlPar != 'noticias'){
					$pagina404 = true;
					include('pages/404.php');
            }else{
               include('pages/noticias.php');
            }
               }else{
					include('pages/home.php');
               }
				
			}
		?>
	    </div><!--container-principal--->


   <footer <?php if(isset($pagina404) && $pagina404 == true)echo 'class="fixed"'; ?>>
   	<div class="center">
   	<p>Todos os direitos reservados</p>
   </div><!--center-->
   </footer>
   <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDqN3l1SpFKJUEDlQ-c7sPZn-ZjSmD9qYA'></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
   
   <?php
     if(is_array($url) && strstr($url[0],'noticias') !== false){
   ?>
    <script>
      $(function(){
        $('select').change(function(){
          location.href=include_path+"noticias/"+$(this).val();
        })
      })
    </script>
 <?php } ?>

	 <?php
		if($url == 'Contato'){
	?>
	<?php } ?>
</body>
</html>