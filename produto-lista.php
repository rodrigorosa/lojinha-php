<?php include 'cabecalho.php'; ?>
<?php include 'conecta.php'; ?>
<?php include 'banco-produto.php'; ?>

<?php if(array_key_exists('removido', $_GET) && $_GET['removido'] == 'true') { ?>
  <p class="alert-success text-center">Produto removido com sucesso</p>
<?php } ?>

<?php $produtos = listaProdutos($conexao); ?>

<table class="table table-striped">
  <?php foreach($produtos as $produto) { ?>
  <tr>
    <td><?= $produto['nome'] ?></td>
    <td><?= substr($produto['descricao'], 0,20) . '...'?></td>
    <td><?= $produto['preco']?></td>
    <td><?= $produto['categoria_nome']?></td>
    <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id']?>">alterar</a></td>
    <td>
      <form action="remove-produto.php?>" method="post">
      <input type="hidden" name="id" value="<?= $produto['id'] ?>">
        <button class="btn btn-danger">remover</a>
      </form>
    </td>
  </tr>
  <?php } ?>
</table>

<?php include 'rodape.php'; ?>
