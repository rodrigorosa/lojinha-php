<?php

function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function insereProduto($conexao, $nome, $descricao, $preco, $categoria_id, $usado) {
  $query = "insert into produtos (nome, descricao, preco, categoria_id, usado) values ('{$nome}','{$descricao}',{$preco},{$categoria_id},{$usado})";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}

function alteraProduto($conexao, $id, $nome, $descricao, $preco, $categoria_id, $usado) {
  $query = "update produtos set nome='{$nome}', descricao='{$descricao}', preco={$preco}, categoria_id={$categoria_id}, usado={$usado} where id = {$id}";
  $resultadoDaAlteracao = mysqli_query($conexao, $query);
  return $resultadoDaAlteracao;
}

function removeProduto($conexao, $id) {
  $query = "delete from produtos where id = {$id}";
  return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
  $query = "select * from produtos where id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($resultado);
}
