<?php include 'cabecalho.php'; ?>
<?php include 'conecta.php'; ?>
<?php include 'banco-produto.php'; ?>

<?php
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
?>


