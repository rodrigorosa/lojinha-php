<?php include 'cabecalho.php'; ?>
<?php include 'conecta.php'; ?>
<?php include 'banco-produto.php'; ?>
<?php include 'banco-categoria.php'; ?>

<?php
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$usado = $produto['usado'] ? "checked='checked'" : "";
$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Produtos</h1>

<div class="container">
  <form action="altera-produto.php" method="post">

    <input type="hidden" name="id" value="<?=$produto['id']?>">

    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do produto" value="<?= $produto['nome'] ?>">
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição do produto"><?= $produto['descricao']?></textarea>
    </div>

    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço do produto" value="<?= $produto['preco'] ?>">
    </div>

    <div class="form-group">
      <input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
    </div>

    <div class="form-group">
      <label for="categoria">Categoria</label>
      <select name="categoria_id" id="categoria" class="form-control">
      <?php foreach($categorias as $categoria) :
        $selected = $produto['categoria_id']  == $categoria['id'] ? "selected='selected'" : "";
      ?>
        <option value="<?= $categoria['id'] ?>" <?=$selected?>> <?= $categoria['nome'] ?></option>
      <?php endforeach ?>
      </select>
    </div>


    <input type="submit" class="btn btn-primary" value="Alterar">
  </form>
</div>

<?php include 'rodape.php'; ?>
