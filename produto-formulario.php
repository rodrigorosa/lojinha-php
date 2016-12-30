<?php include 'cabecalho.php'; ?>
<?php include 'conecta.php'; ?>
<?php include 'banco-categoria.php'; ?>

<?php
$categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>

<div class="container">
  <form action="adiciona-produto.php" method="post">

    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do produto">
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição do produto"></textarea>
    </div>

    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço do produto">
    </div>

    <div class="form-group">
      <input type="checkbox" name="usado" value="true"> Usado
    </div>

    <div class="form-group">
      <label for="categoria">Categoria</label>
      <select name="categoria_id" id="categoria" class="form-control">
      <?php foreach($categorias as $categoria) : ?>
        <option value="<?= $categoria['id'] ?>"> <?= $categoria['nome'] ?></option>
      <?php endforeach ?>
      </select>
    </div>


    <input type="submit" class="btn btn-primary" value="Cadastrar">
  </form>
</div>

<?php include 'rodape.php'; ?>
