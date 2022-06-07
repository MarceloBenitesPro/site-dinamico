<?php 
  if(isset($_COOKIE['lembrar'])){
       $user = $_COOKIE['user'];
       $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
        $sql->execute(array($user,$password));

         if($sql->rowCount() == 1){
                     $info = $sql->fetch();
                     $_SESSION['login'] = true;
                     $_SESSION['user'] = $user;
                     $_SESSION['password'] = $password;
                     $_SESSION['nome'] = $info['nome'];
                     $_SESSION['cargo'] = $info['cargo'];
                     $_SESSION['img'] = $info['img']; 
                     header('Location: '.INCLUDE_PATH_PAINEL);
                     die();
         }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style2.css" />
   <script href="<?php echo INCLUDE_PATH; ?>"src="https://kit.fontawesome.com/f456eda14a.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="box-login">
      <?php
        if(isset($_POST['acao'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
            $sql->execute(array($user,$password));

            if($sql->rowCount() == 1){
                   $info = $sql->fetch();
                  //logamos com sucesso
                  $_SESSION['login'] = true;
                  $_SESSION['user'] = $user;
                  $_SESSION['password'] = $password;
                  $_SESSION['nome'] = $info['nome'];
                  $_SESSION['cargo'] = $info['cargo'];
                  $_SESSION['img'] = $info['img'];
                  if(isset($_POST['lembrar'])){
                        setcookie('lembrar',true,time()+(60*60*24),'/');
                        setcookie('user',$user,time()+(60*60*24),'/');
                        setcookie('password',$password,time()+(60*60*24),'/');
                  }

                  header('Location: '.INCLUDE_PATH_PAINEL);
                  die();
               }else{
                  //falhou
                  echo '<div class="erro-box"><i class="fa-solid fa-xmark"></i> Usuario ou senha incorretos!</div>';
               }
         }
      ?>
   	<form method="post">
   		<h2>Efetue o Login</h2>
   		<input type="text" name="user" placeholder="login..." required >
   		<input type="password" name="password" placeholder="Senha" required >
         <div class="form-group-login">
   		<input type="submit" name="acao" value="logar">
      </div>
       <div class="form-group-login">
         <label>Lembrar-me</label>
         <input type="checkbox" name="lembrar" />
      </div>
      <div class="clear"></div>
   	</form>
   </div><!--box-login-->
</body>
</html>