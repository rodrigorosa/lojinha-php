<?php include 'cabecalho.php'; ?>

<?php
if(isset($_GET["login"]) && $_GET["login"]==true) {
  ?>
  <p class="alert-success">Logado com sucesso!</p>
  <?php
}
?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==false) {
  ?>
  <p class="alert-danger">Usuário ou senha inválida!</p>
  <?php
}
?>

<h1>Bem vindo</h1>

<?php if(isset($_COOKIE['usuario_logado'])) { ?>
<div class="text-success">Logado como usuário <?= $_COOKIE['usuario_logado'] ?> </div>
<?php } else { ?>

<h2>Login</h2>
<form action="login.php" method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" id="senha">
  </div>

  <button class="btn btn-primary">Login</button>
</form>

<?php } ?>

<?php include 'rodape.php'; ?>
